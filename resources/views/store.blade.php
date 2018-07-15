@extends('layouts.header')

@section('content')

<div class="store-container">
    <div class="store flex">
        <div class="col-lg-6">
            <h1>STORE</h1>
        </div>
        <div class="col-lg-6">
            <img class="logo-banana logo-banana-store" src="{{asset('../images/icon/logo-banana.png')}}">
        </div>
    </div>
    
    {{-- sidebar --}}
    <div class="flex">
        <div class="store-sidebar col-lg-3">
            <h2>Kategori</h2>
            <ul>
                <li>Pakaian</li>
                <li>Aksesoris</li>
            </ul>
            <br>
            <h2>Cara Pemesanan :</h2>
            <ul>
                <li>1. Lihat Katalog</li>
                <li>2. Order melalui WA XXXXXXXXXXX Official Account</li>
                <li>3. Transfer/COD</li>
                <li>4. Pengiriman Barang</li>
            </ul>

        </div>
        <div class="store-content col-lg-9">
            <div class="banner-atas">
                
            </div>
            <div class="store-list">
                <div class="col-lg-4">
                    <img class="store-list-img" src="{{asset('../images/icon/logo-banana.png')}}">
                    <p>Kaos Banana Pirates</p>
                    <p>Harga Rp1000000</p>
                    <p>Ukuran :</p>
                    <p>S XL </p>
                </div>
                <div class="col-lg-4">
                    <img class="store-list-img" src="{{asset('../images/icon/logo-banana.png')}}">
                    <p>Kaos Banana Pirates</p>
                    <p>Harga Rp1000000</p>
                    <p>Ukuran :</p>
                    <p>S XL </p>
                </div>
                <div class="col-lg-4">
                    <img class="store-list-img" src="{{asset('../images/icon/logo-banana.png')}}">
                    <p>Kaos Banana Pirates</p>
                    <p>Harga Rp1000000</p>
                    <p>Ukuran :</p>
                    <p>S XL </p>
                </div>
            
            </div>
        </div>
    </div>
</div>

{{-- footer --}}
@include('layouts/footer')
    
@endsection