<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class ProductController extends Controller
{
    public function getAllProducts(){
        $prodcuts = Product::all();
        return $prodcuts;
    }

    function addToCart(Request $request){

        $res = Cart::where('product_id',$request->product_id)
                    ->where('user_id',1)
                    ->first();
        //print_r($res);
        if($res){

            Cart::where('product_id',$request->product_id)
                    ->where('user_id',1)
                    ->update(['qty' => $res->qty+$request->qty]);
        }else{
            $cart = new Cart;
            $cart->user_id = 1;
            $cart->product_id = $request->product_id;
            $cart->qty = $request->qty?$request->qty:1;
            //$cart->price = $request->price;
            $cart->save();
        }
        
        $response = ['message' => 'Product has been added to cart'];
        return response($response, 200);
    }

    function getCartItems(){
        $data = Cart::
        select('cart.*','products.name','products.price','products.image')
        ->leftJoin('products', 'products.id', '=', 'cart.product_id')
        ->where('cart.user_id', 1)
        ->get();
        $cartitems = []; $i=0;$cartTotal=0;
        if(count($data)>0){
            foreach($data as $item){
                $cartitems[$i]['name'] = $item['name'];
                $cartitems[$i]['qty'] = $item['qty'];
                $cartitems[$i]['unit_price'] = $item['price'];
                $cartitems[$i]['price'] = $item['price'] * $item['qty'];
                $i++; $cartTotal += $item['price'] * $item['qty'];
            }

        }
        
        $response = ['message' => 'Cart list','data'=>$cartitems,'cartTotal'=>$cartTotal];
        return response($response, 200);
    }

    function paymentCheckout(Request $request){
        try {
            $data = $request->json()->all();
            //Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            Stripe::setApiKey('sk_test_51IWfchFXYYK5rSW7WWKZT5kCA4qoLYJUp9DX6qpGhLXWvZH9feG9bAPurzMgAQQRENQeHwLyjAgXu9FODuUgS3Rx00bNxNlypv');
            //return $response = ['msg'=>'Charge successful','data'=>$data];
            $customer = Customer::create(array(
                'name' => $data['email'],
                'email' => $data['email'],
                'source' => $data['id'],
                "address" => ["city" => 'test', "country" => 'India', "line1" => 'kalyani', "line2" => "", "postal_code" => '741245', "state" => 'WB']
            ));
        
            $charge = Charge::create(array(
                
                'customer' => $customer->id,
                'amount' => 5*100,
                'currency' => 'INR',
                'description' => 'Test Payment'
                
            ));

            //print_r($charge);
        
            return $response = ['msg'=>'Charge successful','data'=>$charge];
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
