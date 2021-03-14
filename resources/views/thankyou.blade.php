
@extends('layouts.app')
@section('content')
    
    <!-- Page Preloder -->
  

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{ route('home.index') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Map Section Begin -->
    <div class="map spad">
        <div class="container">
            <div class="row jumbotron text-justify cw-item">
            <div class="col-lg-12 text-center">
              <h1 class=" contact-title ">Thank you for<br> Your order!</h1> 
                <p>A confirmation email was sent</p>
            </div>
            
                <div class="col-lg-12 text-center">
                    <a href="{{ route('home.index') }}"><button  class="site-btn text-center">Back to website</button></a>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Map Section Begin -->

    <!-- Contact Section Begin -->
 

    <!-- Footer Section Begin -->
  
@endsection
