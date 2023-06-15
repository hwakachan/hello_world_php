<html>
<header>
  <h1>loop practice</h1>
</header>
<body>
<p>for loop</p>
<?php

for($i = 0; $i < 4; $i++) {
  echo $i;
  echo "<br>";
}

$answer = 0;
for($j = 1; $j  <= 100; $j++) {
  $answer = $answer + $j;
}

echo $answer;
echo "<br>";

?>
<p>while loop</p>

<?php
$k = 0;
while ($k < 4) {
  echo $k;
  echo "<br>";
  $k++;
}
?>

<p>do while</p>

<?php
$l = 0;
do{
  echo $l;
  echo "<br>";
  $l++;

} while($l < 3)
?>

</body>
</html>
