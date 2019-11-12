@extends('master')
@section('content')

<!-- start slide -->

<div class="slide">
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">

                @foreach($slide as $value)
                @if($value->id_slide==1)
                <div class="carousel-item active">
                    <img src="source/images/list-film/dangchieu/bg/{{$value->hinh}}" class="d-block w-100" alt="...">

                    <div class="button-play">
                        <img src="source/images/button/play-video.png" alt="">
                    </div>
                    <!-- button view video-box -->

                    <div class="video-box text-center">
                        <div class="video">
                            <iframe class="playerid" src="https://www.youtube.com/embed/{{$value->link}}"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <div class="button-close">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                    </div>

                    <!-- end button view video-box -->
                </div>

                @else
                <div class="carousel-item">
                    <img src="source/images/list-film/dangchieu/bg/{{$value->hinh}}" class="d-block w-100" alt="...">

                    <div class="button-play">
                        <img src="source/images/button/play-video.png" alt="">
                    </div>
                    <!-- button view video-box -->

                    <div class="video-box text-center">
                        <div class="video">
                            <iframe class="playerid" src="https://www.youtube.com/embed/{{$value->link}}"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <div class="button-close">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                    </div>

                    <!-- end button view video-box -->
                </div>

                @endif
                @endforeach


            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!-- end slide -->

<!-- start list -->

<div class="list">

    <div class="container">
        <!-- start title -->
        <div class="title text-center" style="padding-top: 50px;">
            <a href="#" class="active">Đang Chiếu</a>
            <a href="#">Sắp Chiếu</a>
        </div>
        <!-- end title -->
        <!-- start list film -->
        <div class="list-film">
            <div class="row">

                @foreach($phim as $val)

                <div class="col-md-3 col-sm-4 khoifilm">
                    <div class="img">
                        <div class="man"></div>
                        <img src="source/images/list-film/dangchieu/{{$val->hinh_title}}" class="img-fluid" alt="">
                    </div>
                    <div class="title-film">
                        <h6>{{$val->ten_phim}}</h6>
                        <p>{{$val->thoiluong}}</p>
                    </div>
                    <div class=" button-play">
                        <img src="source/images/button/play-video.png" alt="">
                    </div>
                    <!-- button view video-box -->

                    <div class="video-box text-center">
                        <div class="video">
                            <iframe id="playerid" src="https://www.youtube.com/embed/{{$val->video}}" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <div class="button-close">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                    </div>

                    <!-- end button view video-box -->
                    <div class="button-muave">
                        <a href="http://localhost/project/public/chi-tiet-phim/{{$val->id_phim}}">Mua vé</a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
        <!-- end list film -->
    </div>

    <!-- end list -->

    @endsection