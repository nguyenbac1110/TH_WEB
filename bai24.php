<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thay thế từ trong chuỗi</title>
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
            width: 200px;
        }
    </style>
</head>
<body>
    <?php
    $chuoi = $tugoc = $tuthaythe = $result = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chuoi = $_POST["chuoi"];
        $tugoc = $_POST["tugoc"];
        $tuthaythe = $_POST["tuthaythe"];

        $result = str_replace($tugoc, $tuthaythe, $chuoi);
    }
    ?>
   
    <div class="container">
        <h2>Thay thế từ trong chuỗi</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Chuỗi:</label></td>
                    <td><input type="text" id="chuoi" name="chuoi" value="<?php echo $chuoi; ?>"></td>
                </tr>
                <tr>
                    <td><label>Từ gốc:</label></td>
                    <td><input type="text" id="tugoc" name="tugoc" value="<?php echo $tugoc; ?>"></td>
                </tr>
                <tr>
                    <td><label>Từ thay thế:</label></td>
                    <td><input type="text" id="tuthaythe" name="tuthaythe" value="<?php echo $tuthaythe; ?>"></td>
                </tr>
               
            </table>
            <input type="submit" value="Thay thế">
            <input type="text" id="result" name="result" value="<?php echo $result; ?>" readonly>  
        </form>
    </div>
</body>
</html>
