<?php

namespace App\Providers;

use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Navigation;

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
        Facades\View::composer('admin.pages.*', function (View $view) {
            $total_user = User::count();

            $navigations = Navigation::with('children')->where('is_root', 1)->get();
            $view->with('navigations', $navigations);
        });
    }
}
