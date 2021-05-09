<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Illuminate\Http\Request;
use App\Models\Product;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $mightAlsoLike = Product::mightAlsoLike()->get();
      return view('checkout')->with([
           // 'paypalToken' => $paypalToken,
            'discount' => $this->getNumbers()->get('discount'),
            'newSubtotal' => $this->getNumbers()->get('newSubtotal'),
            'newTax' => $this->getNumbers()->get('newTax'),
            'newTotal' => $this->getNumbers()->get('newTotal'),
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contents = Cart::content()->map(function($item){
            return $item->model->slug.','.$item->qty;
        })->values()->toJson();
        try{
            $charge = Stripe::charges()->create([
              'amount' =>$this->getNumbers()->get('newTotal'),
              'currency' => 'GBP',
              'source' => $request->stripeToken,
              'description' => 'Order',
              //'receipt_email' => $request->email,
              'metadata' => [
                   'contents' => $contents,
                  'quantity' => Cart::instance('default')->count(),
                  //collect session()->get('coupon') returns array hence been wrapped in collect method
                  'discount' => collect(session()->get('coupon'))->toJson(),
              ],
          ]);
          Cart::instance('default')->destroy(); // destroying the cart after the order
          session()->forget('coupon'); // deleting or destroying the coupon after the order
             return redirect()->route('confirmation.index')->with('success_message','Thank you for your payment');
      } catch(CardErrorException $e){
        return back()->withErrors('Error! ' . $e->getMessage());
      }
      // A function to pass discount sum to Stripe
    

    }
      private function getNumbers(){
         $tax = config('cart.tax')/100;
        $discount = session()->get('coupon')['discount']??0;
        $newSubtotal = (Cart::subtotal()-$discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1+$tax);
        return collect([
             'discount' => $discount,
            'newSubtotal' => $newSubtotal,
            'newTax' => $newTax,
            'newTotal' => $newTotal,
        ]);
       }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
