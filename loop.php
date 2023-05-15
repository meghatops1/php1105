<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Type of loop
    </h1>
    <h2>For</h2>
    <h2>while</h2>
    <h2>Do while</h2>


<h1>Fibonacciseries</h1>
<?php
$x1=0;
$x2=1;
for($i=1;$i<=10;$i++){
    $ans=$x1+$x2;
    echo $ans .",";
    $x1=$x2;
    $x2=$ans;
}
?>
<h1>isArmstrong</h1>
<?php
    $num=121434;
    $num1=$num;
    $rev=0;
    echo " number=".$num1."<br>";
    while($num != 0){
        $rem=$num%10;
        echo $rem."<br>";
        $num=intval($num/10);
        $rev= $rev*10+$rem;
    }
    echo "rev number=".$rev;
    if($num1==$rev){
        echo "<h1>Number is Armstrong</h1>";
    }
    else{
        echo "<h1>Number not Armstrong</h1>";
    }


?>

</body>
</html>