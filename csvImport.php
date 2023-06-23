<html>

<head>
  <title>csv import</title>
</head>
<body>
<?php

$fp = fopen("csvl.csv", "r");

$data = fgetcsv($fp);
print_r($data);

echo "<br>"; 

echo $data[0];
fclose($fp);

?>
</body>

</html>
