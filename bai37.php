<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sap xep mang</title>
    <style>
        body {
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
            background-color: #E0F7FA;
            width: 600px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }
        h2 {
            color: #00796B;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            margin: 10px 0;
        }
        table {
            margin: 0 auto;
        }
        input[type="text"] {
            width: 300px;
        }
    </style>
</head>
<body>
    <?php
        $mangnhap = $mangtang = $manggiam = "";

        function hoan_vi(&$a, &$b) {
            $temp = $a;
            $a = $b;
            $b = $temp;
        }

        function sap_tang($mang) {
            for ($i = 0; $i < count($mang) - 1; $i++) {
                for ($j = $i + 1; $j < count($mang); $j++) {
                    if ($mang[$i] > $mang[$j]) {
                        hoan_vi($mang[$i], $mang[$j]);
                    }
                }
            }
            return $mang;
        }

        function sap_giam($mang) {
            for ($i = 0; $i < count($mang) - 1; $i++) {
                for ($j = $i + 1; $j < count($mang); $j++) {
                    if ($mang[$i] < $mang[$j]) {
                        hoan_vi($mang[$i], $mang[$j]);
                    }
                }
            }
            return $mang;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mangnhap = $_POST['mangnhap'];

            $mang = explode(",", str_replace(' ', '', $mangnhap));

            $mangtang = sap_tang($mang);
            $manggiam = sap_giam($mang);

            $mangtang = implode(", ", $mangtang);
            $manggiam = implode(", ", $manggiam);
        }
    ?>

    <div class="container">
        <h2>Sap xep mang</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Nhap mang:</label></td>
                    <td><input type="text" name="mangnhap" value="<?php echo $mangnhap; ?>"></td>
                </tr>
            </table>
            <input type="submit" value="Sap xep tang/giam">
            <table>
                <tr>
                    <td><label>Tang dan:</label></td>
                    <td><input type="text" readonly value="<?php echo $mangtang; ?>"></td>
                </tr>
                <tr>
                    <td><label>Giam dan:</label></td>
                    <td><input type="text" readonly value="<?php echo $manggiam; ?>"></td>
                </tr>
            </table>
        </form>
        <p><strong>(*)</strong> Cac so duoc nhap cach nhau bang dau ","</p>
    </div>
</body>
</html>
