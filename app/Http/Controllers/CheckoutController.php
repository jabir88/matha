<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Customer;
use Carbon\Carbon;
use DB;
use App\Payment;
use App\Order;
use App\User;
use App\Shipping;
use App\Orderdetails;
use Cart;
use Auth;
use App\Notifications\SendEmail;
use App\Mail\OrderShipped;
use Mail;

class CheckoutController extends Controller
{
    public function checkout_signup()
    {
        return view('forntEnd..checkout.checkoutContent');
    }
    public function checkout_customer_signup(Request $req)
    {
        $customer = array();
        $customer['customer_first_name'] = $req->customer_first_name;
        $customer['customer_last_name'] = $req->customer_last_name;
        $customer['customer_email'] = $req->customer_email;
        $customer['customer_pass'] =md5($req->customer_pass);
        $customer['customer_phone'] = $req->customer_phone;
        $customer['customer_address'] = $req->customer_address;
        $customer['created_at'] = Carbon::now();

        $customer_id = DB::table('customers')->insertGetId($customer);


        Session::put('customer_id', $customer_id);
        Session::put('customer_name', $req->customer_first_name);

        return redirect('/checkout/shipping');
    }
    public function checkout_shipping()
    {
        $m =  Session::get('customer_id');
        $ship = Customer::where('customer_id', $m)->first();

        return view('forntEnd.shipping.shippingContent', compact('ship'));
    }
    public function checkout_shipping_save(Request $req)
    {
        $shipping = array();
        $shipping['shipping_full_name'] = $req->shipping_full_name;
        $shipping['shipping_email'] = $req->shipping_email;
        $shipping['shipping_phone'] = $req->shipping_phone;
        $shipping['shipping_address'] = $req->shipping_address;
        $shipping['shipping_city'] = $req->shipping_city;
        $shipping['shipping_country'] = $req->shipping_country;
        $shipping['created_at']= Carbon::now();

        $shipping_id = DB::table('shippings')->insertGetId($shipping);
        // echo "<pre>";
        // print_r($shipping);
        // echo "</pre>";
        Session::put('shipping_id', $shipping_id);
        return redirect('/checkout/payment');
    }
    public function checkout_logout()
    {
        Session::flush();
        return redirect('/');
    }
    public function checkout_customer_login(Request $req)
    {
        $cus_email = $req->email;
        $cus_pw = md5($req->password);

        $result = DB::table('customers')->where('customer_email', $cus_email)
                                      ->where('customer_pass', $cus_pw)
                                      ->first();

        if ($result) {
            $customer_id =  $result->customer_id;
            $customer_name =  $result->customer_first_name ;

            Session::put('customer_id', $customer_id);
            Session::put('customer_name', $customer_name);

            return redirect('/show-cart');
        } else {
            return redirect()->back();
        }
    }
    public function payment()
    {
        return view('forntEnd.payment.paymentContent');
    }
    public function payment_form(Request $req)
    {
        $paymenttype = $req->payment;

        $order = array();
        $order['customer_id'] =Session::get('customer_id');
        $order['shipping_id'] = Session::get('shipping_id');
        $order['order_total'] = Cart::total();
        $order['created_at'] = Carbon::now();
        $orderid = DB::table('orders')->insertGetId($order);


        // Session::put('orderid',$orderid);


        $payment = array();
        $payment['order_id'] = $orderid;
        $payment['payment_type'] = $paymenttype;
        $payment['created_at'] = Carbon::now();
        $paymentid = DB::table('payments')->insertGetId($payment);

        // Session::put('paymentid',$paymentid);

        $order_details = Cart::content();
        // print_r ($order_details);
        $odedata = array();
        foreach ($order_details as $order_detail) {
            $odedata['order_id'] = $orderid;
            $odedata['product_id'] = $order_detail->id;
            $odedata['product_name'] = $order_detail->name;
            $odedata['product_price'] = $order_detail->price;
            $odedata['product_sales_quantity'] = $order_detail->qty;
            $odedata['created_at'] = Carbon::now();
            DB::table('orderdetails')->insert($odedata);
        }

        if ($paymenttype == 'cash') {
            // $customer_id =Session::get('customer_id');
            // $cus_details = Customer::where('customer_id',$customer_id)->first();
            $user_id = Session::get('customer_id');
            $user = Order::where('customer_id', $user_id)->first();
            $order_details = Order::where('order_id', $orderid)->first();
            $shipping_id =Session::get('shipping_id');
            $ship_details = Shipping::where('shipping_id', $shipping_id)->first();
            echo $user_id;
            //Send an email to user
            
            Mail::to('jabirhasan88@gmail.com')->send(new OrderShipped($user, $ship_details, $order_details));


            // $user->notify(new SendEmail($user,$ship_details, $order_details));

            Cart::destroy();
            return redirect()->back()->with('status', 'Successfully Done By Hand Cash!');

        //
          // echo "<pre>";
          // print_r($user);
          // echo "</pre>";

          // return redirect('/checkout/payment')->with('status', 'Successfully Done By Hand Cash!');
        } elseif ($paymenttype == 'bkash') {
            return "precessing";
        } else {
            return redirect('/paypal');
        }
    }
}
