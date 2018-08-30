@extends('layouts.header-blogs')

@section('content')
    <div class="blogs-card">
        <div class="col-lg-9 border">
            @foreach($blogs as $blog)
            <img class="blogs-picture" src="{{ URL::to('/') }}/images/blogs/{{$blog -> pictures}}">
            <a href="{{ URL::to('/') }}/blogs/detail/{{$blog->id}}"><h2>{{$blog->title}}</h2></a>
            <p class="blogs-content">{{$blog->content}}</p>
            <div class="right">
            <a class="readmore" href="{{ URL::to('/') }}/blogs/detail/{{$blog->id}}">Read more >>&nbsp;&nbsp;&nbsp; </a>
            </div>
            @endforeach
        </div>
        <div class="blogs-right-content col-lg-3">
            <h3><b>CATEGORIES</b></h3>
            <div class="category-list">
                <p class="categories">Categories 1</p>
                <p class="categories">Categories 2</p>
            </div>
            <br><br>
            <h3><b>CAMPAIGN SAMPLE</b></h3>
            <div style="border:solid;width:100%;height:500px">
            </div>
        </div>
    </div>

    {{-- right side  --}}
{{-- footer --}}
@include('layouts/footer')
@endsection