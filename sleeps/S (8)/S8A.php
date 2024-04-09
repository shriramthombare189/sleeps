<?php
class Shape {
    private $base;
    private $height;
    private $side;
    private $radius;
}
class Triangle extends Shape {
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }
    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}
class Square extends Shape {
    public function __construct($side) {
        $this->side = $side;
    }
    public function calculateArea() {
        return $this->side * $this->side;
    }
}
class Circle extends Shape {
   public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calculateArea() {
        return 3.14* $this->radius * $this->radius;
    }
}
$triangle = new Triangle(4, 5);
$square = new Square(3);
$circle = new Circle(2);
echo "Area of Triangle: ".$triangle->calculateArea() . "<br>";
echo "Area of Square: ".$square->calculateArea() . "<br>";
echo "Area of Circle: ".$circle->calculateArea() . "<br>";
?>
