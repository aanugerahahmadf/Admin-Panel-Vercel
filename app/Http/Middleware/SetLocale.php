<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = session()->get('locale');

        // Jika user login, sinkronisasi dengan preferensi di Database (ORM)
        if (Auth::check()) {
            /** @var User $user */
            $user = Auth::user();

            // Trait InteractsWithLanguages di model User sudah menyediakan accessor getLangAttribute()
            // yang mengembalikan string kode bahasa (misal: 'id', 'en').
            if ($user->lang) {
                $locale = $user->lang;
            }
        }

        // Jika masih kosong, coba deteksi dari browser (Auto-adjust to country)
        if (! $locale) {
            $locale = $request->getPreferredLanguage(array_keys(config('filament-language-switcher.locals', ['id', 'en'])));
        }

        if ($locale) {
            app()->setLocale($locale);
            session()->put('locale', $locale);
        }

        return $next($request);
    }
}
