<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = "hello world";
$b = 50;
$c = 50.23;
$d = true;
$e = array("HTML","CSS","JS");
$a ="Hello India";




echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo $d;
echo "<br>";
echo $e[1];
echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
//define the contanst variable like this  :-
define("test",50);
echo test+20-50  ;
echo "<br>";
///---------------------------------------------------------///

$num_number1 = 10;
$num_number2 = 20;
$num_number3 = $num_number1+$num_number2;
echo "The some two numbers is :- ";
echo "";
echo "";
echo $num_number3;
echo "<br>";

$sub_number1 = 50;
$sub_number2 = 20;
$sub_number3 = $sub_number1+$sub_number2;
echo "The substract of two numbers is  :- ";
echo "";
echo $sub_number3;
echo "<br>";

$mul_number1 = 20.2585;
$mul_number2 = 50.25525;
$mul_number3 = $mul_number1 * $mul_number2;
echo "The multiplication of two numbers is :- ";
echo "";
echo "";
echo $mul_number3;
echo "<br>";

$div_number1 = 50;
$div_number2 = 2;
$div_number3 = $div_number1/$div_number2;
echo "The divide of two number is  :-";
echo "";
echo "";
echo $div_number3;
echo "<br>";

$exponents_number1 = 85;
$exponents_number2 = 2.02;
$exponents_number3 = $exponents_number1**$exponents_number2;
echo "The exponets of two number is :-";
echo "";
echo "";
echo $exponents_number3;











?>
    
</body>
</html>