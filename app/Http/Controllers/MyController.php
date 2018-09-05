<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Carbon\Carbon;
class MyController extends Controller
{
    public  function __construct()
    {

    }
    public function home_fun(){
      $allpro =Product::orderBy('pro_id', 'DESC')->get();
      $today = Product::orderBy('pro_id', 'DESC')->whereDate('created_at', Carbon::today())->get();
      $limit = $allpro->take(4);
      ;
      return view('forntEnd.home.homeContent',compact('allpro','limit','today'));
    }
    public function category($id){
    $product_one =  Category::findOrFail($id);
    $product_details =  Product::where('id',$id)->where('pub_status',1)->get();
              return view('forntEnd.category.categoryContent',compact('product_details','product_one'));
              // return  $product_details;

    }

    public function Contact(){
      return view('forntEnd.contact.contactContent');
    }

    public function offers(){
      return view('forntEnd.offers.offersContent');
    }

    public function singlepage($id){
      $allProduct_details = Product::findOrFail($id);
      return view('forntEnd.single.singleContent',compact('allProduct_details'));
      // return $allProduct_details;
    }


}
