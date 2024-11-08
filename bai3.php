<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán Tiền Điện </title>
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
        input[type="text"][name="so_tien_thanh_toan"] {
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
    $chi_so_cu = $chi_so_moi =  $so_tien_thanh_toan ='';
    $don_gia = 2000;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chi_so_cu = $_POST["chi_so_cu"];
        $chi_so_moi = $_POST["chi_so_moi"];
        $don_gia = $_POST["don_gia"];
        $so_tien_thanh_toan = ($chi_so_moi - $chi_so_cu) * $don_gia;
        
    }
    ?>
    <div class="container">
    <h2>Thanh toán tiền điện</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
        <tr>
            <td><label for="ten_chu_ho">Tên chủ hộ:</label></td>
            <td><input type="text" id="ten_chu_ho" name="ten_chu_ho"></td>
        </tr>
        <tr>
            <td><label for="chi_so_cu">Chỉ số cũ:</label></td>
            <td><input type="text" id="chi_so_cu" name="chi_so_cu" value="<?php echo $chi_so_cu; ?>"></td>
        </tr>
        <tr>
            <td><label for="chi_so_moi">Chỉ số mới:</label></td>
            <td><input type="text" id="chi_so_moi" name="chi_so_moi" value="<?php echo $chi_so_moi; ?>"></td>
        </tr>
        <tr>
            <td><label for="don_gia">Đơn giá:</label></td>
            <td><input type="text" id="don_gia" name="don_gia" value="<?php echo $don_gia; ?>"></td>
        </tr>
        <tr>
            <td><label for="so_tien_thanh_toan">Số tiền thanh toán:</label></td>
            <td><input type="text" id="so_tien_thanh_toan" name="so_tien_thanh_toan" value="<?php echo $so_tien_thanh_toan; ?>" readonly></td>
        </tr>
    </table>
    <input type="submit" value="Tính">
</form>
    </div>
</body>
</html>