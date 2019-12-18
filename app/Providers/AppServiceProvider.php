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
use App\Testimonial as Testimonial;


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
        try {
            $packages = Pkg::all();
        } catch (\Throwable $th) {
            $packages = array();
        }
        try {
            $testimonials = Testimonial::take(5)->get();
        } catch (\Throwable $th) {
            $testimonials = array();
        }
        try {
            $topPackages = Pkg::orderBy('visit_count','desc')->take(5)->get();
        } catch (\Throwable $th) {
            $topPackages = $packages;
        }
        try {
            $individualPackages = Ipkgs::orderBy('visit','desc')->get();
        } catch (\Throwable $th) {
            $individualPackages = array();
        } 
        
        // $facebook_url = '';
        // $twitter_url = '';
        // $linkedin_url = '';
        // $youtube_url = '';
        // $hotelList = Hotel::all();
        View::share(['individualPackages' => $individualPackages, 'topPackages' => $topPackages,'allPackages'=>$packages,'testimonials'=> $testimonials  ]);
        // View::share('topPackages', $topPackages);
        // View::share('allPackages', $packages);
        // dd($packages);
        // View::share('hotelList', $hotelList);


    }
}
