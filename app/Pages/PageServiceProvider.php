<?php

namespace App\Pages;

use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(StorageLocationRegistry::class)
            ->register('local', new LocalRepository())
            ->register('database', new DatabaseRepository())
            ->register('dropbox', new DropboxRepository());

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StorageLocationRegistry::class);
    }
}
