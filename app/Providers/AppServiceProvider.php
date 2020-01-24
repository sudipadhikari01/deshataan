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
use App\TourTip as TIP;
use App\WebsiteInfo as WebInfo;
use App\PageInfo as PageInfo;


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
            $topPackages = Pkg::orderBy('visit_count', 'desc')->take(5)->get();
        } catch (\Throwable $th) {
            $topPackages = $packages;
        }
        try {
            $individualPackages = Ipkgs::orderBy('visit', 'desc')->get();
        } catch (\Throwable $th) {
            $individualPackages = array();
        }

        try {
            $tips = TIP::all();
        } catch (\Throwable $th) {
            $tips = array();
        }

        try {
            $pageInfo = PageInfo::all();
            // echo "<pre>";
            // var_dump($pageInfo);
        } catch (\Throwable $th) {
            $pageInfo = array();
        }

        try {
            $webInfo = WebInfo::first();
        } catch (\Throwable $th) {
            $webInfo = array();
        }
        // dump($webInfo);
        // die;
        View::share(['individualPackages' => $individualPackages, 'topPackages' => $topPackages, 'allPackages' => $packages, 'testimonials' => $testimonials, 'tips' => $tips, 'pageInfo' => $pageInfo, 'webInfo' => $webInfo]);
        // View::share('topPackages', $topPackages);
        // View::share('allPackages', $packages);
        // dd($packages);
        // View::share('hotelList', $hotelList);


    }
}