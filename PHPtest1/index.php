<?php
namespace user\ns2;
require("Script1.php");
use user\ns1\MyClass;

$x = new MyClass();

$x->Add(21);

echo $x->Get()."\n";
$x->Say();

$x->Talk();
$x->Speak();

?>
