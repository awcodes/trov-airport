<?php

namespace Trov\Airport;

use Livewire\Livewire;
use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class TrovAirportServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('trov-airport')
            ->hasViews()
            ->hasCommand(Commands\InstallTrovAirport::class)
            ->hasMigrations([
                'create_runways_table',
            ]);
    }
}
