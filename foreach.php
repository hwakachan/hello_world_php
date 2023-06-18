<html>
<head>
	<meta charset="utf-8"
</head>
<body>
	<h1>foreach</h1>

<?php
  
$fruits = array("orange", "apple", "grape");

foreach($fruits as $data) {
  echo $data."<br>";
}

?>

<br>

<?php

$x = array();
$y = array(1,3,5,7);
$z = array(2,4,6,8);

array_push($x, $y);
array_push($x, $z);
print_r ($x);

echo "<br>";
echo $x[0][2];
echo $x[1][3];

?>
</body>
</html>
