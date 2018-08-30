@extends('layouts.header')

@section('content')
<div>
        <div class="meet-container">
                <img class="eventproject-banner" src="{{ URL::to('/') }}/images/eventproject/{{$projecteventDetail -> pictures}}">
                {{-- content --}}
                <div class="container meet-mg">
                    <h1 class="meet-title"><b>PROJECT AND EVENT</b></h1>
                    <h6><b>{{$projecteventDetail->updated_at->format('Y/m/d')}} Oleh : {{$writter->name}}</b></h6>        
                    <div class="profile-content">
                        <p class="justify">
                        <img class="profile-img" src="{{asset('images/blogs/batik.jpg')}}">
                        <span class="profile-head">{{$projecteventDetail->title}}</span><br>
                        {{$projecteventDetail->content}}
                        </p>
                    </div>
                </div>
            </div>
</div>

{{-- footer --}}
@include('layouts/footer')
    
@endsection