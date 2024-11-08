<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập và tính tổng trên dãy số</title>
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
         $result = $dayso ="";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dayso = $_POST['dayso'];
            $mang = explode(",", $dayso);
            $tong = 0;
            foreach ($mang as $so) {
                $tong += (int)trim($so); 
            }
            $result = "Tổng các số trong dãy là: $tong";
        }
    
    ?>
   
    <div class="container">
        <h2>Nhập và tính tổng trên dãy số</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Nhập dãy số:</label></td>
                    <td><input type="text" id="dayso" name="dayso" value="<?php echo $dayso; ?>"></td>
                </tr>
                
            </table>
            <input type="submit" value="Tổng dãy số">
            <input type="text" id="result" name="result" value="<?php echo $result; ?>" readonly>  
        </form>
    </div>
</body>
</html>
