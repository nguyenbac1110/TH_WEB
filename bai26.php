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
    </style>
</head>
<body>
    <?php
        $chuoithunhat=$chuoithuhai=$result="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chuoithunhat = $_POST['chuoithunhat'];
        $chuoithuhai = $_POST['chuoithuhai'];

        $kq = strcasecmp($chuoithunhat, $chuoithuhai);

        if ($kq == 0) {
            $result = "Hai chuỗi giống nhau.";
        } elseif ($kq > 0) {
            $result = "Chuỗi thứ nhất dài hơn chuỗi thứ hai.";
        } else {
            $result = "Chuỗi thứ nhất ngắn hơn chuỗi thứ hai.";
        }
    }
    ?>
   
    <div class="container">
        <h2>So sánh chuỗi</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Chuỗi thứ nhất:</label></td>
                    <td><input type="text" id="chuoithunhat" name="chuoithunhat" value="<?php echo $chuoithunhat; ?>"></td>
                </tr>
                <tr>
                    <td><label>Từ thứ hai:</label></td>
                    <td><input type="text" id="chuoithuhai" name="chuoithuhai" value="<?php echo $chuoithunhat; ?>"></td>
                </tr>
            </table>
            <input type="submit" value="Thay thế">
            <input type="text" id="result" name="result" value="<?php echo $result; ?>" readonly>  
        </form>
    </div>
</body>
</html>
