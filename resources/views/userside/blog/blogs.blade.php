@extends('layouts.header-blogs')

@section('content')
    <div class="blogs-card">
        <div class="col-lg-9 border">
            @foreach($blogs as $blog)
            <img class="blogs-picture" src="{{ URL::to('/') }}/images/blogs/{{$blog -> pictures}}">
            <h2>{{$blog->title}}</h2>
            <p class="blogs-content">{{$blog->content}}</p>
            <div class="right">
            <a class="readmore" href="{{ URL::to('/') }}/blogs/detail/{{$blog->id}}">Read more >>&nbsp;&nbsp;&nbsp; </a>
            </div>
            @endforeach
        </div>
        <div class="blogs-right-content col-lg-3">
            <h2><b>CATEGORIES</b></h2>
            <div class="category-list">
                <p class="categories">Categories 1</p>
                <p class="categories">Categories 2</p>
            </div>
        </div>
    </div>

    {{-- right side  --}}
{{-- footer --}}
@include('layouts/footer')
@endsection