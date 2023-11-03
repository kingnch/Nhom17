<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
        <div class="container">
            <h2 class="text-uppercase my-5">Đăng Nhập Hệ Thống</h2>
            <form action="xulilogin.php" method="post">
                Username  : <input type="text" name="username" class = "form control" required="">
                <br>
                Passwword : <input type="password" name="password" class ="form control my-3" required="">
                <input type = "submit" class = "btn btn-block btn-info">
            </form>
</body>
</html>