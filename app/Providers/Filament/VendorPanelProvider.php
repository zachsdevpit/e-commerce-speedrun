<?php

namespace App\Providers\Filament;

use App\Http\Middleware\VendorMiddleware;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class VendorPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default(false)
            ->id('vendor')
            ->path('vendor')
            ->viteTheme('resources/css/app.css')
            ->colors([
                'primary' => Color::Blue,
            ])
            ->brandLogo(fn () => view('logo'))
            ->topNavigation()
            ->discoverResources(in: app_path('Filament/Vendor/Resources'), for: 'App\\Filament\\Vendor\\Resources')
            ->discoverPages(in: app_path('Filament/Vendor/Pages'), for: 'App\\Filament\\Vendor\\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Vendor/Widgets'), for: 'App\\Filament\\Vendor\\Widgets')
            ->discoverClusters(in: app_path('Filament/Vendor/Clusters'), for: 'App\\Filament\\Vendor\\Clusters')
            ->widgets([
                Widgets\AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
                VendorMiddleware::class,
            ], isPersistent: true);
    }
}
