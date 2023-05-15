<?php
$a=11;
$b=20;

$GLOBALS['a']=20;

if($a >10 || $b>10){
    echo "both are eqaul";
}
else{
    echo "diff";
}
echo $GLOBALS['a'];
echo "<br>";

echo $_SERVER['PHP_SELF'];


?>