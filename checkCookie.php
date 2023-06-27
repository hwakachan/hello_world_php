<html>
<head>
<title>check cookie</title>
</head>
<body>
<h1>check cookie</h1>
<?php
  if(isset($_COOKIE["name"])){
    echo $_COOKIE["name"];
  }else {
    echo ("cookie is not being sent"); 
  }
?>
</body>
</html>
