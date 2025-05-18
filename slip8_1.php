<?php

$a=$_POST['s1'];

$b=$_POST['s2'];

$n=$_POST['s3'];

$C=$_POST['rd'];

if($c = 1)
{
    if(preg_match("/^$b/",$a))
        echo "Large string $a starts with small string $b";
    else 
        echo"$a does not starts with $b";
}
else if($c== 2)
{
    eche "Small String as found at position", strpos($a,$b);
}
else if($c== 3)
{
    if(stracasecmp($a,$b,$n)==0)
        echo "first $n character of large string $a is same small string $b";
    else 
        echo "first $n character of large string is not same small string";
}
?>