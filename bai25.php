<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm từ trong chuỗi</title>
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
    </style>
</head>
<body>
    <?php
    $chuoi = $tucantim = $result = '';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chuoi = $_POST['chuoi'];
        $tucantim = $_POST['tucantim'];

        $kq = strpos($chuoi, $tucantim);
        if ($kq !== false) {
            $result = "Tìm thấy từ '$tucantim' trong chuỗi tại vị trí số " . $kq . ".";
        } else {
            $result = "Không tìm thấy từ '$tucantim' trong chuỗi.";
        }
    }
    ?>
   
    <div class="container">
        <h2>Tìm từ trong chuỗi</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Chuỗi:</label></td>
                    <td><input type="text" id="chuoi" name="chuoi" value="<?php echo $chuoi; ?>"></td>
                </tr>
                <tr>
                    <td><label>Từ cần tìm:</label></td>
                    <td><input type="text" id="tucantim" name="tucantim" value="<?php echo $tucantim; ?>"></td>
                </tr>
            </table>
            <input type="submit" value="Thay thế">
            <input type="text" id="result" name="result" value="<?php echo $result; ?>" readonly>  
        </form>
    </div>
</body>
</html>
