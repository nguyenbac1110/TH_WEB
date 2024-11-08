<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Thi Đại Học</title>
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
        input[type="text"][name="diemchuan"]{
            color: red;
        }
        input[type="text"][name="ketqua"],
        input[type="text"][name="tongdiem"]{
            background-color: #fefdcd;
        }
    </style>
</head>
<body>
    <?php
    $toan = $ly = $hoa = $diemchuan = $tongdiem = $ketqua = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $toan = $_POST['toan'];
        $ly = $_POST['ly'];
        $hoa = $_POST['hoa'];
        $diemchuan = 20;
      
        $tongdiem = $toan + $ly + $hoa;
        if ($toan > 0 && $ly > 0 && $hoa > 0 && $tongdiem >= $diemchuan) {
            $ketqua = "Dau";
        } else {
            $ketqua = "Rot";
        }
    }
    ?>

    <div class="container">
        <h2>KẾT QUẢ THI ĐẠI HỌC</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table>
                <tr>
                    <td>Toán:</td>
                    <td><input type="text" name="toan"value="<?php echo $toan; ?>" ></td>
                </tr>
                <tr>
                    <td>Lý:</td>
                    <td><input type="text" name="ly" value="<?php echo $ly; ?>" ></td>
                </tr>
                <tr>
                    <td>Hoá:</td>
                    <td><input type="text" name="hoa" value="<?php echo $hoa; ?>"></td>
                </tr>
                <tr>
                    <td>Điểm chuẩn:</td>
                    <td><input type="text" name="diemchuan" value="<?php echo $diemchuan; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Tổng điểm:</td>
                    <td><input type="text" name="tongdiem" value="<?php echo $tongdiem ?>" readonly></td>
                </tr>
                <tr>
                    <td>Kết quả thi:</td>
                    <td><input type="text" name="ketqua" value="<?php echo $ketqua; ?>" readonly></td>
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
