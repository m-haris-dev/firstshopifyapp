<?php
require_once("inc/functions.php");
$requests = $_GET;
$hmac = $_GET['hmac'];
$serializeArray = serialize($requests);
$requests = array_diff_key($requests, array('hmac' => ''));
ksort($requests);
$token = "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";
$shop = "m-haris-art";


$products = shopify_call($token, $shop, "/admin/api/2023-10/products.json");
$json_data = json_decode($products['response'], JSON_PRETTY_PRINT);
echo "<pre>";
// var_dump($products);
echo "</pre>";
$products = $json_data["products"];
// var_dump($products);
foreach($products as $product){
    echo $product["title"]."<br>";
}

