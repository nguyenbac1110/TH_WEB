<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc nhất</title>
    <style type="text/css">
        body {
            padding: 20px;
            box-sizing: border-box;
        }

        .container{
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
        #result{
            color: red;
        }
    </style>
</head>
<body>
    
    <?php 
    $a = $b = $result = '';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['a'])){
            $a = (float)$_POST['a'];
        }else{
            $a = 0;
        }
         if(isset($_POST['b'])){
            $b = (float)$_POST['b'];
        }else{
            $b = 0;
        }
        if($a == 0){
            if(b==0){
                $result = 'Phương trình có vô số nghiệm';
            }else{
                $result = 'Phương trình vônghiệm';
            }
        }else{
            $x = -$b/$a;
            $result = 'x= ' . $x;
        }
    }

    ?>
    <div class="container">
        <h2>GIAI PHUONG TRINH BAC NHAT</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label for="a">Phương trình:</label></td>
                    <td>
                        <input type="text" id="a" name="a" value="<?php echo $a; ?>" size="5"> x +  
                        <input type="text" id="b" name="b" value="<?php echo $b; ?>" size="5"> = 0
                    </td>
                </tr>
                <tr>
                    <td><label for="result">Nghiệm:</label></td>
                    <td><input type="text" id="result" readonly value="<?php echo $result; ?>"></td>
                </tr>
            </table>
            <div class="but">
                <input type="submit" value="Giai phuong trinh">
            </div>
        </form>
    </div>
</body>
</html>
