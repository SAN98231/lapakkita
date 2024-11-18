{{-- @extends('layouts.layout')

@section('content')
<section class="product_detail_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>{{ e($product->name) }}</h2>
        </div>
        
        <div class="product-detail">
            <div class="row">
                <!-- Image Section -->
                <div class="col-md-6">
                    <div class="img-box">
                        <img 
                            src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/placeholder.png') }}" 
                            alt="{{ e($product->name) }}" 
                            class="img-fluid" 
                            style="max-width: 100%; max-height: 300px; object-fit: cover;"
                        >
                    </div>                    
                </div>

                <!-- Product Details Section -->
                <div class="col-md-6">
                    <div class="detail-box">
                        <h3>{{ e($product->name) }}</h3>
                        <h4>Price: <span>Rp{{ number_format($product->price, 2) }}</span></h4>
                        <p>{{ e($product->description) }}</p>
                        <p><strong>Quantity:</strong> {{ $product->quantity ?? 'N/A' }}</p>

                        <!-- Seller Information -->
                        <div class="seller-info mt-4">
                            <h4>Seller Information</h4>
                            <p><strong>Name:</strong> {{ e(optional($product->user)->name) }}</p>
                            <p><strong>Address:</strong> {{ e(optional($product->user)->address ?? 'No address provided') }}</p>
                            <p><strong>Phone:</strong> {{ e(optional($product->user)->phone ?? 'No phone number provided') }}</p>
                            <p><strong>Email:</strong> {{ e(optional($product->user)->email ?? 'No email provided') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection --}}


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Site Metas -->
  <meta name="keywords" content="LapakKita, Marketplace, Belanja Online" />
  <meta name="description" content="LapakKita adalah platform belanja online terpercaya." />
  <meta name="author" content="LapakKita" />

  <!-- Open Graph Metadata -->
  <meta property="og:title" content="LapakKita - Marketplace Terpercaya" />
  <meta property="og:description" content="Belanja online dengan mudah di LapakKita." />
  <meta property="og:image" content="{{ asset('images/logolapak.jpg') }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:type" content="website" />

  <!-- Twitter Card Metadata -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="LapakKita - Marketplace Terpercaya" />
  <meta name="twitter:description" content="Belanja online dengan mudah di LapakKita." />
  <meta name="twitter:image" content="{{ asset('images/logolapak.jpg') }}" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('images/logolapak.jpg') }}" type="image/x-icon" />

  <title>LapakKita</title>

  <!-- Owl Carousel Stylesheet -->
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
  />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
  />

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

  <!-- Responsive style -->
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
</head>
<body>

    @include('partials.navbar')


  <!-- Your content goes here -->
  <section class="product_detail_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>{{ e($product->name) }}</h2>
        </div>
        
        <div class="product-detail">
            <div class="row">
                <!-- Image Section -->
                <div class="col-md-6">
                    <a type="button" class="btn btn-warning" href="">Report</a>
                    <div class="img-box">
                        <img 
                            src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/placeholder.png') }}" 
                            alt="{{ e($product->name) }}" 
                            class="img-fluid" 
                            style="max-width: 100%; max-height: 300px; object-fit: cover;"
                        >
                    </div>                    
                </div>

                <!-- Product Details Section -->
                <div class="col-md-6">
                    <div class="detail-box">
                        {{-- <h3>{{ e($product->name) }}</h3> --}}
                        <h4>Price: <span>Rp{{ number_format($product->price, 2) }}</span></h4>
                        <p>{{ e($product->description) }}</p>
                        <p><strong>Quantity:</strong> {{ $product->quantity ?? 'N/A' }}</p>

                        <!-- Seller Information -->
                        <div class="seller-info mt-4">
                            <h4>Seller Information</h4>
                            <p><strong>Name:</strong> {{ e(optional($product->user)->name) }}</p>
                            <p><strong>Address:</strong> {{ e(optional($product->user)->address ?? 'No address provided') }}</p>
                            <p><strong>Phone:</strong> +62 {{ e(optional($product->user)->phone ?? 'No phone number provided') }}</p>
                            <p><strong>Email:</strong> {{ e(optional($product->user)->email ?? 'No email provided') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Bootstrap -->
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom Scripts -->
  <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>



