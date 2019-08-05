<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
return function (App $app) {
    $app->get('/', function (Request $request, Response $response) {
    	$url = urldecode( $request->getQueryParam('redirect') );
    	if( ! filter_var($url, FILTER_VALIDATE_URL)) {
    		throw new Exception( 'Not valid redirect URL' );
		}
    	$url = $url . '&token=123456';
    	$response->write( sprintf('<a href="%s">%s</a>', $url, 'Return to '. $url) );
    });
};
