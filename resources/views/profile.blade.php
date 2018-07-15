@extends('layouts.header')

@section('content')

<div>
    <div class="profile-container">
        <img class="profile-banner" src="{{ asset('../images/blogs/banner.jpg')}}">
        {{-- content --}}
        <div class="container profile-mg">
                <div class="profile-content">
                        <p class="justify">
                        <img class="profile-img" src="{{asset('images/blogs/batik.jpg')}}">
                        <span class="profile-head">SOCIO TRAVELER STARTS HERE</span><br>
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
                        <div class="right meetteam-detail-btn">
                        <a class="team-detail" href="{{route('our-team')}}">MEET OUR TEAM </a>
                        </div>
                    </div>
        </div>
    </div>
</div>

{{-- footer --}}
@include('layouts/footer')

@endsection