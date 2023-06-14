<html>
<head>
	<meta charset="utf-8"
	<title>Sample3</title>
</head>
<body>
	<h1>if_practice</h1>

<?php
  
  $box1 = 2;
  $box2 = "aaa";

  if ($box1 == 1) {
    echo "number is 1";
  } else {
    echo "number is not 1";
  }

  echo "<br>";

  if ($box2 == "bbb") {
    echo "text is bbb";
  } else {
    echo "text is not bbb";
  }
  
  echo "<br>";

  $test = "";
  if ($test == null) {
    echo "test is blank";
  }

?>
  <br>
<?php
  $num1 = 10;
  $num2 = 10;

  if($num1 == 10 && $num2 == 10) {
    echo("same number");
  }
?>
  <br>
  <p>how to use switch</p>

<?php
  $number = 4;

  switch($number){
  case 1:
    echo ("number is 1");
    break;

  case 2:
    echo ("number is 2");
    break;

  case 3:
    echo ("number is 3");
    break;
  default:
    echo ("number is not exist");
    break;
 
  }
?>

</body>
</html>
