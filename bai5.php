<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm số lớn hơn</title>
    <style type="text/css">
        body {
            padding: 20px;
            box-sizing: border-box;
        }
        .container{
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
        input[type="text"][name="solonhon"] {
            background-color: #FFFAFA;
        }
        table {
            border-collapse: separate;
            border-spacing: 50px 0;
        }
        
    </style>
</head>
<body>
    <?php
    $soa=$sob=$solonhon='';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $soa = $_POST['soa'];
        $sob = $_POST['sob'];
        $solonhon = ($soa > $sob) ? $soa : $sob;
    }
    ?>
    <div class="container">
    <h2>Tìm số lớn hơn</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
        <tr>
            <td><label for="soa">Số A:</label></td>
            <td><input type="text" id="soa" name="soa" value="<?php echo $soa; ?>"></td>
        </tr>
        <tr>
            <td><label for="sob">Số B:</label></td>
            <td><input type="text" id="sob" name="sob" value="<?php echo $sob; ?>"></td>
        </tr>
        <tr>
            <td><label for="solonhon">Số lớn hơn:</label></td>
            <td><input type="text" id="solonhon" name="solonhon" value="<?php echo $solonhon; ?>" readonly></td>
        </tr>
    </table>

        <input type="submit" value="Tìm">
    </form>
    </div>
    
</body>
</html>

