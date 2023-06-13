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

</body>
</html>
