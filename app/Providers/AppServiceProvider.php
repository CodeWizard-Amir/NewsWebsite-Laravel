<?php

namespace App\Providers;
use App\Models\my_news;
use App\Models\slider;
use App\Models\media;
use App\Models\multislider;
use App\Models\categories;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
            $this->app->bind(MyInterface::class, MyRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

       $ins = media::where('position' ,0)->get()->last();
       $twe = media::where('position' ,1)->get()->last();
       $tel = media::where('position' ,2)->get()->last();
       $fac = media::where('position' ,3)->get()->last();
       $bignews = my_news::where('position','=',0)->get()->last();
       $N_moreviwes = my_news::orderBy('view' , 'desc')->get()->take(5);
       $countnews = my_news::get();
       $N_morelikes = my_news::get()->sortBy('like')->take(3);
       $cat_menu = categories::get();
    //    /////////////////////
       $mpslider = multislider::where('position' , 1)->get();
       $mbslider = multislider::where('position' , 0)->get();
       $tbslider = slider::where('position' ,'=', 0)->get()->last();
       $tpslider = slider::where('position' ,'=', 1)->get()->last();
       View::share(compact('countnews','bignews','ins','tel','twe','fac','N_moreviwes','N_morelikes' ,'cat_menu','mpslider' ,'tbslider' , 'tpslider' ,'mbslider')); 
    }

    

}
