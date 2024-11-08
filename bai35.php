<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim kiem trong mang</title>
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
        input[type="text"][name="ket_qua"] {
            background-color: #FFFAFA;
        }
        table {
            border-collapse: separate;
            border-spacing: 10px 0;
        }
        input[type="text"] {
            width: 250px;
        }
    </style>
</head>
<body>
    <?php
        $ketqua = $mangnhap = $socantim = $ketqua="";

        function timkiem($mang, $giatri) {
            for ($i = 0; $i < count($mang); $i++) {
                if ($mang[$i] == $giatri) {
                    return $i + 1; 
                }
            }
            return -1;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mangnhap = $_POST['mangnhap'];
            $socantim = $_POST['socantim'];

            $mang = explode(",", str_replace(' ', '', $mangnhap));
            $hienthimang = implode(", ", $mang);
            $vitri = timkiem($mang, $socantim);

            if ($vitri != -1) {
                $ketqua = "Tim thay $socantim tai vi tri thu $vitri cua mang";
            } else {
                $ketqua = "Khong tim thay $socantim trong mang";
            }
        }
    ?>

    <div class="container">
        <h2>Tim kiem trong mang</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Nhap mang:</label></td>
                    <td><input type="text" name="mangnhap" value="<?php echo $mangnhap; ?>"></td>
                </tr>
                <tr>
                    <td><label>Nhap so can tim:</label></td>
                    <td><input type="text" name="socantim" value="<?php echo $socantim; ?>"></td>
                </tr>
            </table>
            <input type="submit" value="Tim kiem">
            <table>
                <tr>
                    <td><label>Mang:</label></td>
                    <td><input type="text" name="hienthimang" value="<?php echo $hienthimang; ?>"></td>
                </tr>
                <tr>
                    <td><label>Nhap so can tim:</label></td>
                    <td><input type="text" id="ketqua" name="ketqua" value="<?php echo $ketqua; ?>" readonly></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
