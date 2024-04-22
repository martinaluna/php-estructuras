<?php
use Core\Config\Kernel;

require './src/Config/Defines.php';
require './vendor/autoload.php';

$kernel = new Kernel();

include './template/Sections/Head.php';
$kernel->run();
include './template/Sections/Footer.php';
