<?php

$wsdlFullPath = realpath('./stockquote.wsdl');
$serverUrl = 'http://localhost:8081/index.php';

$soapClient = new SoapClient($wsdlFullPath, ['location' => $serverUrl]);

$wsdlFunctionName = 'GetOrder';
$requestParams = [
    'GetOrder_Req_MT' => [
        'DocumentNumber' => '1234567890',
    ],
];

$response = $soapClient->__soapCall($wsdlFunctionName, $requestParams);
print_r($response);