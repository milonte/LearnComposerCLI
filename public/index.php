<?php

require __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Oui;

$hello = new Oui();
echo $hello->world();

use HelloWorld\SayHello;
echo SayHello::world();
