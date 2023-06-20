<html>
<header>file export</header>
<body>
<?php

$str = file_get_contents("test.txt");

echo $str;

echo "<br>";
$fp = fopen("test.txt", "r");

$text = fgets($fp);
$text2 = fgets($fp);
$text3 = fgets($fp);
$text4 = fgets($fp);

echo $text;
echo "<br>";
echo $text2;
echo "<br>";
echo $text3;
echo "<br>";
echo $text4;
?>
</body>
</html>
