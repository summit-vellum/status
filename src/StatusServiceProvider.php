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
    }

    public function register()
    {
        Event::listen(Quill::MODULE, RegisterStatusModule::class);
    }
}
