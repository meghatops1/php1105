<?php
$fruit = ["apple","banana","mango"];

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
    <h1>fruit List</h1>
    <ul>
        <?php
        foreach($fruit as $key){
            ?>
            <li><?php echo $key?></li>
            <?php
        }
        ?>
    </ul>
</body>
</html>