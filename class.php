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
    private $oil;

    function Run() {
      $this->oil--;
    }

    function setOil($data) {
      $this->oil = $data;
    }

    function getOil() {
      echo ($this->oil);
    }


  }

  class Truck extends Car{
    public $loadage;

    function Load() {
      //something
    }

    function UnLoad() {
      //something
    }
  }

  $car1 = new Car();
  $car1->color = "blue";
  $car1->tank_capacity = 50;

  $car1->setOil(5);
  $car1->Run();
  $car1->getOil();

?>
</body>
</html>
