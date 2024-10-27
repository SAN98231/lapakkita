@extends('layouts.layout')

@section('content')
<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Listed Products</h2>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <div class="search-container">
                    <form class="d-flex">
                        <div class="input-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Search products..."
                            />
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="box">
                        <a href="">
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
        </div>
    </div>
</section>
@endsection
