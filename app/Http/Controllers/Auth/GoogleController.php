<?php



namespace App\Http\Controllers\Auth;



use App\User;

use App\Http\Controllers\Controller;

use Socialite;

use Exception;

// use Auth;



class GoogleController extends Controller

{



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function redirectToGoogle()

    {

        return Socialite::driver('google')->redirect();

    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

     public function handleGoogleCallback()

   {

       try {

           $user = Socialite::driver('google')->user();

          $user->token;



           return redirect()->route('home');



       } catch (Exception $e) {


// return "TOpr ";
           return redirect('auth/google');



       }

   }


}
