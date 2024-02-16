<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "713773348d31e162a46c52fe941485c7";
$scopes = "read_orders,write_products";
$redirect_uri = "http://localhost/shopify-app/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();