<?php

use App\Providers\AppServiceProvider;
use App\Providers\AutoTranslationServiceProvider;
use App\Providers\Filament\AdminPanelProvider;
use App\Providers\FilamentLanguageSwitcherServiceProvider;
use App\Providers\NativeServiceProvider;
use App\Providers\VoltServiceProvider;

$providers = [
    AppServiceProvider::class,
    AutoTranslationServiceProvider::class,
    AdminPanelProvider::class,
    VoltServiceProvider::class,
    FilamentLanguageSwitcherServiceProvider::class,
];

// NEVER register NativeServiceProvider on Vercel, Docker, or when REQUEST_METHOD is set (web request)
// Only register when running as a native mobile app with NATIVEPHP_RUNNING constant
if (! env('VERCEL') && ! env('DOCKER_ENV') && ! isset($_SERVER['REQUEST_METHOD']) && defined('NATIVEPHP_RUNNING')) {
    $providers[] = NativeServiceProvider::class;
}

return $providers;
