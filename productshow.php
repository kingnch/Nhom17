<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $conn = new mysqli('localhost', 'root', '', 'myweb');
    $tenbaigiang1_id = $_GET['tenbaigiang1_id'];
    $sql = "SELECT * FROM tbl_baigiang1 WHERE tenbaigiang1_id=$tenbaigiang1_id";
    $result = $conn->query($sql);
    ?>
    <?php
        while($row = $result->fetch_assoc()){
                echo "<div>";
                 echo "<img src='" . $row["baigiang_img"] . "'alt = 'anh'>";
                echo "<h1>".$row["cartegory_id"]."</h1>";
                echo "<p>" .$row["tacgia_id"]."<p>";
                echo "</div>";
                                        }
                                    ?>
</html>