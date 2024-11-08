<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CẠNH HUYỀN TAM GIÁC VUÔNG</title>
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
        input[type="text"][name="canhhuyen"] {
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
    $canha=$canhb=$canhhuyen='';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $canha = $_POST['canha'];
        $canhb = $_POST['canhb'];
        $canhhuyen = sqrt($canha * $canha + $canhb * $canhb);
    }
    ?>
    <div class="container">
    <h2>CẠNH HUYỀN TAM GIÁC VUÔNG</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
        <tr>
            <td><label for="canha">Cạnh A:</label></td>
            <td><input type="text" id="canha" name="canha" value="<?php echo $canha; ?>"></td>
        </tr>
        <tr>
            <td><label for="canhb">Cạnh B:</label></td>
            <td><input type="text" id="canhb" name="canhb" value="<?php echo $canhb; ?>"></td>
        </tr>
        <tr>
            <td><label for="canhhuyen">Cạnh huyền:</label></td>
            <td><input type="text" id="canhhuyen" name="canhhuyen" value="<?php echo $canhhuyen; ?>" readonly></td>
        </tr>
    </table>

        <input type="submit" value="Tính">
    </form>
    </div>
    
</body>
</html>

