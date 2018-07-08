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
        <img class="d-block w-100" src="{{asset('../images/blogs/banner.jpg')}}" alt="First slide">
        <div class="carousel-caption d-none d-md-block right">
                <h1><b>Lorepsum Lorepsum Lorepsum Lorepsum</b></h1>
                <p> Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum</p>
              </div>
        </div>
        <div class="carousel-item carousel-img">
        <img class="d-block w-100" src="{{asset('images/blogs/banner.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item carousel-img">
        <img class="d-block w-100" src="{{asset('images/blogs/banner.jpg')}}" alt="Third slide">
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
    <h1>OUR CAMPAIGN</h1>
    <img class="campaign-img" src="{{asset('images/blogs/banner.jpg')}}"/>
    <h3><b>Madrasah Kampoeng Cham</b></h3>
    <p>Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum Lorepsum </p>
    <a class="donate" href="">DONATE >></a>
</div>
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