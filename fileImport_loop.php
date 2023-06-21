<html>
<header>file export</header>
<body>
<?php
$fp = fopen("test.txt", "r");

while( !feof($fp) ){
  $str = fgets($fp);

  echo $str;
  echo "<br>";
}

fclose($fp);
?>
</body>
</html>
