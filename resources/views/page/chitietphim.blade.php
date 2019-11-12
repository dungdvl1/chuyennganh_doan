<!doctype html>
<html lang="en">

<head>
    <title>Phim {{$phim->ten_phim}}</title>

    <base href="{{asset('')}}">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="source/css/style.css">
    <link rel="stylesheet" href="source/chitietphim.css">
    <script src="https://kit.fontawesome.com/5938ac041a.js"></script>
</head>

<body>


    <div class="wapper">



        <!-- start header -->

        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <a class="navbar-brand" href="#">logo</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"></div>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lịch chiếu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cụm rạp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ứng dụng</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="login.html">Login</a>
                    </form>
                </div>
            </nav>
        </header>

        <!-- end header -->


        <main>
            <div class="detail-main-top">
                <div class="style-blur">
                    <img src="source/images/list-film/dangchieu/bg/{{$phim->hinh_background}}" alt=""
                        class="poster-landscape-film">
                </div>
                <div class="style-gradient"></div>
                <div class="detail-main-info row">
                    <div class="col-sm-4 film-postter-top">
                        <div class="poster-main">
                            <img src="source/images/list-film/dangchieu/{{$phim->hinh_title}}" alt="">
                            <div class="button-play">
                                <img src="source/images/button/play-video.png" alt="">
                            </div>
                            <!-- button view video-box -->

                            <div class="video-box text-center">
                                <div class="video">
                                    <iframe src="https://www.youtube.com/embed/{{$phim->video}}" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                    <div class="button-close">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>

                            </div>

                            <!-- end button view video-box -->
                        </div>
                    </div>
                    <!-- end film-poster-top -->
                    <div class="col-sm-8 info-main text-left">
                        <div class="ngay">{{$phim->ngay_chieu}}</div>
                        <div class="title-detail">
                            <span class="tuoi">C16</span>
                            <span>{{$phim->ten_phim}}</span>
                            <br>
                            <span class="info1">{{$phim->thoiluong}}</span>
                            <br>
                            <button>Đặt vé</button>
                        </div>
                    </div>
                    <!-- end info-main -->
                    <div class="info-detail col-sm-5">
                        <div class="loai-phim">
                            Loại phim:{{$phim->loai_phim}}
                        </div>
                        <div class="thoi-luong">Thời lượng: {{$phim->thoiluong}}</div>
                        <div class="dien-vien">Diễn viên: {{$phim->dienvien}}</div>
                        <div class="dao-dien">Đạo diễn: {{$phim->daodien}}</div>
                        <div class="xuat-xu">Xuất xứ: {{$phim->xuatxu}}</div>
                        <div class="khoi-chieu">Khởi chiếu: 11/10/2019</div>
                    </div>
                    <!-- end info-detail -->
                    <div class="gioithieu col-sm-7">
                        {{$phim->noidung}}
                    </div>
                    <!-- end gioi-thieu -->
                </div>
                <!-- end detail main info -->
                <div class="down">
                    <div class="container">
                        <div class="box_chon_xuatchieu row">
                            <div class="lich_chieu text-center col-sm-12">
                                Lịch chiếu
                            </div>
                            @foreach ($suatchieu as $key => $value)
                                @foreach ($id as $key => $val) 
                                    @if ($val==$value->id_suatchieu)
                                        <div class="info_lichchieu text-left col-sm-8">
                                            <div class="ngay_chieu">{{$value->ngaychieu}}</div>
                                            <div class="gio_chieu">
                                                @foreach ($giochieu as $key => $v)
                                                    @if ($val==$v->id_suatchieu)
                                                        <a href="checkout.html">{{$v->giobatdau}}</a>
                                                    @endif
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="col-sm-4 text-right dang_phim">
                                            <span>2D</span>
                                        </div>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
        </main>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>


        <script src="source/js/main.js"></script>

    </div>
</body>

</html>