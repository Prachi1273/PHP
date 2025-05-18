<?php
$no1 = 11;
$no2 = 51;

function acc_global_infun()
{
	global $no1;
	
	echo"Value of no1 inside function is : ".$no1."\n";
	
	print("Value of no2 inside function : ".$GLOBALS['no2']."\n");
}

function local_var()
{
	$num = 21;
	echo "Value of num is : $num \n";
}

function static_var()
{
	static $value = 10.5;
	print("Before increment value of static variable : $value \n");
	$value++;
	print("After increament value of static variable : ".$value."\n");
}

acc_global_infun();
local_var();
static_var();
static_var();

echo"value of no1 outside of all functions is : ".$no1."\n";
echo"value of no2 outside of all functions is : ".$no2."\n";
?>

/*
prachi@Prachi:~/PHP$ php variablescope.php
Value of no1 inside function is : 11
Value of no2 inside function : 51
Value of num is : 21 
Before increment value of static variable : 10.5 
After increament value of static variable : 11.5
Before increment value of static variable : 11.5 
After increament value of static variable : 12.5
value of no1 outside of all functions is : 11
value of no2 outside of all functions is : 51
prachi@Prachi:~/PHP$ 

*/
