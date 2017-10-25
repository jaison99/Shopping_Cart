<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cart_item;
use DB;

class shopController extends Controller
{
    public function addCart(Request $request){

    	$product_id	=	$request->product_id;
    	$quantity	=	$request->quantity;
    	$amount		=	$request->price;
    	$barcode	=	$request->barcode;

    	
        $exists = cart_item::where('product_id', $product_id )
        ->count();

        if ($exists == 0){
            $addcarts = new cart_item;
            $addcarts -> product_id = $product_id;
            // $addcarts -> quantity    = $quantity;
            $addcarts -> amount      = $amount;
            $addcarts -> barcode     = $barcode;
            $addcarts -> save();

        }
        if ($exists != 0){
                cart_item::where('product_id', $product_id)
                ->increment('quantity');
                $quantity = cart_item::where('product_id',$product_id)
                ->value('quantity');

                $amount = $quantity * $amount;
                cart_item::where('product_id', $product_id)
                ->update(['amount'=>$amount]);
        }

    	

        \Session::flash('flash_message', 'item added');
    	return redirect('/home');
    } 


    public function showCart(Request $request){
    	$cartItems = DB::table('cart_items')
        ->join('products', 'products.id', '=', 'cart_items.product_id')
    	-> get();
    	return view('showCart',compact('cartItems'));
    }


    public function remove (Request $request,$product_id){
        DB::table ('cart_items')
        ->where('product_id',$product_id)
        ->delete();
        \Session::flash('flash_messageDelete', 'item was removed');
        return redirect('/showCart');
    }

}
