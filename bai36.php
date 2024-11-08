<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay the trong mang</title>
    <style type="text/css">
        body {
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
            background-color: #FFCCFF;
            width: 600px;
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
        table {
            border-collapse: separate;
            border-spacing: 10px 0;
            margin: 0 auto;
        }
        input[type="text"] {
            width: 300px;
        }
    </style>
</head>
<body>
    <?php
        $mangcu = $mangmoi = $mangnhap = $giatricanthay = $giatrithaythe = "";

        function thaythe($mang, $cu, $moi) {
            for ($i = 0; $i < count($mang); $i++) {
                if ($mang[$i] == $cu) {
                    $mang[$i] = $moi;
                }
            }
            return $mang;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mangnhap = $_POST['mangnhap'];
            $giatricanthay = $_POST['giatricanthay'];
            $giatrithaythe = $_POST['giatrithaythe'];

            $mang = explode(",", str_replace(' ', '', $mangnhap));
            $mangcu = implode(" ", $mang); 

            $mangthaythe = thaythe($mang, $giatricanthay, $giatrithaythe);
            $mangmoi = implode(" ", $mangthaythe); 
        }
    ?>

    <div class="container">
        <h2>Thay the trong mang</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Nhap cac phan tu:</label></td>
                    <td><input type="text" name="mangnhap" value="<?php echo $mangnhap; ?>"></td>
                </tr>
                <tr>
                    <td><label>Gia tri can thay the:</label></td>
                    <td><input type="text" name="giatricanthay" value="<?php echo $giatricanthay; ?>"></td>
                </tr>
                <tr>
                    <td><label>Gia tri thay the:</label></td>
                    <td><input type="text" name="giatrithaythe" value="<?php echo $giatrithaythe; ?>"></td>
                </tr>
            </table>
            <input type="submit" value="Thay the">
            <table>
                <tr>
                    <td><label>Mang cu:</label></td>
                    <td><input type="text" readonly value="<?php echo $mangcu; ?>" readonly></td>
                </tr>
                <tr>
                    <td><label>Mang sau khi thay the:</label></td>
                    <td><input type="text" readonly value="<?php echo $mangmoi; ?>" readonly></td>
                </tr>
            </table>
        </form>
        <p><strong>Ghi chu:</strong> Cac phan tu trong mang se cach nhau bang dau ","</p>
    </div>
</body>
</html>
