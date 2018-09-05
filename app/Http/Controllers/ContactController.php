<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;
use Carbon\Carbon;



class ContactController extends Controller
{
    public  function __construct(){
      $this->middleware('auth');
      $this->middleware('admin');

    }

    public function insert(Request $requset){
      $this->validate($requset,[
        'Name'=> 'Required|min:3|max:30',
        'Email'=>'Required|email',
        'Message'=>'Required',
      ],[
        'Name.Required'=>'Please Enter Your Name',
        'Email.Required'=>'We need to know your e-mail address!',
        'Email.email'=>'invalid e-mail address!',
        'Message.Required'=>'Please Write a message!',
      ]);
    $insert =  Contactus::insert([
        'conus_name'=> $_POST['Name'],
        'conus_email'=> $_POST['Email'],
        'conus_mess'=> $_POST['Message'],
        'created_at'=> Carbon::now(),
      ]);
      if ($insert) {
        return redirect('contact-us')->with('done', 'Thank You for your valuable message!');
      }else {

        return redirect('contact-us');
      }
    }
    public function view()
    {
      $con_all =Contactus::where('conus_status','1')->orderBy('conus_id','DESC')->get();
       $count = count($con_all);
       return view('admin.contact.contact_view',compact('con_all','count'));

    }
    public function mark($id)
    {
   Contactus::where('conus_id',$id)->findOrFail($id)->update([
     'conus_status' => '2',
   ]);
return back();
    }
    public function delete($id)
    {
   Contactus::where('conus_id',$id)->findOrFail($id)->delete();
return back();
    }

}
