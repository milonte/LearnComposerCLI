<?php

require __DIR__ . '/../vendor/autoload.php';

use HelloWorld\SayHello;

$hello = new HelloWorld\SayHello();
echo $hello->world();

echo SayHello::world();
