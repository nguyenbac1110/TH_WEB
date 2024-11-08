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
    $nam_duong_lich = "";
    $nam_am_lich = "";
    $hinh_anh = "";

    $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
    $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
    $mang_hinh = array("hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.gif", "ran.jpg", "ngo.jpg", "mui.jpg", "than.gif", "dau.jpg", "tuat.jpg");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nam_duong_lich = (int)$_POST['nam_duong_lich'];

        $nam = $nam_duong_lich - 3;
        $can = $nam % 10;
        $chi = $nam % 12;

        $nam_am_lich = $mang_can[$can] . " " . $mang_chi[$chi];
        $hinh = $mang_hinh[$chi];
        $hinh_anh = "<img src='Image/$hinh' alt='$nam_am_lich'>";
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
    <div class="image-container">
        <?php echo $hinh_anh; ?>
    </div>
</div>

</body>
</html>
