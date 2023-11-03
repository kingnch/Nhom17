<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hỗ trợ học tập</title>
    <link rel="stylesheet" type="text/css" href="./main.css">
    <link rel="stylesheet" type="text/css" href="./fontawesome/css/all.css">
    <link rel="shortcut icon" href="./icon.ico" type="image/x-icon" />
</head>
<body>
        <header class="header">
        <img id="a1" src ="2.png" alt="">
        <div class="search">
            <div class="login">
            <button class="custom-button" onclick="Dangnhap()">Đăng Nhập</button>
            <button class="custom-button">Đăng Ký</button>
            </div>
            <div class="login1">
                <form action="/tim-kiem" method="GET">   
                <input type="text" name="tu-khoa" placeholder="Nhập từ khóa">
                <input type="submit" value="Tìm Kiếm">
                </form>
            </div>
        </div>
        <div class = "second">
         <div>
        <a href="./index.php">Trang chủ</a>
        </div>
        <div>
            <a href="./subject.php">Các môn học</a>
            </div>
        <div>
                <a href="./index.php">Tài liệu tham khảo</a>
         </div>
         <div>
            <a href="./index.php">Hỗ trợ</a>
            </div>
        <div>
                <a href="./index.php">Khác</a>
        </div>
            </div>
        </header>
    <div class="hobies">
        <div class="hobo">
            <div id="moving">Hệ thống hỗ trợ học tập</div>
        </div>
        <div class="slideshow-container">
            <div class="dieuhuong">
                <i class="fa-solid fa-circle-left" onclick="Back()"></i>
                <i class="fa-solid fa-circle-right" onclick="Next()"></i>
            </div>
            <div class = "mySlides">
                <img src="slide1.png" alt="Slide 1">
                <img src="slide2.png" alt="Slide 2">
                <img src="slide3.png" alt="Slide 3">
            </div>
        </div>
    </div>
    <div class ="cuoi ">
        <div class="row">
        <div class="cuoi1">
            <h2>Thông tin liên hệ</h2>
            <ul>
                <li class="cuoi3">Nguyễn Công Hà</li>
                <li class="cuoi3">Lớp 20Cn5</li>
                <li class="cuoi3">Khoa Công Nghệ Thông Tin</li>
                <li class="cuoi3">Đại Học Kiến Trúc Hà Nội</li>
                <li class="cuoi3">Email : Congha2111@gmail.com</li>
                <li class="cuoi3">Điện thoại : 0932352401</li> 
            </ul>
        </div>
        <div class="cuoi2">
            <h2>Thông tin liên hệ</h2>
            <ul>
                <li class="cuoi3">Nguyễn Thùy Linh</li>
                <li class="cuoi3">Lớp 20Cn5</li>
                <li class="cuoi3">Khoa Công Nghệ Thông Tin</li>
                <li class="cuoi3">Đại Học Kiến Trúc Hà Nội</li>
                <li class="cuoi3">Email : thuylinh21111211@gmail.com</li>
                <li class="cuoi3">Điện thoại : 0397536009</li> 
            </ul>
        </div>
    </div>
    
    <script src="./main1.js"></script>
</body>
</html>