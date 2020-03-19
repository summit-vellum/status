<?php

namespace Quill\Status;

use Vellum\Module\Quill;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Quill\Status\Listeners\RegisterStatusModule;

class StatusServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/status.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->publishes([
            __DIR__ . '/config/status.php' => config_path('status.php'),
        ], 'status.config');

        $this->publishes([
        	__DIR__ . '/database/factories/StatusFactory.php' => database_path('factories/StatusFactory.php'),
            __DIR__ . '/database/seeds/StatusTableSeeder.php' => database_path('seeds/StatusTableSeeder.php'),
        ], 'status.migration');
    }

    public function register()
    {
        Event::listen(Quill::MODULE, RegisterStatusModule::class);
    }
}
