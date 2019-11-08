$(function() {
    // click button turnoff view video
    $(".button-close").click(function() {
        // hide video box
        $(".video-box").hide();

        // hide video box
        $(this)
            .children()
            .children()
            .attr(
                "src",
                $(this)
                    .children()
                    .children()
                    .attr("src")
            );
        //xoa class hide-wapper
        $(".video-box").removeClass("active");
    });

    // click ngoai turnoff view video
    $(".video-box").click(function() {
        // hide video box
        $(".video-box").hide();

        // $("iframe").attr("src", $("iframe").attr("src"));

        // hide video box
        $(this)
            .children()
            .children()
            .attr(
                "src",
                $(this)
                    .children()
                    .children()
                    .attr("src")
            );

        //xoa class hide-wapper
        $(".video-box").removeClass("active");
    });

    $(".button-play").click(function() {
        $(this)
            .next()
            .show();
        $(this)
            .next()
            .addClass("active");
    });

    //click toggle phim
    $(".title-top").click(function() {
        $(this)
            .next()
            .next()
            .toggle(2000);
    });

    // click chon ghe
    $(".choose").click(function() {
        $(this)
            .children()
            .toggleClass("active");
        $(this).toggleClass("chooseactive");
    });

    // bien tong thanh tien
    var sum = 0;

    var i = 0;
    var click = 0;

    // tangsoluongve
    $(".add").click(function() {
        click++;
        console.log(click);
        if (click <= 10) {
            if (i < 0) {
                i = 0;
            } else if (i >= 10) {
                i = 10;
            }
            // thay doi so trong o number
            var a = parseInt(
                $(this)
                    .prev()
                    .html()
            );
            i++;
            // console.log(i);
            if (a < 10) {
                a++;
            } else {
                a = 10;
            }
            $(this)
                .prev()
                .html(a);

            // khoi tao bien tongthanhtien
            var tongthanhtien = 0;

            // cap nhat so tien cua class chosepriceticket
            var gia = parseInt(
                $(this)
                    .parent()
                    .prev()
                    .html()
            );

            if (i <= 10) {
                var thanhtien = gia * i;
                // console.log(thanhtien);
                sum += gia;
            }

            $(this)
                .parent()
                .parent()
                .parent()
                .parent()
                .next()
                .children()
                .children()
                .children()
                .next()
                .html(sum + " đ");
        } else {
            click = 10;
        }
    });

    // giamsoluongve
    $(".minus").click(function() {
        click--;
        console.log(click);
        if (click >= 0) {
            var a = parseInt(
                $(this)
                    .next()
                    .html()
            );
            i--;
            // console.log(i);
            if (a != 0) {
                if (a > 0) {
                    a--;
                }
                $(this)
                    .next()
                    .html(a);

                // khoi tao bien tongthanhtien
                var tongthanhtien = 0;

                // cap nhat so tien cua class chosepriceticket
                var gia = parseInt(
                    $(this)
                        .parent()
                        .prev()
                        .html()
                );

                if (i >= 0) {
                    var thanhtien = gia * i;
                    // console.log(thanhtien);
                    sum -= gia;
                }

                $(this)
                    .parent()
                    .parent()
                    .parent()
                    .parent()
                    .next()
                    .children()
                    .children()
                    .children()
                    .next()
                    .html(sum + " đ");
            }
        } else {
            click = 0;
        }
    });
});
