<?php

namespace App\Http\Controllers;

use App\Contactus;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function __construct()
    {
      $this->middleware('auth');
    }
    public function dash()
    {
      $count=  User::all();
      $sendnum = count($count);
      return view('admin.dashboard.dashboardContent',compact('sendnum'));
    }
    public function permission()
    {
      echo "You have no permission!";
    }
}
