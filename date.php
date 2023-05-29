<?php
require('array.php');
require_once('array.php');

date_default_timezone_set('Asia/Kolkata');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>time:
        <?php echo date("Y:M:d H:i:s");
        echo "<br>";
        echo time();
        ?>
    </h1>
</body>
</html>