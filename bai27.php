<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>So sánh chuỗi</title>
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
            width: 250px;
        }
        #ho,
        #tendem,
        #ten{
            background-color: #d0fcff;
        }
    </style>
</head>
<body>
    <?php
        $hoten=$ho=$tendem=$ten=$result="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hoten = trim($_POST["hoten"]);
            $mang = explode(" ", $hoten);
            $ho = $mang[0];
            $ten = $mang[count($mang) - 1];
            for ($i = 1; $i < count($mang) - 1; $i++) {
                $tendem .= $mang[$i] . " ";
            }
            $tendem = trim($tendem); 
        }
    ?>
   
    <div class="container">
        <h2>Tách họ và tên</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Họ và tên:</label></td>
                    <td><input type="text" id="hoten" name="hoten" value="<?php echo $hoten; ?>"></td>
                </tr>
                <tr>
                    <td><label>Họ:</label></td>
                    <td><input type="text" id="ho" name="ho" value="<?php echo $ho; ?>" readonly></td>
                </tr>
                <tr>
                    <td><label>Tên đệm:</label></td>
                    <td><input type="text" id="tendem" name="tendem" value="<?php echo $tendem; ?>" readonly></td>
                </tr>
                <tr>
                    <td><label>Tên:</label></td>
                    <td><input type="text" id="ten" name="ten" value="<?php echo $ten; ?>" readonly></td>
                </tr>
            </table>
            <input type="submit" value="Tách Họ Tên">
        </form>
    </div>
</body>
</html>
