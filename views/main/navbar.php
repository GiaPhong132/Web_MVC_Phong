<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/MVC_Phong/public/css/navbar_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function() {
            $(".toggle").on("click", function() {
                if ($(".item").hasClass("active")) {
                    $(".item").removeClass("active");
                } else {
                    $(".item").addClass("active");
                }
            })

        })
    </script>
</head>

<body>
    <nav>
        <ul class="menu">
            <li class="logo"><a href="#">BKBLUE</a></li>
            <li class="item"><a href="#">Trang Chủ</a></li>
            <li class="item"><a href="#">Chúng Tôi</a></li>
            <li class="item"><a href="#">Sản Phẩm</a></li>
            <li class="item button"><a href="#">Đăng Nhập</a></li>
            <li class="item button secondary"><a href="#">Đăng Ký</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>
</body>

</html>