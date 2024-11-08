<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm năm nhuận</title>
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
       $result = $nam = "";

        function nam_nhuan($nam) {
            return ($nam % 400 == 0) || ($nam % 4 == 0 && $nam % 100 != 0);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nam = (int)$_POST['nam'];
            $kq = "";
            foreach (range(2000, $nam) as $year) {
                if (nam_nhuan($year)) {
                    $kq .= $year . ", ";
                }
            }

            if ($kq != "") {
                $kq = rtrim($kq, ", "); 
                $result = "$kq là các năm nhuận.";
            } else {
                $result = "Không có năm nhuận.";
            }
        }
    
    ?>
   
    <div class="container">
        <h2>Tìm năm nhuận</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Năm:</label></td>
                    <td><input type="text" id="nam" name="nam" value="<?php echo $nam; ?>"></td>
                </tr>
                
            </table>
            <p id="result" name="result"> <?php echo $result; ?></p>
            <input type="submit" value="Tìm năm nhuận">
        </form>
    </div>
</body>
</html>
