<?php
class TestClass {
    public $var1 = 'value1';
    private $var2 = 'value2';

    public function method1() {
        echo "This is method 1";
    }

    private function method2() {
        echo "This is method 2";
    }
}
$classes = get_declared_classes();
echo "Classes: ";
print_r($classes);
$methods = get_class_methods('TestClass');
echo "\nMethods of TestClass: ";
print_r($methods);
$vars = get_class_vars('TestClass');
echo "\nVars of TestClass: ";
print_r($vars);
?>
