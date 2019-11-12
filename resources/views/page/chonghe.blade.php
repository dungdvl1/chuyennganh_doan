<!doctype html>
<html lang="en">

<head>
    <title>Title</title>

    <base href="{{asset('')}}">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS -->

    <link rel="stylesheet" href="source/checkout.css">
    <link rel="stylesheet" href="source/chonghe.css">

</head>

<body>

    <div class="left">
        <!-- start header -->

        <header>
            <nav class="navbar navbar-expand-sm navbar-light">
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item ">
                            <span class="stt">01</span>
                            <span>Chọn loại vé</span>
                        </li>
                        <li class="nav-item active">
                            <span class="stt">02 </span>
                            <span>chọn ghế & thanh toán</span>

                        </li>
                        <li class="nav-item">
                            <span class="stt">03</span>
                            <span>kết quả đặt vé</span>
                        </li>
                    </ul>
                    <!-- end menu left -->
                    <div class="right navbar-nav ml-auto mt-2 mt-lg-0">
                        <div class="user">
                            <div class="image">
                                <img src="source/images/user/11.jpg" alt="">
                            </div>
                            <div class="name">
                                <span>Dũng Lương</span>
                            </div>
                        </div>
                    </div>
                    <!-- end menu right -->
                </div>
            </nav>
        </header>

        <!-- end header -->

        <main>

            <div class="main-left text-center">
                <div class="title-chon-ghe">
                    <div class="title-left text-center">
                        <img src="source/images/logo_cinema/hbd.png" alt="">
                        <div class="ten">
                            <span class="mau">BHD Star</span><span> - Vincom 3/2</span>
                        </div>
                        <br>
                        <div class="time">Hôm nay - 13:30 - RẠP 5</div>
                    </div>
                    <!-- end title left -->
                    <div class="title-right">
                        <div class="time-checkseat">
                            <div class="title-time">Thời gian giữ ghế</div>
                            <div class="thoigian">05:00</div>
                        </div>
                    </div>
                </div>
                <!-- end title-chon-ghe -->

                <div class="manhinh">
                    <img src="source/images/screen.png" alt="">
                </div>

                <div class="mot_hang">
                    <span class="hang">A</span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                </div>
                <div class="mot_hang">
                    <span class="hang">B</span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                </div>


                @foreach($hang as $value)
                <div class=" mot_hang">
                    <span class="hang">{{$value->ten_hangghe}}</span>
                    @foreach($soghe as $val)
                    <span class="choose">
                        <span class="numbercode">{{$val->soghe}}</span>
                    </span>
                    @endforeach
                </div>

                @endforeach


                <div class="mot_hang">
                    <span class="hang">H</span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                    <span class="nochoose"><img src="source/images/ghe/notchoose.png" alt=""></span>
                </div>


                <div class="thong-tin-ghe text-center">
                    <span class="ghe">
                        <span class="colorseat ghevip"></span>
                        <span class="nameseat">Ghế Vip</span>
                    </span>
                    <span class="ghe">
                        <span class="colorseat ghedangchon"></span>
                        <span class="nameseat">Ghế Đang Chọn</span>
                    </span>
                    <span class="ghe">
                        <span class="colorseat ghekothechon text-center">
                            <img src="source/images/ghe/notchoose.png" alt="">
                        </span>
                        <span class="nameseat">Ghế Không Thể Chọn</span>
                    </span>
                </div>

            </div>
            <!-- End main-left -->
        </main>
    </div>
    <!-- end left -->


    <!-- start right -->

    <div class="right-main">
        <div class="gia">
            120.000 đ
        </div>
        <!-- end gia -->
        <div class="title-name">
            <div class="name-film">Joker</div>
            <div class="rap">BHD Star - Bitexco</div>
            <div class="time-chieu">Hôm nay 23/10/2019 - 14:40 - RẠP 6</div>
        </div>
        <!-- end title-name -->
        <div class="seatnumber">
            <div class="seat">Ghế</div>
            <div class="price">120.000 đ</div>
        </div>
        <!-- end seat-number -->
        <div class="email">
            <input type="email" name="email" id="email" placeholder="E-Mail">
        </div>
        <!-- end email -->
        <div class="phone">
            <input type="text" name="phone" id="phone" placeholder="Phone">
        </div>
        <!-- end phone -->
        <div class="hinhthucthanhtoan">
            <p>Hình thức thanh toán</p>
            <label class="container">Thanh toán qua ZaloPay
                <input type="radio" checked="checked" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="container">Visa, Master, JCB
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="container">Thẻ ATM nội địa
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="container">Thanh toán tại của hàng tiện ích
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
        </div>
        <!-- end hinh thuc thanh toan -->
        <div class="button_datve text-center">
            <span>Đặt Vé</span>
        </div>
    </div>

    <!-- end right -->


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
</body>

</html>