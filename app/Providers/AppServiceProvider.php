<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Manufacture;
use App\Models\Order;

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
        view()->composer('*',function($view){
            Schema::defaultStringLength(191);
            Paginator::useBootstrap();

            $product=Product::all()->count();
            $protype=Protype::all()->count();
            $manu=Manufacture::all()->count();
            $order=Order::all()->count();
            $view->with('product',$product)->with('protype',$protype)->with('manu',$manu)->with('order',$order);
        });
    }
}
