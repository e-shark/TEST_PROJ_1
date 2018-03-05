<?php
namespace user\ns2;
require("Script1.php");
use user\ns1\MyClass;

echo "Hello World!"."\n";

$x = new MyClass();

$x->Add(5);
$x->Add(3);

echo $x->Get()."\n";

?>