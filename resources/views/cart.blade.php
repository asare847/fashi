
@extends('layouts.app')
@section('extra-css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{  route('home.index')}}"><i class="fa fa-home"></i> Home</a>
                        <a href="{{  route('shop.index')}}">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
         <!-- Session success message -->
            @if (session()->has('success_message'))
               <div class="alert alert-success">
                {{ session()->get('success_message') }}
                </div>
              @endif
        <!--  Session error messages on the page-->
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="row">
                <div class="col-lg-12">
                    <!-- counting the number of items in a cart if it's greater than zero-->
                    @if(Cart::count()>0)
                    <h3>{{Cart::count() }}  Item(s) selected</h3>
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- displaying items in  the shopping cart cart -->
                                @foreach (Cart::content() as $item)
                                <tr>
                                    <td class="cart-pic first-row"><img src="{{asset('img/products/'.$item->model->slug.'.webp')}}" alt=""></td>
                                    <td class="cart-title first-row">
                                        <!-- displaying item names in the cart -->
                                        <h5>{{ $item->model->name }}</h5>
                                    </td>
                                    <!-- displaying item item price in the cart -->
                                    <td class="p-price first-row">{{ $item->model->presentPrice() }}</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty" data-id="{{$item->rowId }}"  >
                                                <input type="text" value='1'>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- displaying item  total sum excluding tax -->
                                    <td class="total-price first-row">{{ presentPrice($item->subtotal) }}</td>
                                    
                                    <td class="close-td first-row">
                                        <!-- form to remove items from the cart -->
                                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                            <!-- making the form safe -->
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <i class="ti-close"  onclick='this.parentNode.submit(); return false';></i>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                         
                      
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="{{route('shop.index')}}" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="{{route('cart.index')}}" class="primary-btn up-cart">Update cart</a>
                            </div>
                                   <!--Discount Coupon form  -->
                         @if(!session()->has('coupon'))
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="{{route('coupon.store')}}" class="coupon-form" method="post">
                                    {{csrf_field()}}
                                    <input type="text" placeholder="Enter your codes" name="coupon_code" id="coupon_code">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>

                            </div>
                          @endif
                        </div>

                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                  <ul>
                                    <!-- cart subtotal -->
                                    <li class="subtotal">Subtotal <span>{{presentPrice(Cart::subtotal())}}</span></li>
                                    <!-- the tax on items purchased -->
                                   
                                    <!--  <li class="subtotal">Tax (2%)<span>{{ presentPrice(Cart::tax()) }}</span></li>-->
                                      <!-- displaying discount the discount from the coupon input -->
                                      @if(session()->has('coupon'))
                                     <li class="subtotal">Discount({{ session()->get('coupon')['name'] }})<span>{{ presentPrice($discount) }}</span>

                                    <!-- a button to remoe the dicount from the subtotal -->
                                           <form method="POST" action="{{route('coupon.destroy')}}" style="display: inline">
                                                    @csrf
                                                    {{method_field('delete')}}
                                               <button style="font-size:10px" type="submit">remove</button>
                                            </form>
                                     </li> 
                                      <!-- the tax on items purchased -->
                                  
                                    <li class="subtotal">New Subtotal<span>{{ presentPrice($newSubtotal) }}</span></li>
                                   
                                     @endif
                                       <li class="subtotal">Tax (2%)<span>{{ presentPrice($newTax) }}</span></li>
                                    <!-- displaying sum of cart items. the presentPrice() method is used to convert them sum total to decimal places -->
                                    <li class="cart-total">Total <span>{{presentPrice($newTotal)}}</span></li>
                                </ul>
                                
                                <a href="{{ route('checkout.index') }}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- if the cart is empty then display  this to the user -->
                @else
                <h3 class="">No Items in cart</h3>
                @endif
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

   @include('partials.might-like')

 

  @endsection
    
  