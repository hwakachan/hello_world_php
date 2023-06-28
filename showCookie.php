<html>
<head>
  <meta charset="utf-8">
  <title>show cookie</title>
</head>
<body>
  <h1>show cookie</h1>

  <?php
    echo $_COOKIE["count"];

    print_r($_COOKIE);

    $data = $_COOKIE["count"] +1;

    setcookie("count", $data);
  ?>
</body>
</html>
