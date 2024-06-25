@extends('layouts.prop_headlayout')
@section('content')

<main class="bg-primary text-white py-5">
    <div class="container d-md-flex justify-content-between align-items-center">
        <div>
            <h2>{{$postbanner->name}}</h2>
            <p>{{$postbanner->description}}</p>
            {{-- <p>We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things.</p> --}}
             <div class="btn-container">
                <a href="#" class="btn btn-primary btn-lg custom-btn">GET STARTED</a>
                <a href="#" class="btn btn-outline-light btn-lg custom-btn ml-3" style="border-style: none!important;">
                    <i class="fas fa-play-circle mr-3"></i>  Watch Intro
                </a>
            </div>
        </div>
        <img src="{{$postbanner->image }}" alt="Corporate Website" class="img-fluid mt-4 mt-md-0" width="400" height="400">
    </div>
</main>

<section>
     <div class="container">
    <div class="content-wrapper">
        <div class="content-image">
            <img src="{{$poststory->image }}" alt="OUR STORY" width="400" height="400">
        </div>
        <div class="content-text">
            <h5><b class="text-primary">-</b> OUR STORY</h5>
            <h2 class="mb-2">{{$poststory->name}}</h2>
           <div class="bg-lightt mb-3">
                <div class="btn-group mt-3 mb-3 pl-2">
                <button type="button" class="btn btn-primary py-2">Who We Are</button>
                <button type="button" class="btn btn-light py-2">Our Vision</button>
                <button type="button" class="btn btn-light py-2">Our History</button>
            </div>
           </div>
           {!! $poststory->description !!}
        </div>
    </div>
</div>
</section>

<!-- Services Section -->
<section class="services py-5" id="services">
<div class="container">
<div class="text-center mb-5 ">
  <h2><button class="w-40 btn btn-outline-primary btn-lg"  style="border-radius: 15px;">Services</button></h2>
</div>
<div class="row">
  @foreach($products as $product)
  <div class="col-md-4 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <i class="{{$product->icon}} fa-3x mb-3 icon-border-red"></i>
        <h5 class="card-title">{{$product->name}} </h5>
        <p class="card-text">{{$product->description}} </p>
      </div>
    </div>
  </div>
  @endforeach
  
 
  
</div>
</div>
</section>



<section class="pricing py-5 bg-light" id="pricing">
<div class="container">
<div class="text-center mb-5 ">
  <h2><button class="w-36 btn btn-outline-primary" style="border-radius: 15px;">Pricing</button></h2>
</div>
<div class="row">
 @foreach ($pricings as $price)
 <div class="col-md-4 mb-4">
  @if($price->title=="Exclusive")
  <div class="card h-100 shadow">
  @else
  <div class="card h-100">
  @endif
  
    <div class="card-body">
     <div class=" text-center">
          <h5 class="card-title">
            @if($price->title=="Exclusive")
            <button class="w-50 btn btn-primary" style="border-radius: 15px;">{{$price->title}}</button>
            @else
            <button class="w-50 btn btn-outline-primary" style="border-radius: 15px;">{{$price->title}}</button>
            @endif
          </h5>
      <p class="card-text">Lorem ipsum is simply dummy text of the printing and industry.</p>
      <h1 class="card-title pricing-card-title mb-5">${{$price->price}}<small class="text-body-secondary fw-light">/mo</small></h1>
      @if($price->title=="Exclusive")
            <button class="w-80 btn btn-lg btn-primary mb-3">START FREE TRIAL</button>
            @else
            <button class="w-80 btn btn-outline-primary mb-3">START FREE TRIAL</button>
            @endif
      
     </div>
      <ul class="list-unstyled mt-3 mb-4">
        @if($price->title=="Exclusive")
        <li><i class="fas fa-check-circle text-primary"></i> Cras justo odio.</li>
        <li><i class="fas fa-check-circle text-primary"></i> Dapibus ac facilisis in.</li>
        <li><i class="fas fa-check-circle text-primary"></i>Morbi leo risus.</li>
        <li><i class="fas fa-check-circle text-light"></i> Excepteur sint occaecat velit.</li>
       @elseif($price->title=="Starter")
       <li><i class="fas fa-check-circle text-primary"></i> Cras justo odio.</li>
        <li><i class="fas fa-check-circle text-primary"></i> Dapibus ac facilisis in.</li>
        <li><i class="fas fa-check-circle text-light"></i>Morbi leo risus.</li>
        <li><i class="fas fa-check-circle text-light"></i> Excepteur sint occaecat velit.</li>
       @elseif($price->title=="Premium")
       <li><i class="fas fa-check-circle text-primary"></i> Cras justo odio.</li>
        <li><i class="fas fa-check-circle text-primary"></i> Dapibus ac facilisis in.</li>
        <li><i class="fas fa-check-circle text-primary"></i>Morbi leo risus.</li>
        <li><i class="fas fa-check-circle text-primary"></i> Excepteur sint occaecat velit.</li>
        @endif
        
      </ul>
    </div>
  </div>
</div>
 @endforeach
 
</div>
</div>
</section>
<section class="footer py-5 bg-primary">
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h2 class="text-white">We love to make perfect solutions for your business</h2>
            
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-6">
            <p class="text-white mb-4">Why i said old chap that is ,spiffing off his nut cor blimey guvnords geeza  bloke knees up bobby, sloshed arse
         Williams crack Richard. Bloke fanny around chesed of bum bag old lost the pilot  say there spiffing of his nut. </p>
            <button class="w-80 btn btn-outline-light mb-3">GET STARTED</button>
        </div>
    </div>
</div>
</section>

@endsection