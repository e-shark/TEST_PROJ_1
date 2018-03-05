<?php
namespace user\ns2;
require("Script1.php");
use user\ns1\MyClass;

echo "Hello World Now!"."\n";

$x = new MyClass();

$x->Add(7);

echo $x->Get()."\n";

$x->Say();
?>