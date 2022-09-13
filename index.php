 <?php
header("Content-Type: text/plain; charset=utf-8");

require_once 'autoloader.php';

// $obj = new \Hillel\ValueObject(0, 33, 33);
// $obj1 = new \Hillel\ValueObject(35, 43, 53);
// $objR = new \Hillel\ValueObject();
// $objS = new \Hillel\ValueObject();

// echo "Red = " . $obj->getRed() . "\n";
// echo "Green = " . $obj->getGreen() . "\n";
// echo "Blue = " . $obj->getBlue() . "\n";

// //equals
// echo "obj equals = ";
// var_dump($obj->equalsRgb());
// echo "\n";

// //mix + randomRgb
// $obj2 = $obj->mixRgb($obj1);
// var_dump($obj, $obj1, $objR, $obj2, $obj::randomRgb($objS));


 $objCurrency1 = new \Hillel\Currency("usd");
 $objCurrency2 = new \Hillel\Currency("usd");
 $objEquals = $objCurrency1->equalsIsoCode($objCurrency2);
 var_dump($objCurrency1, $objCurrency2, $objEquals);

 $objMoney1 = new \Hillel\Money(34, $objCurrency1->getIsoCode());
 $objMoney2 = new \Hillel\Money(14, $objCurrency2->getIsoCode());
 $objEqualsMoney = $objMoney1->equalsAmount($objMoney2);
 $objMonet12 = $objMoney1->addAmount($objMoney2);
 var_dump($objMoney1, $objMoney2, $objEqualsMoney, $objMonet12);