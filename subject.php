<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hỗ trợ học tập</title>
    <link rel="stylesheet" type="text/css" href="./main.css">
    <link rel="stylesheet" type="text/css" href="./fontawesome/css/all.css">
    <link rel="shortcut icon" href="./icon.ico" type="image/x-icon" />
    <style>
        .subject-right-content{
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    text-align : center;
    justify-content: space-between;
}
.subject-right-content p{
    text-align: center;
    font-size: 20px;
}
</style>
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
        <section class="subject">
            <div class="container">
                <div class ="row">
                    <div class = "subject-left">
                        <ul>
                            <li class="subject-left-li"><a href="#">Công nghệ thông tin</a>
                                <ul>
                                    <li><a href="">Lập trình Web</a></li>
                                    <li><a href="">Lập trình ứng dụng</a></li>
                                    <li><a href="">Lập trình Game</a></li>
                                    <li><a href="">Thiết kế đồ họa</a></li>
                                </ul>
                            </li>
                            <li class="subject-left-li"><a href="#">Tiếng Anh</a>
                                <ul>
                                    <li><a href="">TOEIC</a></li>
                                    <li><a href="">IELTS</a></li>
                                    <li><a href="">TOEFL</a></li>
                                </ul>
                            </li>
                            <li class="subject-left-li"><a href="">Kỹ năng sống</a></li>
                            <li class="subject-left-li"><a href="">Kỹ năng thoát hiểm</a></li>
                        </ul>
                    </div>
                    <div class = "subject-right ">
                        <div class="subject-right-top">
                            <p>Lập trình web</p>
                        </div>
                        <?php 
                                $conn = new mysqli('localhost', 'root', '', 'myweb');
                                $sql = "SELECT * FROM tbl_baigiang1";
                                $result = $conn->query($sql);
                        ?>
                        <div class = "subject-right-content">
                                    <?php
                                        while($row = $result->fetch_assoc()){
                                            echo "<div>";
                                            echo "<img src='" . $row["baigiang_img"] . "'alt = 'anh'>";
                                            echo "<h1>".$row["tenbaigiang_name"]."</h1>";
                                            echo "<p>" .$row["tacgia_id"]."<p>";
                                            echo "</div>";
                                        }
                                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="./main1.js"></script>
        <script>
    function Dangnhap() {
        window.location.href = "login.php";
    }
</script>
</body>
</html>
        