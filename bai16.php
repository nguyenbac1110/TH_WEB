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
            text-align: left;
        }

        #result{
            background-color: #fffdcc;
            color: red;
        }

        #in{
            width: 30px;
        }
        input[type="submit"] {
            display: block;
            margin: 10px auto;
        }
       
    </style>
</head>
<body>

<?php
    $start=$end=$tong=$tich=$tong_chan=$tong_le='';
       if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
        $start = $_POST['start'];
        $end = $_POST['end'];
        $tong = 0;
        $tich = 1;
        $tong_chan = 0;
        $tong_le = 0;

        for ($i = $start; $i <= $end; $i++) {
            $tong += $i;
            $tich *= $i;
            if ($i % 2 == 0) {
                $tong_chan += $i;
            } else {
                $tong_le += $i;
            }
        }
       }
         
?>

<div class="container">
    <h2>Tính Toán Trên Dãy Số</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
        <tr>
        <td >
          <label for="">Giới hạn của dãy số:</label>
          <label for="">Số bắt đầu:</label>
          <input type="number"  name="start" id="in" value="<?php echo $start; ?>">
          <label for="">Số kết thúc:</label>
          <input type="number"  name="end" id="in" value="<?php echo $end; ?>">
        </td>
      </tr>
      
      <tr>
          <td><label>Tổng các số: </label></td>
          <td><input type="number" name="tong" id="result" value="<?php echo $tong ?>"></td>
      </tr>
      <tr>
          <td><label>Tích các số: </label></td>
          <td><input type="number" name="tich" id="result" value="<?php echo $tich ?>"></td>
      </tr>
      <tr>
          <td><label>Tổng các số chẵn: </label></td>
          <td><input type="number" name="tong_chan" id="result" value="<?php echo $tong_chan ?>"></td>
      </tr>
      <tr>
          <td><label>Tổng các số lẻ: </label></td>
          <td><input type="number" name="tong_le" id="result" value="<?php echo $tong_le ?>"></td>
      </tr>
        </table>
        <input type="submit" name="submit" value="Tính toán">
        
    </form>
</div>

</body>
</html>
