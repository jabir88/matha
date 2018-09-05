<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public  function __construct(){
      $this->middleware('auth');
    }
    public function addCategory()
    {
      return view('admin.category.createcategory');
    }
    public function insertCategory(Request $req)
    {
      $this->validate($req,[
        'cate_name'=> 'required|min:5|max:80',
        'cate_des'=> 'required|min:20',
      ],[
        'cate_name.required'=>"Please Enter Category Name",
        'cate_name.min'=>"Please Enter Minimum 5 characters Category Name",
        'cate_des.required'=>"Please Enter Category Description",
      ]);
      $insert=  Category::insert([
        'cate_name'=>$_POST['cate_name'],
        'cate_des'=>$_POST['cate_des'],
        'pub_status'=>$_POST['pub_status'],
      ]);
      if ($insert) {
        return redirect()->back()->with('status', 'Category Add Successfully!');
      }else {
      return redirect()->back();
      }
    }
    public function viewCategory()
    {
      $cet_all =Category::orderBy('id','DESC')->get();
      return view('admin.category.viewcategory',compact('cet_all'));
    }
    public function editCategory($id)
    {

    $editcate =  Category::findOrFail($id);
    return view('admin.category.editcategory',compact('editcate'));
    }
    public function editsubmitCategory()
    {
      Category::findOrFail($_POST['id'])->update([
        'cate_name'=>$_POST['cate_name'],
        'cate_des'=>$_POST['cate_des'],
        'pub_status'=>$_POST['pub_status'],
     ]);
     return redirect('admin/category/view');
    }
    public function deleteCategory($id)
    {
     Category::findOrFail($id)->delete();
     return back();
    }
    public function singleviewCategory($id)
    {
      $info = Category::findOrFail($id);
        return view('admin.category.singleview',compact('info'));

      // echo $info;
    }
}
