<?php

namespace Furious\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__ . "/routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/views", 'furious');
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');

        $this->mergeConfigFrom(__DIR__. '/config/contact.php', 'contact');
    }

    public function register(){

        // php artisan vendor:publish
        $this->publishes([
            __DIR__ . '/config/contact.php'=>config_path('contact.php')
        ]);

    }

}



