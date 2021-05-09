<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;


class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
         
           $categories = Category::all();
           if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            })->get();
            
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        } else {
            $products = Product::inRandomOrder()->take(12)->paginate(9);
             
            $categoryName ="Shop"; 
        }
        
        
        return  view('shop')->with([
            'products'=>$products,
            'categories'=>$categories,
             'categoryName'=>$categoryName]);
    }

   
  
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();
        return view('product')->with(['product'=>$product,'mightAlsoLike'=>$mightAlsoLike]);
    }

   public function addWishList(Request $request)
   {
          Cart::instance('wishlist')->add($request->id, $request->name, 1, $request->price)->associate('App\Models\Product');

   }
  

   


    public  function search(Request $request)
    {
        return view('search-results');
    }
    
}
