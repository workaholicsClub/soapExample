<?php

$wsdlFullPath = realpath('./stockquote.wsdl');

$soapClient = new SoapClient($wsdlFullPath);
$wsdlFunctionName = 'GetOrder';

$requestParams = [
    'DocumentNumber' => '1234567890',
];

$response = $soapClient->__call($wsdlFunctionName, $requestParams);
