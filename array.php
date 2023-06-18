<html>
<head>
	<meta charset="utf-8"
</head>
<body>
	<h1>array</h1>

<?php
  
$x = array("grape", "orange");
print_r($x);

echo "<br>";

$x[] = "apple";
print_r($x);
echo "<br>";

var_dump($x);
echo "<br>";

echo $x[0];

array_push($x, "banana");//add element to array
print_r($x);

echo "<br>";

array_pop($x);//delete element to array

echo "<br>";

$number = array(250, 300, 200);
$sum = array_sum($number);
$count = count($number);

echo $count."<br>";
echo $sum;

sort($x);
var_dump($x);
?>
</body>
</html>
