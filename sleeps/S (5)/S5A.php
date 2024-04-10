<?php
abstract class Shape {
    abstract protected function area();
    abstract protected function volume();
}
class Rectangle extends Shape {
    private $length;
    private $breadth;
    public function __construct($length, $breadth) {
        $this->length = $length;
        $this->breadth = $breadth;
    }
    public function area() {
        return $this->length * $this->breadth;
    }
    public function volume() {
             return 0;
    }
}
class Circle extends Shape {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function area() {
        return 3.14 * $this->radius*$this->radius;
    }
    public function volume() {
             return 0;
    }
}
class Cylinder extends Shape {
    private $radius;
    private $height;
    public function __construct($radius, $height) {
        $this->radius = $radius;
        $this->height = $height;
    }
    public function area() {
        return 2 * 3.14 * $this->radius * ($this->radius + $this->height);
    }

    public function volume() {
        return 3.14 * ($this->radius*$this->radius) * $this->height;
    }
}
$rectangle = new Rectangle(5, 3);
echo "Rectangle area: " . $rectangle->area() . "<br>";

$circle = new Circle(4);
echo "Circle area: " . $circle->area() . "<br>";

$cylinder = new Cylinder(4, 10);
echo "Cylinder area: " . $cylinder->area() . "<br>";
echo "Cylinder volume: " . $cylinder->volume() . "<br>";
?>
