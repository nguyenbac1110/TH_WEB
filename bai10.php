<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền Karaoke</title>
    <style type="text/css">
        body {
            padding: 20px;
            box-sizing: border-box;
        }

        .container {
            background-color: #089aa2;
            width: 500px;
            margin: 0 auto;
            text-align: center;
        }

        h2 {
            background-color: #006f78;
            color: white;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            display: block;
            margin: 0 auto;
        }

        table {
            border-collapse: separate;
            border-spacing: 50px 0;
        }

        table td {
            text-align: left;
        }

        #result {
            color: red;
        }
        #total{
            background-color: #c3ff97; 
        }
    </style>
</head>
<body>
    <?php
    $start = $end = $total = $message = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST['start'])) {
            $start = (int)$_POST['start'];
        }

        if (isset($_POST['end'])) {
            $end = (int)$_POST['end'];
        }

        
        if ($start >= $end) {
            $message = "Giờ bắt đầu phải nhỏ hơn giờ kết thúc!";
        } elseif ($start < 0 || $start > 24 || $end < 0 || $end > 24) {
            $message = "Giờ hoạt động chỉ trong khoảng 0h đến 24h!";
        } else {
            $price_before_17h = 20000; 
            $price_after_17h = 45000;
            $total = 0;

            
            if ($start <= 17 && $end <= 17) {
                $total = ($end - $start) * $price_before_17h;
            }
            
            elseif ($start >= 17) {
                $total = ($end - $start) * $price_after_17h;
            }
            
            else {
                $total = (17 - $start) * $price_before_17h + ($end - 17) * $price_after_17h;
            }
        }
    }
    ?>

    <div class="container">
        <h2>Tính tiền Karaoke</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table>
                <tr>
                    <td><label for="start">Giờ bắt đầu:</label></td>
                    <td><input type="text" id="start" name="start" value="<?php echo $start; ?>" size="5"> (h)</td>
                </tr>
                <tr>
                    <td><label for="end">Giờ kết thúc:</label></td>
                    <td><input type="text" id="end" name="end" value="<?php echo $end; ?>" size="5"> (h)</td>
                </tr>
                <tr>
                    <td><label for="total">Tiền thanh toán:</label></td>
                    <td><input type="text" id="total" readonly value="<?php echo $total ? $total : ''; ?>"> (VND)</td>
                </tr>
            </table>
            <div class="but">
                <input type="submit" value="Tính tiền">
            </div>
        </form>
        table>tr*3>((td>label)+(td>(input:text+span)))+input:submit
        
        <?php if ($message) { ?>
            <p id="result"><?php echo $message; ?></p>
        <?php } ?>
    </div>
</body>
</html>
