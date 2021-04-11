<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use Auth;

use Stripe;
use Session;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('frontend.pages.index',['products'=>$products]);
    }

    public function cart(){
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        //print_r($carts); die;
        return view('frontend.pages.cart',['carts'=>$carts]);
    }

    public function addtocart($id){
        //echo $id; die;
         //   dd(Auth::user());
         $cart = new Cart;
         $cart->user_id = Auth::user()->id;
         $cart->product_id = $id;
         $cart->qty = 1;
         $cart->save();
         return redirect()->back();

    }

    public function showstripeform($order_id){
        return view('frontend.pages.payment',['order_id'=>$order_id]);
    }

    public function cartcheckout(Request $request){
        
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        $order_number = uniqid();
        foreach($carts as $row){
            $order = new Order;
            $order->order_number = $order_number;
            $order->user_id = Auth::user()->id;
            $order->cart_id = $row->id;
            $order->save();
        }
        // Save the payment
        $payment = new Payment;
        $payment->order_id = $order_number;
        $payment->user_id = Auth::user()->id;
        $payment->full_name = $request->full_name;
        $payment->mobile = $request->mobile;
        $payment->address = $request->landmark.', '.$request->city.', '.$request->address;
        $payment->status = 0;
        $payment->total_price = 300;
        $payment->save();

        return redirect()->route('stripe-show-form',['order_id'=>$order_number]);

        //dd($request->all());
    }


    public function makepayment(Request $request){
        $order_id = $request->order_id;

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $charge = Stripe\Charge::create ([
                "amount" => 100 * 150,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Making test payment." 
        ]);
        
        $charge->id;
        if($charge->id){

            $payment = Payment::where('order_id',$order_id)->first();
            $payment->status = 1;
            $payment->save();
        }
        Session::flash('success', 'Payment has been successfully processed.');
          
        return back();
    }




    
}
