@extends('layouts.layout')

@section('content')
<section class="slider_section">
    <div class="slider_container">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <h1>
                      Cari Barang <br />
                      atau Pasang Iklan Produk Anda
                    </h1>
                    <p>
                      Temukan produk yang Anda butuhkan dengan mudah atau
                      promosikan produk Anda kepada jutaan calon pelanggan.
                      Layanan kami mempermudah Anda menjangkau lebih banyak
                      pembeli tanpa kerumitan. Nikmati kemudahan dan
                      kenyamanan dalam menjual atau membeli, dengan keamanan
                      dan kualitas layanan yang terjamin.
                    </p>
                    <a href="{{ route('login') }}"> Pasang Iklan Gratis </a>
                    <a href="/listing"> Cari Barang </a>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="img-box">
                    <img
                      style="width: 600px"
                      src="images/gambarbarang2.jpg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end slider section -->
</div>   
@endsection