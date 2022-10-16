<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$marguerite = new Cow('Hello wilder you are crazy!');
$marguerite->setEyes('00')
    ->setTongue('L')
    ->setPoop('###')
    ->setUdder('M');

echo $marguerite . PHP_EOL;

