<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Ngày Trong Tháng</title>
    <style>
        body {
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            background-color: #f2ccd9;
            width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        h2 {
            background-color: #cc3467;
            color: white;
            margin-bottom: 20px;
        }

        table {
            margin: 0 auto;
        }

        #ngay{
            background-color: #fffdcc;
            color: red;
            width: 200px;
        }

        input[type="submit"] {
            display: block;
            margin: 10px auto;
        }
       
    </style>
</head>
<body>

<?php
       $thang = $nam =''; 
       if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
        $thang = $_POST['thang'];
        $nam = $_POST['nam'];
        switch ($thang) {
        case 1: 
        case 3: 
        case 5: 
        case 7: 
        case 8: 
        case 10: 
        case 12: 
            $ngay = 31;
            break;
        case 4: 
        case 6: 
        case 9: 
        case 11: 
            $ngay = 30;
            break;

        case 2: 
            if ($nam % 400 == 0 || ($nam % 4 == 0 && $nam % 100 != 0)) {
                $ngay = 29; 
            } else {
                $ngay = 28; 
            }
            break;

        default:
            $ngay = 'Không hợp lệ'; 
            break;
    }
}
       
?>

<div class="container">
    <h2>Tính Ngày Trong Tháng</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
        <td >
          <label for="">Tháng/năm:</label>
          <input type="number" id="thang" name="thang" value="<?php echo $thang; ?>">/
          <input type="number" id="nam" name="nam" value="<?php echo $nam; ?>">
        </td>
      </tr>   
        </table>
        <input type="submit" name="submit" value="Tính số ngày">
        <input type="text" name="ngay" id="ngay" value="<?php echo isset($ngay) ? "Tháng $thang Năm $nam có $ngay ngày" : ''; ?>">
    </form>
</div>

</body>
</html>
