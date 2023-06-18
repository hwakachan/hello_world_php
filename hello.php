<html>
<head>
	<meta charset="utf-8"
	<title>Sample3</title>
</head>
<body>
	<h1>サンプルです。</h1>

<?php
  
  $box1 = "waka";
  $box2 = 100 - 50;
  
  echo "hello PHP!";
  echo "<br>";
  echo "I'm waka";

  echo "<br>";

  echo $box1;
  echo "<br>";
  echo $box2."<br>";

  $box2++;
  echo $box2."<br>";

  echo PHP_INT_MAX;
  //PHPの出力命令
  $box3 = "test";

  echo $box3;
  print $box3;
  print_r($box3);//show array
  var_dump($box3);// show array detail
  
  echo "<br>";

  $box4 = array("test1", "test2");
  
  print_r($box4[0]);
  
?>

</body>
</html>
