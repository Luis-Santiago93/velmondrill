<?php

$client = new http\Client;
$request = new http\Client\Request;

$request->setRequestUrl('https://curp-renapo.p.rapidapi.com/v1/curp/SAPL931010HTCNRS08');
$request->setRequestMethod('GET');

$request->setHeaders(array(
    'x-rapidapi-host' => 'curp-renapo.p.rapidapi.com',
    'x-rapidapi-key' => 'api-key'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();