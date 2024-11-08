<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USCLN và BSCNN</title>
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
    </style>
</head>
<body>
    <?php
    
    function uscln($a, $b) {
        if ($b == 0) {
            return $a;
        } else {
            return uscln($b, $a % $b);
        }
    }

    
    function bscnn($a, $b) {
        return ($a * $b) / uscln($a, $b); 
    }

    $A = $B = $uscln_result = $bscnn_result = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $A = $_POST["A"];
        $B = $_POST["B"];

        $uscln_result = uscln($A, $B);
        $bscnn_result = bscnn($A, $B);
    }
    ?>
    <div class="container">
        <h2>Ước số chung lớn nhất và Bội số chung nhỏ nhất</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label for="A">Số A:</label></td>
                    <td><input type="text" id="A" name="A" value="<?php echo $A; ?>"></td>
                </tr>
                <tr>
                    <td><label for="B">Số B:</label></td>
                    <td><input type="text" id="B" name="B" value="<?php echo $B; ?>"></td>
                </tr>
                <tr>
                    <td><label for="uscln">USCLN:</label></td>
                    <td><input type="text" id="uscln" name="uscln" value="<?php echo $uscln_result; ?>" readonly></td>
                </tr>
                <tr>
                    <td><label for="bscnn">BSCNN:</label></td>
                    <td><input type="text" id="bscnn" name="bscnn" value="<?php echo $bscnn_result; ?>" readonly></td>
                </tr>
            </table>
            <input type="submit" value="Tìm USCLN và BSCNN">
        </form>
    </div>
</body>
</html>
