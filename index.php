<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$vinDiesel = new Cow('LA FAMILLE');
$vinDiesel->setTongue('U');

// or just echo the object for direct output
echo $vinDiesel;
