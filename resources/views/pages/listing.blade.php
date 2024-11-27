@extends('layouts.layout')

@section('content')
<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Listed Products</h2>
        </div>

        <!-- Search Form at the Top -->
        <form action="{{ route('search') }}" method="GET" class="mb-4">
            <input type="text" name="query" placeholder="Search listings" value="{{ request('query') }}" >
            <button type="submit">Search</button>
        </form>

        <!-- Show "Search Results" only if a search query exists -->
        @if(request('query'))
            <h2>Search Results for "{{ e($query) }}"</h2>
        @endif

        <div class="product-listings">
            @if(isset($products) && $products->count())
                @foreach($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="box">
                            <a href="{{ route('product.detail', $product->id) }}">
                                <div class="img-box">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" />
                                </div>
                                <div class="detail-box">
                                    <h6>{{ $product->name }}</h6>
                                    <h6>
                                        Price
                                        <span> Rp{{ number_format($product->price, 2) }} </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No products found.</p>
            @endif
        </div> 
    </div>
</section>
@endsection
