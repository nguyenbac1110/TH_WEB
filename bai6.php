<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào theo giờ</title>
    <style type="text/css">
        body {
            padding: 20px;
            box-sizing: border-box;
        }

        .container{
            background-color: #c6edec;
            width: 500px;
            margin: 0 auto;
             text-align: center;
        }
        h2 {
            background-color: #9ec8fe;
            color: #0616d3;
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
        .but{
        background-color: #9ec8fe;
        }
    </style>
</head>
<body>
    <?php
    $nhapgio=$loichao='';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nhapgio = $_POST['nhapgio'];
        $gio = explode(':', $nhapgio)[0];
        $gio = (int)$gio;
        if($gio >= 0 && $gio < 13){
            $loichao = 'Buổi sáng';
        }elseif ($gio >= 13 && $gio <19) {
            $loichao = 'Buổi chiều';
        }elseif ($gio >= 19 && $gio <24) {
            $loichao = 'Buổi tôi';
        }else{
            $loichao = 'Nhập giờ không hợp lệ!';
        }
    }
    ?>
    <div class="container">
    <h2>CHÀO THEO GIỜ</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
        <tr>
            <td><label for="nhapgio">Nhập giờ:</label></td>
            <td><input type="text" id="nhapgio" name="nhapgio" value="<?php echo $nhapgio; ?>"></td>
        </tr>
        
    </table>
        <?php if ($loichao) { ?>
            <label><?php echo $loichao; ?></label>
        <?php } ?>
        <div class="but">
            <input type="submit" value="Chào">
        </div>
        
    </form>
    </div>
    
</body>
</html>

