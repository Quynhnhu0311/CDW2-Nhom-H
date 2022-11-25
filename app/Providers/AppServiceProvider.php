<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Manufacture;
use App\Models\Order;
>>>>>>> main

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
<<<<<<< HEAD
        //
=======
        Schema::defaultStringLength(191);
        view()->composer('*',function($view){
            
            Paginator::useBootstrap();

            $product=Product::all()->count();
            $protype=Protype::all()->count();
            $manu=Manufacture::all()->count();
            $order=Order::all()->count();
            $view->with('product',$product)->with('protype',$protype)->with('manu',$manu)->with('order',$order);
        });
>>>>>>> main
    }
}
