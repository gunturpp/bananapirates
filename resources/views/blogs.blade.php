@extends('layouts.header-blogs')

@section('content')
    <div class="blogs-card">
        <div class="col-lg-8">
            <img class="blogs-picture" src="{{asset('../images/blogs/banner.jpg')}}">
            <h2>Title title title title title</h2>
            <p class="blogs-content">
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                </p>
            <div class="right">
                <a class="readmore" href="#">Read more >>&nbsp;&nbsp;&nbsp; </a>
            </div>
        </div>
        <div class="blogs-right-content col-lg-4">
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