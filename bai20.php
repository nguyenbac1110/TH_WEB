<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Số chia hết cho A và B</title>
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
   
    function kt_so($so, $a, $b) {
        if ($so % $a == 0 && $so % $b == 0) {
            return 1; 
        } else {
            return 0;
        }
    }

    $N = $A = $B = $result = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $N = $_POST["N"];
        $A = $_POST["A"];
        $B = $_POST["B"];
        $result = '';

        
        for ($i = 1; $i <= $N; $i++) {
            if (kt_so($i, $A, $B) == 1) {
                $result .= $i . ' '; 
            }
        }
    }
    ?>
    <div class="container">
        <h2>Số chia hết cho A và B</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label for="N">Nhập N:</label></td>
                    <td><input type="text" id="N" name="N" value="<?php echo $N; ?>"></td>
                </tr>
                <tr>
                    <td><label for="A">Nhập A:</label></td>
                    <td><input type="text" id="A" name="A" value="<?php echo $A; ?>"></td>
                </tr>
                <tr>
                    <td><label for="B">Nhập B:</label></td>
                    <td><input type="text" id="B" name="B" value="<?php echo $B; ?>"></td>
                </tr>
               
            </table>
            <input type="submit" value="Các số <= N chia hết cho A và B:">
            <input type="text" id="result" name="result" value="<?php echo $result; ?>" readonly>  
        </form>
    </div>
</body>
</html>
