<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! config('queue.connections.rabbitmq')) {
            return;
        }

        config([
            'queue.connections.rabbitmq.hosts' => [
                [
                    'host' => env('RABBITMQ_HOST', '127.0.0.1'),
                    'port' => env('RABBITMQ_PORT', 5672),
                    'user' => env('RABBITMQ_USER', env('RABBITMQ_DEFAULT_USER', 'guest')),
                    'password' => env('RABBITMQ_PASSWORD', env('RABBITMQ_DEFAULT_PASS', 'guest')),
                    'vhost' => env('RABBITMQ_VHOST', env('RABBITMQ_DEFAULT_VHOST', '/')),
                ],
            ],
        ]);
    }
}
