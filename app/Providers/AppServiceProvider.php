<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;


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
        Model::preventLazyLoading();

        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Gate::define('edit-job', function (User $user, Job $job) {
        //     return $job->employer->user->is($user);
        // });
    }
}
