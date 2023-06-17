<html>
<head>
	<meta charset="utf-8"
</head>
<body>
	<h1>string function</h1>

<?php
mb_internal_encoding("utf-8");
$text = "hello";

echo strlen($text);
echo "<br>";
echo mb_substr($text, 0, 1); 
echo "<br>";
echo str_replace("he", "hellohe", $text);

//returning compiled information about the PHP
phpinfo();
?>

</body>
</html>
