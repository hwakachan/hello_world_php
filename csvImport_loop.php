<html>
<head>
  <title>csv import loop</title>
</head>
<body>
<?php
$fp = fopen("csvl.csv", "r");

while($data = fgetcsv($fp)){
 print_r($data); 
  echo "<br>";
}

fclose($fp);
?>
</body>

</html>
