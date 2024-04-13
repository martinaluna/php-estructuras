<?php

require './src/Config/Defines.php';
require './vendor/autoload.php';

use Core\Config\Kernel;

$kernel = new Kernel();

echo $kernel->run();
