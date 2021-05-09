


@extends('layouts.app')
@section('extra-css')
<script src="https://js.stripe.com/v2/"></script>
<script src="https://js.stripe.com/v3/"></script>
<style> 
    
   .StripeElement{ 
    height: 46px;
    border: 2px solid black; 
    margin-bottom: 25px;
    padding-left: 15px;
    font-family: "FontAwesome";
   }
   #card-errors{
       color:#fa755a;
   }
</style>

@endsection

@section('content')


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="{{ route('home.index') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="{{ route('shop.index') }}">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('success_message'))
    <div class="spacer"></div>
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
@endif     

@if(count($errors) > 0)
    <div class="spacer"></div>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">
            <form action="{{route('checkout.store')}}" class="checkout-form" id="payment-form" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="#" class="content-btn">Click Here To Login</a>
                        </div>
                        <h4>Billing Details</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="fir">Fullname<span>*</span></label>
                                <input type="text" id="name_on_card"  name="name"  value="{{ old('name') }}" required>
                            </div>
                          
                            <div class="col-lg-12">
                                <label for="cun">Country<span>*</span></label>
                                <input type="text" id="cun" name="country"  value="{{ old('country') }}" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Street Address<span>*</span></label>
                                <input type="text" id="address" class="street-first" name="address"  value="{{ old('address') }}" required> 
                            </div>
                            <div class="col-lg-12">
                                <label for="zip">Postcode / ZIP (optional)</label>
                                <input type="text" id="postalcode" name="postalcode" ata-stripe="address_zip"  value="{{ old('postalcode') }}" required>
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Town / City<span>*</span></label>
                                <input type="text" id="city" name="city"  value="{{ old('city') }}" required>
                            </div>
                            
                            <div class="col-lg-6">
                                <label for="email">Email Address<span>*</span></label>
                                <input type="text" id="email" name="email"  value="{{ old('email') }}" required>
                            </div>
                            
                            <div class="col-lg-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input type="text" id="phone"  name="phone" value="{{ old('phone') }}" required>
                            </div>

                            <div class="col-lg-12" id="card-errors" role="alert"></div>

                                <div  id="card-element" class="col-lg-12">
                                <!-- a Stripe Element will be inserted here. -->
                                 </div>
                            
                        
                        </div>
                    </div>
                    <div id="card-errors" role="alert"></div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input type="text" placeholder="Enter Your Coupon Code">
                        </div>
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <!-- Displaying purchased items and their prices  from the cart-->
                                <ul class="order-table">
                                    <li>Product <span>Total</span></li>
                                    @foreach (Cart::content() as $item)
                                    <li class="fw-normal">{{ $item->model->name }}<span>{{ $item->model->presentPrice() }}</span></li>
                                    @endforeach
                                    <!-- Tax rate of the cart can be adjusted in config > cart -->
                                    <li class="fw-normal">Tax(3%) <span>{{presentPrice($newTax) }}</span></li>
                                    <!-- subtotal of items in the cart -->
                                    <li class="fw-normal">Subtotal <span>{{ presentPrice($newSubtotal) }}</span></li>
                                    <!-- sum of items in the cart -->
                                    <li class="cart-total">Total <span>{{presentPrice($newTotal)}}</span></li>
                                </ul>
                                <div class="payment-check">
                                    <div class="pc-item">
                                        <label for="pc-check">
                                            Cheque Payment
                                            <input type="checkbox" id="pc-check">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Paypal
                                            <input type="checkbox" id="pc-paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn" id="complete-order" >Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
       
    </section>
   
   @endsection
   @section('extra-js')
      <!--  Stripe integration API-->
   <script src="https://js.stripe.com/v2/"></script>
   <script src="https://js.stripe.com/v3/"></script>
   <script>    

 (function () {
            
    var stripe = Stripe('{{ config('services.stripe.key') }}');
    var elements = stripe.elements();

// Create an instance of the card UI component
 var card = elements.create('card', {
    'hidePostalCode': true,
  'style': {
    'base': {
      'fontFamily': 'Arial, sans-serif',
      'fontSize': '16px',
      'color': '#C1C7CD',
    },
    'invalid': {
      'color': '#fa755a',
    },
  }
  });


// Mount the UI card component into the `card-element` <div>
card.mount('#card-element');
        
       card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
           });

        var form = document.getElementById('payment-form');

          form.addEventListener('submit', function(event) {
              event.preventDefault();
              // Disable the submit button to prevent repeated clicks
              document.getElementById('complete-order').disabled = true;
              var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_zip: document.getElementById('postalcode').value
              }
              stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                  // Enable the submit button
                 document.getElementById('complete-order').disabled = false;
                } else {
                  // Send the token to your server
                  stripeTokenHandler(result.token);
                }
              });
          });


             function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
                        var form = document.getElementById('payment-form');
                        var hiddenInput = document.createElement('input');
                         hiddenInput.setAttribute('type', 'hidden');
                         hiddenInput.setAttribute('name', 'stripeToken');
                         hiddenInput.setAttribute('value', token.id);
                            form.appendChild(hiddenInput);

              // Submit the form
                         form.submit();
                    }
   })();

  </script>
   @endsection