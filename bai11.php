<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dạng tam giác</title>
    <style type="text/css">
        body {
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            background-color: #fdf6d8;
            width: 500px;
            margin: 0 auto;
            text-align: center;
        }

        h2 {
            background-color: #f0c674;
            color: #c83737;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            display: block;
            margin: 0 auto;
        }

        table {
            border-collapse: separate;
            border-spacing: 50px 0;
        }

        table td {
            text-align: left;
        }

        #result {
            color: red;
        }
        #loai{
        	background-color: #fecbd0;
        	color: red;
        }
    </style>
</head>
<body>
    <?php
    $a = $b = $c = $loai = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $a = isset($_POST['a']) ? (float)$_POST['a'] : 0;
        $b = isset($_POST['b']) ? (float)$_POST['b'] : 0;
        $c = isset($_POST['c']) ? (float)$_POST['c'] : 0;

        
        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            
            if ($a == $b && $b == $c) {
                $loai = "Tam giác đều";
            } elseif ($a == $b || $b == $c || $a == $c) {
                if (pow($a, 2) + pow($b, 2) == pow($c, 2) || pow($a, 2) + pow($c, 2) == pow($b, 2) || pow($b, 2) + pow($c, 2) == pow($a, 2)) {
                    $loai = "Tam giác vuông cân";
                } else {
                    $loai = "Tam giác cân";
                }
            } elseif (pow($a, 2) + pow($b, 2) == pow($c, 2) || pow($a, 2) + pow($c, 2) == pow($b, 2) || pow($b, 2) + pow($c, 2) == pow($a, 2)) {
                $loai = "Tam giác vuông";
            } else {
                $loai = "Tam giác thường";
            }
        } else {
            $loai = "Không phải là tam giác";
        }
    }
    ?>

    <div class="container">
        <h2>Nhận Dạng Tam Giác</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label for="a">Cạnh 1 (a):</label></td>
                    <td><input type="text" id="a" name="a" value="<?php echo $a; ?>" size="5"> (cm)</td>
                </tr>
                <tr>
                    <td><label for="b">Cạnh 2 (b):</label></td>
                    <td><input type="text" id="b" name="b" value="<?php echo $b; ?>" size="5"> (cm)</td>
                </tr>
                <tr>
                    <td><label for="c">Cạnh 3 (c):</label></td>
                    <td><input type="text" id="c" name="c" value="<?php echo $c; ?>" size="5"> (cm)</td>
                </tr>
                <tr>
                    <td><label for="loai">Loại tam giác:</label></td>
                    <td><input type="text" id="loai" readonly value="<?php echo $loai; ?>"></td>
                </tr>
            </table>
            <div class="but">
                <input type="submit" value="Nhận dạng">
            </div>

        </form>
    </div>
</body>
</html>

