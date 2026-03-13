<?php

namespace App\Livewire;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Joaopaulolndev\FilamentEditProfile\Concerns\HasSort;
use Livewire\Component;
use Native\Mobile\Facades\System;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class MobileSettingsComponent extends Component implements HasForms
{
    use HasSort;
    use InteractsWithForms;

    public $selectedLocale;

    protected static int $sort = 25;

    public static function getSort(): int
    {
        return static::$sort;
    }

    public function mount(): void
    {
        $this->selectedLocale = app()->getLocale();
    }

    public function changeLanguage($locale): void
    {
        if (array_key_exists($locale, config('filament-language-switcher.locals'))) {
            app()->setLocale($locale);
            session()->put('locale', $locale);
            
            if (Auth::check()) {
                $user = Auth::user();
                if (isset($user->lang)) {
                    $user->update(['lang' => $locale]);
                } else {
                    \App\Models\UserLanguage::updateOrCreate(
                        ['model_type' => $user->getMorphClass(), 'model_id' => $user->id],
                        ['lang' => $locale]
                    );
                }
            }

            $this->selectedLocale = $locale;
            $this->dispatch('refresh');
            
            \Filament\Notifications\Notification::make()
                ->title(__('Bahasa Berhasil Diubah'))
                ->success()
                ->send();
            
            // Redirect to refresh the whole UI state
            $this->redirect(request()->header('Referer'));
        }
    }

    public function openSettings(): void
    {
        System::appSettings();
    }

    public function render(): View
    {
        return view('livewire.mobile-settings-component');
    }
}
