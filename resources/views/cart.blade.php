@extends('layouts.app')
@section('content')

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
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif
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
                                @foreach (Cart::content() as $item)
                                <tr>
                                    <td class="cart-pic first-row"><img src="{{asset('img/products/'.$item->model->slug.'.webp')}}" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>{{ $item->model->name }}</h5>
                                    </td>
                                    <td class="p-price first-row">{{ $item->model->presentPrice() }}</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">$60.00</td>
                                    
                                    <td class="close-td first-row">
                                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit"><i class="ti-close"></i></button>
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
                                <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="#" class="primary-btn up-cart">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                  <ul>
                                    <li class="subtotal">Subtotal <span>{{Cart::subtotal()}}</span></li>
                                    <li class="subtotal">Tax (3%)<span>{{ Cart::tax() }}</span></li>
                                    <li class="cart-total">Total <span>{{Cart::total()}}</span></li>
                                </ul>
                                
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <h3 class="">No Items in cart</h3>
                @endif
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

   @include('partials.might-like')

  @endsection