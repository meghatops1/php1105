<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name ="Megha patel";
    $name= addcslashes($name," ");
    echo $name;
    echo "<pre>";
    $fruit = "apple,mango,kiwi";
    $array=explode(",",$fruit);
    print_r($array);
    echo "<hr>";
    echo implode(",",$array);
    echo "<hr>";
    $str= "tops tech";
    echo $str1=base64_encode($str);
    echo "<hr>";
    echo base64_decode($str1);
    echo "<hr>";
    echo  md5($str);
    ?>
</body>
</html>