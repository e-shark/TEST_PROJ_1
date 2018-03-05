<?php
namespace user\ns2;
require("Script1.php");
use user\ns1\MyClass;

$x = new MyClass();

$x->Add(5);
$x->Add(3);
$x->Add(1);

echo $x->Get()."\n";

$x->Say();
?>