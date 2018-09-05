<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;
use Carbon\Carbon;
use DB;

class ProductController extends Controller
{
  public  function __construct(){
    $this->middleware('auth');
  }
  public function addProduct()
  {
    $categories = Category::where('pub_status',1)->get();
    $manufacturers = Manufacturer::where('pub_status',1)->get();
    return view('admin.product.createproduct',compact('categories','manufacturers'));
  }
  public function insertProduct(Request $req)
  {

    $this->validate($req,[
      'product_name'=> 'required|min:5|max:80',
      // 'id'=> 'required',
      // 'manu_id'=> 'required',
      'product_price'=> 'required',
      'product_quantity'=> 'required',
      'product_short_des'=> 'required|min:5',
      'product_long_des'=> 'required|min:20',
      // 'product_img'=> 'required',

    ],[
      'product_name.required'=>"Please Enter Category Name",
      'product_name.min'=>"Please Enter Minimum 5 characters Category Name",
      'product_short_des.required'=>"Please Enter Product Short Description",
      'product_short_des.min'=>"Please Enter Minimum 5 characters Product Short Description",
      'product_long_des.min'=>"Please Enter Minimum 20 characters Product Long Description",
      'product_long_des.required'=>"Please Enter Product Long Description",
      // 'product_img.required'=>"Please Upload Product Image. ",
    ]);
      $productimg= $req->file('product_img');
      $imgname= $productimg->getClientOriginalName();
      $uploadPath = 'productimages/';
      $productimg->move($uploadPath,$imgname);
      $imgUrl=$uploadPath.$imgname;

    $productup = Product::insert([
      'product_name'=>$_POST['product_name'],
      'id'=>$_POST['cate_name'],
      'manu_id'=>$_POST['manu_name'],
      'product_price'=>$_POST['product_price'],
      'product_quantity'=>$_POST['product_quantity'],
      'product_short_des'=>$_POST['product_short_des'],
      'product_long_des'=>$_POST['product_long_des'],
      'product_img'=> $imgUrl,
      'pub_status'=>$_POST['pub_status'],
      'created_at'=>Carbon::now(),
      ]);
      if ($productup) {
        return redirect()->back()->with('status', 'Product Add Successfully!');
        }else {
        return redirect()->back();
      }

 // return $req->all();
    // $this->validate($req,[
    //   'product_name'=> 'required|min:5|max:80',
    //   // 'id'=> 'required',
    //   // 'manu_id'=> 'required',
    //   'product_price'=> 'required',
    //   'product_quantity'=> 'required',
    //   'product_short_des'=> 'required|min:5',
    //   'product_long_des'=> 'required|min:20',
    //   // 'product_img'=> 'required',
    //
    // ],[
    //   'product_name.required'=>"Please Enter Category Name",
    //   'product_name.min'=>"Please Enter Minimum 5 characters Category Name",
    //   'product_short_des.required'=>"Please Enter Product Short Description",
    //   'product_short_des.min'=>"Please Enter Minimum 5 characters Product Short Description",
    //   'product_long_des.min'=>"Please Enter Minimum 20 characters Product Long Description",
    //   'product_long_des.required'=>"Please Enter Product Long Description",
    //   // 'product_img.required'=>"Please Upload Product Image. ",
    // ]);
    // $productimg = $req->file('product_img');
    //
    // $imgname= $productimg->getClientOriginalName();
    // $uploadPath = 'productimages/';
    // $productimg->move($uploadPath,$imgname);
    // $imgUrl=$uploadPath.$imgname;
    //
    // $proinsert=  Product::insert([
    //   'product_name'=>$_POST['product_name'],
    //   'id'=>$_POST['cate_name'],
    //   'manu_id'=>$_POST['manu_name'],
    //   'product_price'=>$_POST['product_price'],
    //   'product_quantity'=>$_POST['product_quantity'],
    //   'product_short_des'=>$_POST['product_short_des'],
    //   'product_long_des'=>$_POST['product_long_des'],
    //   'product_img'=>$imgUrl,
    //   'pub_status'=>$_POST['pub_status'],
    //   'created_at'=>Carbon::now('YYYY-MM-DD HH:MM:SS'),
    // ]);
    // if ($proinsert) {
    //   return redirect()->back()->with('status', 'Product Add Successfully!');
    //   }else {
    //   return redirect()->back();
    // }

  // $this->save_product_info($imgUrl);

  }

  //Mange Product
  public function manageProduct()
  {
    $producdet = DB::table('products')
                ->join('categories', 'products.id', '=', 'categories.id')
                ->join('manufacturers', 'products.manu_id', '=', 'manufacturers.manu_id')
                ->select('products.*', 'categories.cate_name', 'manufacturers.manu_name')

                ->get();
    // echo $producdet;
    return view('admin.product.manageProduct',compact('producdet'));
  }
  public function editProduct($pro_id)
  {
    $categories = Category::where('pub_status',1)->get();
    $manufacturers = Manufacturer::where('pub_status',1)->get();
    $products = Product::where('pro_id',$pro_id)->where('pub_status',1)->first();

  $selectedcate = Category::where('id',$products->id)->first();
     // return $selectedcate;
      return view('admin.product.editProduct',compact('categories','manufacturers','products','selectedcate'));
  }

  public function editsubmitProduct(Request $req)
  {
  $s =  $this->img_fun($req);

    $update_pro = Product::findOrFail ( $_POST['pro_id'])->update([
        'product_name'=> $_POST['product_name'],
        'id'=> $_POST['cate_name'],
        'manu_id'=> $_POST['manu_name'],
        'product_price'=> $_POST['product_price'],
        'product_quantity'=> $_POST['product_quantity'],
        'product_short_des'=> $_POST['product_short_des'],
        'product_long_des'=> $_POST['product_long_des'],
        'product_img'=> $s,
        'pub_status'=> $_POST['pub_status'],

    ]);
    if ($update_pro) {
      return back()->with('status','Product Update Successfully!');
    }else {
      return back()->with('status','Product Update Failed!');
      // code...
    }
    }
  public function img_fun($req)
  {
      $productimg =$req->file('product_img');
    if ($productimg) {
      $imgname = "Update-". $productimg->getClientOriginalName();
      $uploadPath = 'productimages/';
      $productimg->move($uploadPath,$imgname);
      $imgUrl = $uploadPath.$imgname;
    }else {

      $productname=  Product::where('pro_id',$req->pro_id)->first();
      $imgUrl =  $productname->product_img;
    }
    return $imgUrl;
  }

  public function deleteProduct($id)
  {
    $delete= Product::where('pro_id',$id)->delete();
    // return  $delete;
   return back();
  }


  }
