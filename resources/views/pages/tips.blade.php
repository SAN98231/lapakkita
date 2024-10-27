@extends('layouts.layout')

@section('content')
<section class="why_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>Tips untuk melakukan transaksi</h2>
    </div>

    <div class="row">
      <!-- Tip 1 -->
      <div class="col-md-4">
        <div class="box text-center">
          <div class="img-box">
            <img
              src="images/publicplaces.jpg"
              alt="Tempat Umum"
              style="width: 150px; height: 150px"
            />
          </div>
          <div class="detail-box mt-3">
            <h5>Transaksi di Tempat Umum</h5>
            <p>
              Lakukan transaksi di tempat umum yang ramai dan aman seperti
              mall, kafe, atau tempat yang banyak orang untuk keamanan
              bersama.
            </p>
          </div>
        </div>
      </div>

      <!-- Tip 2 -->
      <div class="col-md-4">
        <div class="box text-center">
          <div class="img-box">
            <img
              src="images/checkgoods.jpg"
              alt="Periksa Barang"
              style="width: 150px; height: 150px"
            />
          </div>
          <div class="detail-box mt-3">
            <h5>Periksa Barang Sebelum Membayar</h5>
            <p>
              Pastikan untuk memeriksa kondisi barang dengan teliti sebelum
              melakukan pembayaran untuk menghindari kerusakan atau
              ketidaksesuaian.
            </p>
          </div>
        </div>
      </div>

      <!-- Tip 3 -->
      <div class="col-md-4">
        <div class="box text-center">
          <div class="img-box">
            <img
              src="images/buktitransaksi.jpg"
              alt="Bukti Transaksi"
              style="width: 150px; height: 150px"
            />
          </div>
          <div class="detail-box mt-3">
            <h5>Simpan Bukti Transaksi</h5>
            <p>
              Selalu minta dan simpan bukti transaksi sebagai dokumentasi
              dan jaminan jika terjadi masalah di kemudian hari.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection