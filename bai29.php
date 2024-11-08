<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngày sinh</title>
    <style type="text/css">
        body {
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
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
        input[type="text"][name="result"] {
            background-color: #FFFAFA;
        }
        table {
            border-collapse: separate;
            border-spacing: 10px 0;
        }
        input[type="text"]{
            width: 450px;
        }
    </style>
</head>
<body>
    <?php
        $result = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ngay = $_POST['ngay'];
            $thang = $_POST['thang'];
            $nam = $_POST['nam'];
            $ngay_ht = date("d");
            $thang_ht = date("m");
            $nam_ht = date("Y");
            $tuoi = $nam_ht - $nam;
            $time_sinh_nhat = mktime(0, 0, 0, $thang, $ngay, $nam_ht);
            $time_hien_tai = mktime(0, 0, 0, $thang_ht, $ngay_ht, $nam_ht);
            $diff_days = abs(($time_sinh_nhat - $time_hien_tai) / (60 * 60 * 24));

            if ($diff_days > 0) {
                if ($time_sinh_nhat < $time_hien_tai) {
                    $result = "Năm nay bạn $tuoi tuổi. Ngày sinh nhật của bạn đã qua $diff_days ngày.";
                } else {
                    $result = "Năm nay bạn $tuoi tuổi. Còn $diff_days ngày nữa là đến ngày sinh nhật của bạn.";
                }
            } else {
                $result = "Năm nay bạn $tuoi tuổi. Chúc mừng sinh nhật!";
            }
        }
    ?>
   
    <div class="container">
        <h2>Ngày sinh</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Ngày/Tháng/Năm:</label></td>
                    <td>
                        <input type="number" id="ngay" name="ngay" value="<?php echo $ngay; ?>">/
                        <input type="number" id="thang" name="thang" value="<?php echo $thang; ?>">/
                        <input type="number" id="nam" name="nam" value="<?php echo $nam; ?>">
                    </td>
                    <td><input type="submit" value="Thông báo"></td>
                </tr>
                
            </table>
            
            <input type="text" id="result" name="result" value="<?php echo $result; ?>" readonly>  
        </form>
    </div>
</body>
</html>
