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

// Only register NativeServiceProvider in native mobile app environments
// Skip on web servers (Vercel, Docker, local web server, etc.)
$isNativeApp = defined('NATIVEPHP_RUNNING') || env('NATIVEPHP_RUNNING') === true;
$isWebServer = env('VERCEL') || env('DOCKER_ENV') || (isset($_SERVER['REQUEST_METHOD']) && ! $isNativeApp);

if ($isNativeApp && ! $isWebServer) {
    $providers[] = NativeServiceProvider::class;
}

return $providers;
