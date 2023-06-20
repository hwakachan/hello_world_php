<html>
<header>file export</header>
<body>
<?php

//$fp = fopen("test.txt", "w");
$fp = fopen("test.txt", "a");

//fwrite($fp, "this is test");
fwrite($fp, "this \nis \ntest");

fclose($fp);
?>
</body>
</html>
