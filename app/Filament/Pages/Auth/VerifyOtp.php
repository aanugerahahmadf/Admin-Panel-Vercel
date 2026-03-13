<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\PasswordReset\ResetPassword as BaseResetPassword;
use Illuminate\Support\Facades\Cache;
use Filament\Notifications\Notification;
use Filament\Facades\Filament;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Component;
use Filament\Forms\Form;

class VerifyOtp extends \Filament\Pages\SimplePage
{
    protected static string $view = 'filament-panels::pages.auth.password-reset.reset-password';

    public $email = '';
    public $otp = '';

    public function mount(): void
    {
        $this->email = request()->query('email', '');
        
        if (blank($this->email)) {
            $this->redirect(route('filament.admin.auth.password-reset.request'));
        }

        $this->form->fill([
            'email' => $this->email,
        ]);
    }

    public function verify(): void
    {
        $data = $this->form->getState();
        $email = $data['email'];
        $otp = $data['otp'];

        $cachedOtp = Cache::get('password_reset_otp_' . $email);

        if ($cachedOtp && (string) $cachedOtp === (string) $otp) {
            // Tandai bahwa OTP sudah valid untuk email ini (berlaku 5 menit)
            Cache::put('otp_verified_for_' . $email, true, now()->addMinutes(5));

            Notification::make()
                ->title(__('Kode OTP valid! Silakan atur kata sandi baru.'))
                ->success()
                ->send();

            $this->redirect(\Illuminate\Support\Facades\URL::temporarySignedRoute(
                'filament.admin.auth.password-reset.reset',
                now()->addMinutes(30),
                [
                    'email' => $email,
                    'token' => 'otp',
                ]
            ));
        } else {
            Notification::make()
                ->title(__('Kode OTP tidak valid atau telah kadaluarsa.'))
                ->danger()
                ->send();
        }
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')
                    ->label(__('Email address'))
                    ->disabled()
                    ->dehydrated(),
                TextInput::make('otp')
                    ->label(__('6 Digit Kode OTP'))
                    ->required()
                    ->length(6)
                    ->numeric()
                    ->autofocus(),
            ]);
    }

    public function getHeading(): string
    {
        return __('Verifikasi Kode OTP');
    }

    public function getSubheading(): string
    {
        return __('Masukkan 6 digit kode yang kami kirim ke email Anda.');
    }

    public function getFormActions(): array
    {
        return [
            $this->getVerifyFormAction(),
        ];
    }

    protected function getVerifyFormAction(): \Filament\Actions\Action
    {
        return \Filament\Actions\Action::make('verify')
            ->label(__('Verifikasi Kode'))
            ->submit('verify');
    }
}
