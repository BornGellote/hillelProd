 <?php
header("Content-Type: text/plain; charset=utf-8");

require_once('RGBClass.php');

$obj = new ValueObject(33, 33, 33);
$obj1 = new ValueObject(35, 43, 53);
$objR = new ValueObject();
$objS = new ValueObject();

echo "Red = " . $obj->getRed() . "\n";
echo "Green = " . $obj->getGreen() . "\n";
echo "Blue = " . $obj->getBlue() . "\n";

//equals
echo "obj equals = ";
var_dump($obj->equalsRgb());
echo "\n";

//mix + randomRgb
$obj2 = $obj->mixRgb($obj1);
var_dump($obj, $obj1, $objR, $obj2, $obj::randomRgb($objS));
 