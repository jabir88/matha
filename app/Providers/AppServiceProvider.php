<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Category;
use App\Contactus;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Schema::defaultStringLength(191);


         View::composer('admin.inc.header',function($mess){
           $messes = Contactus::orderBy('conus_id','DESC')->where('conus_status',1)->get();
           $mess->with(compact('messes'));
         });
         //View::share('name','Sabbir');
         View::composer('admin.inc.header',function ($i)
         {
           $con_all =Contactus::where('conus_status','1')->orderBy('conus_id','DESC')->get();

           $countme=   $countme = count($con_all);;
           $i->with(compact('countme'));

         });
         View::composer('forntEnd.inc.nav',function ($i)
         {
           $d= Category::where('pub_status',1)->get();
           $i->with(compact('d'));

         });




         // View::composer('forntEnd.inc.nav',function($view){
         //   $view->with('name','Sabbir');
         // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
