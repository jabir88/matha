<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Socialite;

class ApiController extends Controller
{
  protected $redirectTo = '/admin';
  public function redirectToProviderGithub()
  {
      return Socialite::driver('github')->redirect();
  }

  public function handleProviderCallbackGithub()
  {
      $user = Socialite::driver('github')->user();

      // $user->token;
      print_r("<pre>");
      print_r($user);
      print_r("</pre>");
  }

  public function redirectToProviderGoogle()
  {
      return Socialite::driver('google')->redirect();
  }

  public function handleProviderCallbackGoogle()
  {
      $user = Socialite::driver('google')->stateless()->user();
      $authuser = $this->findOrCreateUser($user,'google');
      Auth::login($authuser,true);
      return redirect($this->redirectTo);
//       $token = $user->token;
      // $id = $user->id;
      //
      // return $id;

      // print_r("<pre>");
      // print_r($user);
      // print_r("</pre>");
  }
public function findOrCreateUser($user)
{
  $authuser = User::where('provider_id',$user->id)->first();
  if ($authuser) {
    return $authuser;
  }else {
    return User::create([
      'name'=>$user->name,
      'email'=>$user->email,
      'provider'=>'google',
      'provider_id'=>$user->id,
    ]);
  }
}
  // public function redirectToProviderFacebook()
  // {
  //     return Socialite::driver('facebook')->redirect();
  // }
  //
  // public function handleProviderCallbackFacebook()
  // {
  //     $user = Socialite::driver('facebook')->user();
  //
  //     // $user->token;
  //     print_r("<pre>");
  //     print_r($user);
  //     print_r("</pre>");
  // }
}
