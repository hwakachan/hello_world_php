<html>
<body>
<h1>csv export</h1>
<?php
$fp = fopen("csv2.csv", "a");

fwrite($fp, "111,222,333,444\n");

$data = array("aaa", "bbb", "ccc", "ddd");

fputcsv($fp, $data);

fclose($fp);
?>
</body>
</html>
