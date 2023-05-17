<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\User;
class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Регистрация зависимости User
        $this->app->bind(User::class, function ($app) {
            return new User();
        });

    }
}

