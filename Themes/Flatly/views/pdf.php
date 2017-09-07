<?php

use JonnyW\PhantomJs\Client;

$client = Client::getInstance();

/**
 * @see JonnyW\PhantomJs\Http\PdfRequest
 **/
$request = $client->getMessageFactory()->createPdfRequest('http://google.fr', 'GET');
$request->setOutputFile('/path/to/save/pdf/document.pdf');
$request->setFormat('A4');
$request->setOrientation('landscape');
$request->setMargin('1cm');

/**
 * @see JonnyW\PhantomJs\Http\Response
 **/
$response = $client->getMessageFactory()->createResponse();

// Send the request
$client->send($request, $response);
