<html>
<header>
<title>class</title>
</header>
<body>
<h1>CLASS</h1>
<?php
  class Car {
    public $color;
    public $tank_capacity;
    public $oil;

    function Run() {
      $this->oil--;
    }
  }

  $car1 = new Car();
  $car1->color = "blue";
  $car1->tank_capacity = 50;
  $car1->oil = 5;

  $car1->Run();

  echo ($car1->oil);
?>
</body>
</html>
