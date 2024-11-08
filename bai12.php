<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc số</title>
    <style>
        body {
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            background-color: #d0ebff;
            width: 400px;
            margin: 0 auto;
            text-align: center;
        }

        h2 {
            background-color: #0174df;
            color: white;
            margin-bottom: 20px;
        }

        table {
            margin: 0 auto;
        }

        #result {
            background-color: #fffdcc;
            color: red;
        }

        input[type="submit"] {
            display: block;
            margin: 10px auto;
        }
    </style>
</head>
<body>

    <?php
    $number = $result = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST['number'])) {
            $number = (int)$_POST['number'];
        }

        
        switch ($number) {
            case 0:
                $result = "Không";
                break;
            case 1:
                $result = "Một";
                break;
            case 2:
                $result = "Hai";
                break;
            case 3:
                $result = "Ba";
                break;
            case 4:
                $result = "Bốn";
                break;
            case 5:
                $result = "Năm";
                break;
            case 6:
                $result = "Sáu";
                break;
            case 7:
                $result = "Bảy";
                break;
            case 8:
                $result = "Tám";
                break;
            case 9:
                $result = "Chín";
                break;
            default:
                $result = "Số không hợp lệ";
        }
    }
    ?>

   <div class="container">
  <h2 >ĐỌC SỐ</h2>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table>
      <tr>
        <td >
          <label for="number">Nhập số (0-9):</label><br>
          <input type="text" id="number" name="number" value="<?php echo $number; ?>">
        </td>
        <td>
          <input type="submit" value="=>">
        </td>
        <td>
          <label for="result">Bằng chữ:</label><br>
          <input type="text" id="result" readonly value="<?php echo $result; ?>" >
        </td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
