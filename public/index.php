<?php

require '../vendor/autoload.php';

use StockQuote\ServerFactory;

$soapServer = ServerFactory::make();
$soapServer->handle();

