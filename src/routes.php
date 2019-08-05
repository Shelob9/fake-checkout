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
    	$token = is_string( $request->getQueryParam('token')) ?  $request->getQueryParam('token') : '12345';
    	$url = $url . '&token=' . $token;
    	$response->write( sprintf('<a href="%s">%s</a>', $url, 'Return to '. $url) );
    });
};
