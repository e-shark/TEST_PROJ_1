<?php
namespace user\ns2;
require("Script1.php");
use user\ns1\MyClass;

$x = new MyClass();

$x->Add(7);
$x->Add(1);

echo $x->Get()."\n";

$x->Say();
?>