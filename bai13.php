<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm thứ trong tuần</title>
    <style>
        body {
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
            background-color: #d796b4;
            width: 600px;
            margin: 0 auto;
            text-align: center;
        }
        h2 {
            background-color: #c73667;
            color: white;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            display: block;
            margin: 0 auto;
            background-color:#f2ccd9;
            color:#70454d;
        }
        table {
            border-collapse: separate;
            border-spacing: 20px 0;
        }
        table td {
            text-align: left;
        }
        #result {
            color: red;
            width: 400px;
            text-align: center;
            background-color: #fdf6d8;
        }
       
    </style>
</head>
<body>
    <?php
   
    $ngay = $thang = $nam = $thu = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $ngay = isset($_POST['ngay']) ? (int)$_POST['ngay'] : 0;
        $thang = isset($_POST['thang']) ? (int)$_POST['thang'] : 0;
        $nam = isset($_POST['nam']) ? (int)$_POST['nam'] : 0;

        
        if (checkdate($thang, $ngay, $nam)) {
            
            $jd = cal_to_jd(CAL_GREGORIAN, $thang, $ngay, $nam);
            
            $day = jddayofweek($jd, 0);

          
            switch ($day) {
                case 0:
                    $thu = "Chủ Nhật";
                    break;
                case 1:
                    $thu = "Thứ Hai";
                    break;
                case 2:
                    $thu = "Thứ Ba";
                    break;
                case 3:
                    $thu = "Thứ Tư";
                    break;
                case 4:
                    $thu = "Thứ Năm";
                    break;
                case 5:
                    $thu = "Thứ Sáu";
                    break;
                case 6:
                    $thu = "Thứ Bảy";
                    break;
            }
        } else {
            $thu = "Ngày không hợp lệ!";
        }
    }
    ?>

    <div class="container">
        <h2>Tìm Thứ Trong Tuần</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label for="ngay">Ngày/tháng/năm:</label></td>
                    <td><input type="text" id="ngay" name="ngay" value="<?php echo $ngay; ?>" size="5"> / <input type="text" id="thang" name="thang" value="<?php echo $thang; ?>" size="5"> / <input type="text" id="nam" name="nam" value="<?php echo $nam; ?>" size="5"></td>
                    <td><input type="submit" value="Tìm thứ trong tuần"></td>
                </tr>
                <tr >
                    <div id="footer">
                    <td colspan="2" >
                        <input type="text" id="result" name="thu" value="<?php echo "Ngày $ngay tháng $thang năm $nam là ngày $thu"; ?>" readonly>
                    </td>
                    </div>
                </tr>
            </table>
            
        </form>
    </div>
</body>
</html>
