<?php

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

$app->post('/addCart', function(Request $request, Response $response){

	$userid = 		$request->getParam('id');
	$quantity = 	$request->getParam('quantity');
	$product_id = 	$request->getParam('product_id');

	$db = new Database();
    $conn = $db->open();

	$sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($userid, $product_id, $quantity)";

	$stmt = $conn->query($sql);

	$response = "success";

	return $response;

});

$app->delete('/deleteCart', function(Request $request, Response $response){
    $db = new Database();
    $conn = $db->open();

    $userid = 		$request->getParam('id');
	$quantity = 	$request->getParam('quantity');
	$product_id = 	$request->getParam('product_id');


});

$app->get('/detailsCart')

$app->get('/allCart')

$app->get('/totalCart')

$app->update('/updateCart')




	





	