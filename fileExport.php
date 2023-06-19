<html>
<header>file export</header>
<body>
<?php

$fp = fopen("test.txt", "w");

fwrite($fp, "this is test");

fclose($fp);
?>
</body>
</html>
