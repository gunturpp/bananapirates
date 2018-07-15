@extends('layouts.header')

@section('content')

<div>
    <div class="meet-container">
        <img class="meet-banner" src="{{ asset('../images/blogs/banner.jpg')}}">
        {{-- content --}}
        <div class="container meet-mg">
            <h1 class="meet-title"><b>MEET OUR TEAM</b></h1>
                <div class="team-content">
                    <img class="team-img" src="{{asset('images/blogs/batik.jpg')}}">
                    <p class="justify">
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    </p>
                </div>
            </div>
            <div class="flex container">
                <div class="wd25">
                    <img class="persons-img" src="{{ asset('../images/blogs/banner.jpg')}}">
                </div>
                <div class="wd25">
                    <img class="persons-img" src="{{ asset('../images/blogs/banner.jpg')}}">
                </div>
                <div class="wd25">
                    <img class="persons-img" src="{{ asset('../images/blogs/banner.jpg')}}">
                </div>
                <div class="wd25">
                    <img class="persons-img" src="{{ asset('../images/blogs/banner.jpg')}}">
                </div>
            </div>
            <div class="flex container">
                <div class="wd25">
                    <img class="persons-img" src="{{ asset('../images/blogs/banner.jpg')}}">
                </div>
                <div class="wd25">
                    <img class="persons-img" src="{{ asset('../images/blogs/banner.jpg')}}">
                </div>
                <div class="wd25">
                    <img class="persons-img" src="{{ asset('../images/blogs/banner.jpg')}}">
                </div>
                <div class="wd25">
                    <img class="persons-img" src="{{ asset('../images/blogs/banner.jpg')}}">
                </div>
            </div>
    </div>
</div>

{{-- footer --}}
@include('layouts/footer')
    
@endsection