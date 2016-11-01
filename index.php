<?php

require __DIR__ . '/vendor/autoload.php';

use \ParagonIE\CSPBuilder\CSPBuilder;

$pathToCspJson = __DIR__ . '/config/csp.json';
$csp = CSPBuilder::fromFile($pathToCspJson);

$csp->sendCSPHeader();

print_r('Fim do script');
