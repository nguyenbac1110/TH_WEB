<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính ngày trong tháng</title>
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
            width: 350px;
        }
    </style>
</head>
<body>
    <?php
        function nam_nhuan($nam) {
            return ($nam % 400 == 0 || ($nam % 4 == 0 && $nam % 100 != 0)) ? 1 : 0;
        }

        $result = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $thang = $_POST['thang'];
            $nam = $_POST['nam'];

            $d = cal_days_in_month(CAL_GREGORIAN, $thang, $nam);

            if (nam_nhuan($nam)) {
                $result = "Năm $nam là năm nhuận và Tháng $thang năm $nam có $d ngày";
            } else {
                $result = "Tháng $thang năm $nam có $d ngày";
            }
        }
    ?>
   
    <div class="container">
        <h2>Tính ngày trong tháng</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Tháng/Năm:</label></td>
                    <td><input type="number" id="thang" name="thang" value="<?php echo $thang; ?>">/
                        <input type="number" id="nam" name="nam" value="<?php echo $nam; ?>">
                    </td>
                </tr>
                
            </table>
            <input type="submit" value="Tính số ngày">
            <input type="text" id="result" name="result" value="<?php echo $result; ?>" readonly>  
        </form>
    </div>
</body>
</html>
