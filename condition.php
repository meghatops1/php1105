<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter age</label>
        <input type="text" name="age" id="">
        <input type="submit" value="submit" name="submit">
    </form>

    <form action="" method="post">
        <h1>Form</h1>
        <label for="">Enter first value</label>
        <input type="text" name="first" id="">
        <label for="">Enter second value</label>
        <input type="text" name="second" id="">
        <label for="">Enter + - / *</label>
        <input type="text" name="choice" id="">
        <input type="submit" value="Calculate" name="calc">
    </form>
</body>
</html>
<!-- // -->
<!-- /* -->
<!-- if(condition){ -->
    <!-- //block of code -->
<!-- } -->

<?php

//if else
//else if ladder
//nested if
//switch
if(isset($_REQUEST['submit'])){
    $age=$_REQUEST['age'];
    if($age >= 18){
        echo "eligible for voting";
    }
    else{
        echo "not eligible for voting";
    }
}

//cal
if(isset($_POST['calc'])){
    $fisrt=$_POST['first'];
    $second=$_POST['second'];
    $choice= $_POST['choice'];

    switch($choice){
        case '+':
            $ans=$fisrt+$second;
            echo "<h1>addition=".$ans."</h1>";
        break;
        case '-':
            $ans=$fisrt-$second;
            echo "<h1>sub=".$ans."</h1>";
        break;    
        case '*':
            $ans=$fisrt*$second;
            echo "<h1>mul=".$ans."</h1>";
        break;    
        case '/':
            $ans=$fisrt/$second;
            echo "<h1>div=".$ans."</h1>";
        break;
        default:
            echo "Wrong choice";
        break;    
    }
}

?>