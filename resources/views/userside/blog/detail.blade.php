@extends('layouts.header-blogs')

@section('content')
    <div class="blogs-card">
        <div class="col-lg-12 blog-detail">
            <p class="title border-btm">{{$blogDetail->title}}</p>
            <div class="col-lg-12"></div>
            <h6><b>{{$blogDetail->updated_at->format('Y/m/d')}} Oleh : {{$writter->name}}</b></h6>
            <div class="center">
                <img class="blog-img" src="{{ URL::to('/') }}/images/blogs/{{$blogDetail -> pictures}}">
            </div>
            <br>
            <div class="col-lg-12">
                <p class="content">{{$blogDetail->content}}</p>
            </div>
        </div>
    </div>
@include('layouts/footer')
@endsection