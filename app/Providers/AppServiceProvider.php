<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

use App\Models\TblCart;

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
        view()->composer('*', function ($quant) {
            $qtty = 0;
            if (Auth::check() ) {
                $carts = TblCart::where('user_id', Auth::user()->id)
                    ->get();
                foreach ($carts as $cart) {
                    $qtty += $cart->quantity;
                }
                $quant->with('quant', $qtty );
                
            }else{
                $quant->with('quant', 0);
            }
            view()->share('count',$qtty);
        });
        

    }
}
