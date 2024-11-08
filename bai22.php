<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc hai</title>
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
            width: 350px;
        }
        table {
            border-collapse: separate;
            border-spacing: 10px 0;
        }
        input[type="number"]{
            width: 50px;
        }
    </style>
</head>
<body>
    <?php
    $a = $b = $c = $result = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        
        $a = (float)$a;
        $b = (float)$b;
        $c = (float)$c;

        
        if ($a == 0) {
            if ($b == 0) {
                if ($c == 0) {
                    $result = "Phương trình có vô số nghiệm";
                } else {
                    $result = "Phương trình vô nghiệm";
                }
            } else {
                $result = "Phương trình có một nghiệm: x = " . (-$c / $b);
            }
        }
        
        else {
            $delta = $b * $b - 4 * $a * $c;

            if ($delta < 0) {
                $result = "Phương trình vô nghiệm";
            } elseif ($delta == 0) {
                $x = -$b / (2 * $a);
                $result = "Phương trình có nghiệm kép: x1 = x2 = " . $x;
            } else {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                $result = "Phương trình có hai nghiệm phân biệt: x1 = " . $x1 . ", x2 = " . $x2;
            }
        }
    }
    ?>
    <div class="container">
        <h2>Giải phương trình bậc hai</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label for="a">Phương trình:</label></td>
                    <td><input type="number" id="a" name="a" value="<?php echo $a; ?>"> x^2 +</td> 
                    <td><input type="number" id="b" name="b" value="<?php echo $b; ?>"> x +</td>
                    <td><input type="number" id="c" name="c" value="<?php echo $c; ?>"> = 0</td>
                </tr>
                <tr>
                    <td><label for="result">Nghiệm:</label></td>
                    <td colspan="3"><input type="text" id="result" name="result" value="<?php echo $result; ?>" readonly></td>
                </tr>
            </table>
            <input type="submit" value="Giải phương trình">
        </form>
    </div>
</body>
</html>
