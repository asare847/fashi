<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Support\Facades\Validator;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mightAlsoLike = Product::mightAlsoLike()->get();

        $tax = config('cart.tax')/100;
        $discount = session()->get('coupon')['discount']??0;
        $newSubtotal = (Cart::subtotal()-$discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1+$tax);

        return view('cart')->with([
           // 'paypalToken' => $paypalToken,
            'discount' => $discount,
            'newSubtotal' => $newSubtotal,
            'newTax' => $newTax,
            'newTotal' => $newTotal,
            'mightAlsoLike'=>$mightAlsoLike,
        ]);
        
    }

    

    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        }

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Models\Product');
        return redirect()->route('cart.index')->with('success_message','Item was added to cart');
        
    }
        // Cart update
   
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric'
        ]);
         $update = Cart::update($id,$request->quantity);
        
        session()->flash('success_message','quantity updated successfully');
        /* if($request->ajax()) {
            return response()->json([
                 'view' => view('cart', compact('update'))->render(),
            ]);
          } */
        return response()->json(['success'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Destrroy the cart
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message', 'Item has been removed!');
    }

 
}
