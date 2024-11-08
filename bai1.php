<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện Tích Hình Chữ Nhật</title>
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
    $chieudai=$chieurong=$dientich='';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chieudai = $_POST['chieudai'];
        $chieurong = $_POST['chieurong'];
        $dientich = $chieudai * $chieurong;
    }
    ?>
    <div class="container">
    <h2>Diện Tích Hình Chữ Nhật</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
        <tr>
            <td><label for="chieudai">Chiều dài:</label></td>
            <td><input type="text" id="chieudai" name="chieudai" value="<?php echo $chieudai; ?>"></td>
        </tr>
        <tr>
            <td><label for="chieurong">Chiều rộng:</label></td>
            <td><input type="text" id="chieurong" name="chieurong" value="<?php echo $chieurong; ?>"></td>
        </tr>
        <tr>
            <td><label for="dientich">Diện tích:</label></td>
            <td><input type="text" id="dientich" name="dientich" value="<?php echo $dientich; ?>" readonly></td>
        </tr>
    </table>

        <input type="submit" value="Tính">
    </form>
    </div>
    
</body>
</html>

