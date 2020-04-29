<?php

namespace Tutorialghor\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{
    
    
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
    }
}