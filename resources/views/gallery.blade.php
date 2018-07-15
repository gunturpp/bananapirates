@extends('layouts.header')

@section('content')
<div class="gallery-container">
    <div class="flex">
        <div class="col-lg-6">
            <h1>GALERI FOTO & VIDEO</h1>
        </div>
        <div class="col-lg-6">
            <img class="logo-banana logo-banana-store" src="{{asset('../images/icon/logo-banana.png')}}">
        </div>
    </div>
    <div class="flex">
        <div class="col-lg-3">
            <div class="gallery-category-btn">
                <a class="gallery-category" href="#">PULAU PISANG</a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="gallery-category-btn">
                <a class="gallery-category" href="#">PULAU PISANG</a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="gallery-category-btn">
                <a class="gallery-category" href="#">PULAU PISANG</a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="gallery-category-btn">
                <a class="gallery-category" href="#">PULAU PISANG</a>
            </div>
        </div>
    </div>
    {{-- content --}}
    <div class="gallery-content">
        
    </div>
</div>
    
{{-- footer --}}
@include('layouts/footer')
    
@endsection