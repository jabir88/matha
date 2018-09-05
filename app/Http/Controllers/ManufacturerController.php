<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use Carbon\Carbon;
class ManufacturerController extends Controller
{
          public  function __construct(){
            $this->middleware('auth');
          }
          public function addManufacturer()
          {
            return view('admin.manufacturer.createmanufacturer');
          }
          public function insertManufacturer(Request $req)
          {
            $this->validate($req,[
              'manu_name'=> 'required|min:2|max:80',
              'manu_des'=> 'required|min:20',
            ],[
              'manu_name.required'=>"Please Enter manufacturer Name",
              'manu_name.min'=>"Please Enter Minimum 2 characters manufacturer Name",
              'manu_des.required'=>"Please Enter manufacturer Description",
            ]);
            $insert=  Manufacturer::insert([
              'manu_name'=>$_POST['manu_name'],
              'manu_des'=>$_POST['manu_des'],
              'pub_status'=>$_POST['pub_status'],
              'created_at'=>Carbon::now(),
            ]);
            if ($insert) {
              return redirect()->back()->with('status', 'Manufacturer Add Successfully!');
            }else {
            return redirect()->back();
            }
          }
          public function viewManufacturer()
          {
            $manu_all =Manufacturer::orderBy('manu_id','DESC')->get();
            return view('admin.manufacturer.viewmanufacturer',compact('manu_all'));
          }
          public function editManufacturer($manu_id)
          {

          $editmanu =  Manufacturer::findOrFail($manu_id);
          return view('admin.manufacturer.editmanufacturer',compact('editmanu'));
          }
          public function editsubmitManufacturer()
          {
            Manufacturer::findOrFail($_POST['manu_id'])->update([
              'manu_name'=>$_POST['manu_name'],
              'manu_des'=>$_POST['manu_des'],
              'pub_status'=>$_POST['pub_status'],
           ]);
           return redirect('admin/manufacturer/view');
          }
          public function deleteManufacturer($manu_id)
          {
           Manufacturer::findOrFail($manu_id)->delete();
           return back();
          }
          public function singleviewManufacturer($manu_id)
          {
            $infomanu = Manufacturer::findOrFail($manu_id);
              return view('admin.manufacturer.singleviewmanufacturer',compact('infomanu'));

          }


}
