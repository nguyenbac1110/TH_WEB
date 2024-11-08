<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc số</title>
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
        function doc_1_so($so) {
            switch ($so) {
                case 0: return "Không";
                case 1: return "Một";
                case 2: return "Hai";
                case 3: return "Ba";
                case 4: return "Bốn";
                case 5: return "Năm";
                case 6: return "Sáu";
                case 7: return "Bảy";
                case 8: return "Tám";
                case 9: return "Chín";
            }
            return "";
        }

        function doc_so($so) {
            $tram = floor($so / 100);
            $chuc = floor(($so % 100) / 10);
            $donvi = $so % 10;

            $doc_tram = $doc_chuc = $doc_dv = "";

            if ($tram == 0 && $chuc == 0 && $donvi == 0) {
                return "Không";
            }

            if ($tram != 0) {
                $doc_tram = doc_1_so($tram) . " Trăm";
            }

            if ($chuc != 0) {
                if ($chuc == 1) {
                    $doc_chuc = "Mười";
                } else {
                    $doc_chuc = doc_1_so($chuc) . " Mươi";
                }
            } elseif ($tram != 0 && $donvi != 0) {
                $doc_chuc = "Lẻ";
            }

            if ($donvi != 0) {
                if ($donvi == 1 && $chuc > 1) {
                    $doc_dv = "Mốt";  
                } elseif ($donvi == 5 && $chuc != 0) {
                    $doc_dv = "Lăm";  
                } else {
                    $doc_dv = doc_1_so($donvi);
                }
            }

            $chu = trim($doc_tram . " " . $doc_chuc . " " . $doc_dv);
            return $chu;
        }

      
        $so = $chu = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if(isset($_POST["so"])){
            $so =  (int)$_POST["so"];
           }else{
            $so = 0;
           }
            if ($so >= 0 && $so <= 999) {
                $chu = doc_so($so);
            } else {
                $chu = "Vui lòng nhập số từ 0 đến 999";
            }
        }
        ?>
    <div class="container">
        <h2>Đọc số</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label>Nhập Số (0 -> 999):</label></td>
                    <td><input type="text" id="so" name="so" value="<?php echo $so; ?>"></td>
                    <td><input type="submit" value="Đọc Số"></td>
                </tr>
                <tr>
                    <td><label for="B">Bằng chữ:</label></td>
                    <td><input type="text" id="chu" name="chu" value="<?php echo $chu; ?>"></td>
                </tr>
                
            </table>
            
        </form>
    </div>
</body>
</html>
