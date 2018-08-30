@extends('layouts.header')

@section('content')

{{-- carousel --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active carousel-img">
        <img class="d-block w-100" src="{{ URL::to('/') }}/images/blogs/{{$blogs[0] -> pictures}}" alt="First slide">
          <div class="carousel-caption d-none d-md-block right">
              <h1><b>{{$blogs[0]->title}}</b></h1>
            {{-- <p>{{$blogs[0]->content}}</p> --}}
          </div>
        </div>
        <div class="carousel-item carousel-img">
        <img class="d-block w-100" src="{{ URL::to('/') }}/images/blogs/{{$blogs[1] -> pictures}}" alt="Second slide">
          <div class="carousel-caption d-none d-md-block right">
            <h1><b>{{$blogs[1]->title}}</b></h1>
            {{-- <p>{{$blogs[1]->content}}</p> --}}
          </div>
        </div>
        <div class="carousel-item carousel-img">
        <img class="d-block w-100" src="{{ URL::to('/') }}/images/blogs/{{$blogs[2] -> pictures}}" alt="Third slide">
          <div style="z-index:10" class="carousel-caption d-none d-md-block right">
            <h1><b>{{$blogs[2]->title}}</b></h1>
            {{-- <p>{{$blogs[2]->content}}</p> --}}
          </div>
    
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
{{-- our profile --}}
<div class="profile center">
    <h1><b>OUR PROFILE</b></h1>
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
        <div class="right">
        <a class="readmore" href="{{route('profile')}}">READ MORE >> </a>
        </div>
    </div>
</div>
{{-- vision and misions --}}
<div class="vision-mission center">
        <h3><b class="bg-black">VISI</b></h3><br>
        <div>
            <p><b>Menjadikan <i>sociotraveling</i> sebagai sebuah <i>trend</i> dalam berwisata</b></p>
        </div>
        <h3><b class="bg-black">MISI</b></h3><br>
        <div>
            <ul><b>
                <li>1. MEGEKSPLORASI DESTINASI SEKALIGUS MENEBAR MANFAAT SECARA SOSIAL</li>
                <li>2. MEMPERKENALKAN SOCIOTRAVELING KEPADA KHALAYAK LUAS</li>
                <li>3. MELAKUKAN AKSI SOSIAL SAAT BERWISATA</li>
                <li>4. MEMPROMOSIKAN INDONESIA SAAT BERWISATA KE LUAR NEGERI</li>
                <li>5. MENJALIN RELASI SEBANYAK MUNGIN DARI DALAM MAUPUN LUAR NEGERI</li>
            </b></ul>
        </div>
</div>
{{-- ourteam --}}
<div class="ourteam center">
    <h5>Yuk kita kenalan lebih dekat bersama denga pendiri-pendiri dan tim Banana Pirates!</h5>
    <br>
    <h3><b class="main-color ourteam-title">MEET OUR TEAM</b></h3><br>
</div>
{{-- project and event --}}
<div class="pro-event center">
    <div class="container-fluid">
        <h1><b>PROJECT AND EVENT</b></h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="greys carousel-inner row w-100 mx-auto">
                {{-- card list --}}
                <div class="carousel-item col-md-4 active">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ URL::to('/') }}/images/eventproject/{{$eventprojects[0]->pictures}}" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-content">
                                <p id="content" class="card-text">
                                    {{$eventprojects[0]->content}}
                                </p>
                            </div>
                        </div>
                        <div class="right">
                            <a class="readmore" href="{{ URL::to('/') }}/projectevent/detail/{{$eventprojects[0]->id}}">READ MORE >>&nbsp;&nbsp;&nbsp; </a>
                        </div>
                    </div>
                </div>
                @foreach ($eventprojects as $ev )
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ URL::to('/') }}/images/eventproject/{{$ev->pictures}}" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-content">
                                <p id="content" class="card-text">
                                    {{$ev->content}}
                                </p>
                            </div>
                        </div>
                        <div class="right">
                            <a class="readmore" href="{{ URL::to('/') }}/projectevent/detail/{{$ev->id}}">READ MORE >>&nbsp;&nbsp;&nbsp; </a>
                        </div>
                    </div>
                </div>
    
                @endforeach
                {{-- <div class="carousel-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-content">
                                <p id="content" class="card-text">
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                </p>
                            </div>
                        </div>
                        <div class="right">
                            <a class="readmore" href="#">READ MORE >>&nbsp;&nbsp;&nbsp; </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-content">
                                <p id="content" class="card-text">
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                </p>
                            </div>
                        </div>
                        <div class="right">
                            <a class="readmore" href="#">READ MORE >>&nbsp;&nbsp;&nbsp; </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-content">
                                <p id="content" class="card-text">
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                </p>
                            </div>
                        </div>
                        <div class="right">
                            <a class="readmore" href="#">READ MORE >>&nbsp;&nbsp;&nbsp; </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-4">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-content">
                                <p id="content" class="card-text">
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                    Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum 
                                </p>
                            </div>
                        </div>
                        <div class="right">
                            <a class="readmore" href="#">READ MORE >>&nbsp;&nbsp;&nbsp; </a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
{{-- campaign --}}
<div class="campaign">
    <h1><b>OUR CAMPAIGN</b></h1>
    @foreach ($campaigns as $camp )
        
    @endforeach
    <img class="campaign-img" src="{{asset('images/blogs/banner.jpg')}}"/>
    <h3><b>{{$camp->campaign_name}}</b></h3>
    <p>{{$camp->content}}</p>
    <a class="donate" href="https://{{$camp->hyperlink}}">DONATE >></a>
</div>
{{-- blog --}}
<div class="blog-home">
    <h1><b>BLOG</b></h1><br><br>
    <div class="container-blogs">
        <div class="carousel-blogs">
            <a href="#">
                <img class="item a" src="{{asset('images/blogs/banner.jpg')}}"/>
                <p class="blog-title a">Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum </p>
            </a>
            <div class="item b">B</div>
            <div class="item c">C</div>
            <div class="item d">D</div>
            <div class="item e">E</div>
            <div class="item f">F</div>
        </div>
            <div class="next-blogs">Next</div>
            <div class="prev-blogs">Prev</div>
    </div>
</div>
{{-- our gallery --}}
<div class="gallery-home">
    <h1><b>OUR GALLERY</b></h1>
    <div class="flex center">
        <div class="col-lg-6">
            <img class="gallery-img" src="{{asset('images/blogs/banner.jpg')}}"/>
        </div>
        <div class="col-lg-6">
            <img class="gallery-img" src="{{asset('images/blogs/banner.jpg')}}"/>
        </div>
    </div>
    <div>
        <a class="gallery-more" href="#"><b>MORE >></b></a>
    </div>

</div>
{{-- laporan keuangan --}}
<div class="cashflow-home">
    <h1><b>LAPORAN KEUANGAN</b></h1>
    <img class="cashflow-img" src="{{asset('images/blogs/banner.jpg')}}"/>
    <p class="cashflow-keterangan">Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum LorepsumLorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum </p>
    <div class="cashflow-detail-btn">
        <a class="cashflow-detail" href="#">LIHAT LAPORAN KEUANGAN</a>
    </div>
</div>
{{-- testimoni --}}
<div class="testimoni-home">
    <h1 class="testimoni-title"><b>TESTIMONI</b></h1> 
    <div id="testimoniCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <div class="flex">
                        <div class="col-lg-6 testimoni-card">
                            <img class="people-img" src="{{asset('images/blogs/banner.jpg')}}">
                        </div>
                        <div class="col-lg-6 testimoni-card">
                            <img class="people-img" src="{{asset('images/blogs/banner.jpg')}}">
                        </div>
                    </div>
              </div>
              <div class="carousel-item">
                    <div class="flex">
                        <div class="col-lg-6 testimoni-card">
                            <img class="people-img" src="{{asset('images/blogs/banner.jpg')}}">
                        </div>
                        <div class="col-lg-6 testimoni-card">
                            <img class="people-img" src="{{asset('images/blogs/banner.jpg')}}">
                        </div>
                    </div>
                  </div>
              <div class="carousel-item">
                    <div class="flex">
                        <div class="col-lg-6 testimoni-card">
                            <img class="people-img" src="{{asset('images/blogs/banner.jpg')}}">
                        </div>
                        <div class="col-lg-6 testimoni-card">
                            <img class="people-img" src="{{asset('images/blogs/banner.jpg')}}">
                        </div>
                    </div>
                  </div>
            </div>
            <a class="carousel-control-prev" href="#testimoniCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimoniCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>   
</div>
@include('layouts/footer')
        
<script>
    // readmore
    document.querySelector('button').addEventListener('click', function() {
    document.querySelector('#content').style.height= 'auto';
    this.style.display= 'none';
    });
    // carousel
    $("#myCarousel").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
            $(".carousel-item")
            .eq(i)
            .appendTo(".carousel-inner");
        } else {
            $(".carousel-item")
            .eq(0)
            .appendTo($(this).find(".carousel-inner"));
        }
        }
    }
    });
</script>
@endsection