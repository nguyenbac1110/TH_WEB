<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Học Tập</title>
    <style type="text/css">
        body {
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
            background-color: #db95b9;
            width: 500px;
            margin: 0 auto;
            text-align: center;
            
        }
        h2 {
            background-color: #cc3467;
            color: #e9eaed;
        }
        input[type="submit"] {
            display: block;
            margin: 0 auto;
        }
        table {
            border-collapse: separate;
            border-spacing: 50px 0;
        }
         input[type="text"][name="dtb"], 
         input[type="text"][name="ketQua"],
         input[type="text"][name="xepLoai"]{
            background-color: #fefdcd;
        }

    </style>
</head>
<body>
    <?php
    $diemHK1 = $diemHK2 = $dtb = $ketQua = $xepLoai = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $diemHK1 = $_POST['diemHK1'];
        $diemHK2 = $_POST['diemHK2'];
        
        
        $dtb = ($diemHK1 + $diemHK2 * 2) / 3;
        if ($dtb >= 5) {
            $ketQua = "Duoc len lop";
        } else {
            $ketQua = "O lai lop";
        }
        
        if ($dtb >= 8) {
            $xepLoai = "Gioi";
        } elseif ($dtb >= 6.5) {
            $xepLoai = "Kha";
        } elseif ($dtb >= 5) {
            $xepLoai = "Trung binh";
        } else {
            $xepLoai = "Yeu";
        }
    }
    ?>

    <div class="container">
        <h2>KẾT QUẢ HỌC TẬP</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td>Điểm HK1:</td>
                    <td><input type="text" name="diemHK1" value="<?php echo $diemHK1; ?>"></td>
                </tr>
                <tr>
                    <td>Điểm HK2:</td>
                    <td><input type="text" name="diemHK2" value="<?php echo $diemHK2; ?>"></td>
                </tr>
                <tr>
                    <td>Điểm trung bình:</td>
                    <td><input type="text" name="dtb" value="<?php echo $dtb; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Kết quả:</td>
                    <td><input type="text" name="ketQua" value="<?php echo $ketQua; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Xếp loại học lực:</td>
                    <td><input type="text" name="xepLoai" value="<?php echo $xepLoai; ?>" readonly></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Xem kết quả">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
