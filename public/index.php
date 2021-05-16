<?php

include "../vendor/autoload.php";
// include "../vendor/wtdemo1/Comentsrc.php";

use Wtdemo1\Coment;
use Wtdemo2\Comentsrc;

$Comentsrc = new Comentsrc;
$Comentsrc->comentIndex();


$Coment = new Coment;
$Coment->comentIndex();

