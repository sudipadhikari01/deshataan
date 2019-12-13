<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Hotel as Hotel;
use App\IndividualPackage as Ipkgs;
use App\Itinerary as Itin;
use App\PackageType as Pkg;
use App\PhotoGallery as Pg;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
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
        //
        Schema::defaultStringLength(191);
        $packages = Pkg::all();
        $individualPackages = Ipkgs::orderBy('visit','desc')->get();
        $topPackages = Pkg::orderBy('visit_count','desc')->take(5)->get();
        // $hotelList = Hotel::all();
        View::share('individualPackages', $individualPackages);
        View::share('topPackages', $topPackages);
        View::share('allPackages', $packages);
        // dd($packages);
        // View::share('hotelList', $hotelList);


    }
}
