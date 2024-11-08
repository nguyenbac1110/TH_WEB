<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện Tích Và Chu vi Hình Tròn</title>
    <style type="text/css">
        body {
           
            padding: 20px;
            box-sizing: border-box;
        }
        .container{
            background-color: #FFFFE0;
            width: 500px;
            margin: 0 auto;
            text-align: center;
        }
        h2 {
            color: #800000;
            margin-bottom: 20px;
            }
        input[type="submit"] {
            display: block;
            margin: 0 auto;
        }
        input[type="text"][name="chuvi"],
        input[type="text"][name="dientich"] {
            background-color: #FFFAFA;
        }
        table {
            border-collapse: separate;
            border-spacing: 50px 0;
        }
        
    </style>
</head>
<body>
    <?php
    $bankinh = $dientich =$chuvi='';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bankinh = $_POST['bankinh'];
        $dientich = 3.14 * $bankinh * $bankinh;
        $chuvi = 2 * 3.14 * $bankinh;
    }
    ?>
    <div class="container">
    <h2>Diện Tích Và Chu vi Hình Tròn</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
        <tr>
            <td><label for="bankinh">Bán kính:</label></td>
            <td><input type="text" id="bankinh" name="bankinh" value="<?php echo $bankinh; ?>"></td>
        </tr>
        <tr>
            <td><label for="dientich">Diện tích:</label></td>
            <td><input type="text" id="dientich" name="dientich" value="<?php echo $dientich; ?>" readonly></td>
        </tr>
        <tr>
            <td><label for="chuvi">Chu vi:</label></td>
            <td><input type="text" id="chuvi" name="chuvi" value="<?php echo $chuvi; ?>" readonly></td>
        </tr>
    </table>
    <input type="submit" value="Tính">
</form>
</div>
</body>
</html>
