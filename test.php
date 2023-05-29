<?php
    function myFunction(){
        header("Content-type:application/pdf");

        // It will be called downloaded.pdf
        header("Content-Disposition:attachment;filename=downloaded.pdf");

       // The PDF source is in original.pdf
        readfile("one.pdf");
    }
    if(isset($_REQUEST['submit'])){
        //myFunction();
       // header("Location:array.php");
       header("Refresh");
    }

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
    <form method="post">
        <input type="text" name="name" id="">
        <input type="submit" name="submit">
    </form>
</body>
</html>