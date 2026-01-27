<?php

namespace App\Providers;
use App\Models\HeroSection;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
    // Hero Section (Global)
    View::composer('*', function ($view) {
        $heroSlides = HeroSection::where('aktif', 1)
            ->orderBy('urutan')
            ->get();

        $view->with('heroSlides', $heroSlides);
    });

    // Pagination Bootstrap 5
    Paginator::useBootstrapFive();
}
}
