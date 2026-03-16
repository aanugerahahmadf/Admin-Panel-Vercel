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

// Only register NativeServiceProvider on mobile/native environments
// Skip on Vercel, Docker, and pure web server environments
if (! env('VERCEL') && ! env('DOCKER_ENV') && PHP_OS_FAMILY !== 'Windows') {
    // Additional safety: check if we're not in a standard web server context
    if (! isset($_SERVER['REQUEST_METHOD']) || defined('NATIVEPHP_RUNNING') || env('NATIVEPHP_RUNNING')) {
        $providers[] = NativeServiceProvider::class;
    }
}

return $providers;
