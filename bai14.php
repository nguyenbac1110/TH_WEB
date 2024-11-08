<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Năm Âm Lịch</title>
    <style>
        body {
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            background-color: #d0ebff;
            width: 600px;
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
        #chuyen{
            background-color: #fffdcc;
            color: red;
        }
    </style>
</head>
<body>

<?php
        $nam_duong_lich = $nam_am_lich = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['nam_duong_lich'])) {
                $nam_duong_lich = (int)$_POST['nam_duong_lich'];
            }

    $so_du_can = ($nam_duong_lich - 3) % 10;
    switch ($so_du_can) {
        case 0: $can = "Quý"; break;
        case 1: $can = "Giáp"; break;
        case 2: $can = "Ất"; break;
        case 3: $can = "Bính"; break;
        case 4: $can = "Đinh"; break;
        case 5: $can = "Mậu"; break;
        case 6: $can = "Kỷ"; break;
        case 7: $can = "Canh"; break;
        case 8: $can = "Tân"; break;
        case 9: $can = "Nhâm"; break;
    }

    
    $so_du_chi = ($nam_duong_lich - 3) % 12;
    switch ($so_du_chi) {
        case 0: $chi = "Hợi"; break;
        case 1: $chi = "Tý"; break;
        case 2: $chi = "Sửu"; break;
        case 3: $chi = "Dần"; break;
        case 4: $chi = "Mão"; break;
        case 5: $chi = "Thìn"; break;
        case 6: $chi = "Tỵ"; break;
        case 7: $chi = "Ngọ"; break;
        case 8: $chi = "Mùi"; break;
        case 9: $chi = "Thân"; break;
        case 10: $chi = "Dậu"; break;
        case 11: $chi = "Tuất"; break;
    }

    
    $nam_am_lich = $can . " " . $chi;
}
?>

<div class="container">
    <h2>Tính Năm Âm Lịch</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
        <td >
          <label for="nam_duong_lich">Năm dương lịch:</label><br>
          <input type="text" id="nam_duong_lich" name="nam_duong_lich" value="<?php echo $nam_duong_lich; ?>">
        </td>
        <td>
          <input type="submit" id="chuyen" value="=>">
        </td>
        <td>
          <label for="result">Năm âm lịch:</label><br>
          <input type="text" id="result" readonly value="<?php echo $nam_am_lich; ?>">
        </td>
      </tr>   
        </table>
    </form>
</div>

</body>
</html>
