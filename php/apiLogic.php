<?php

$show = $_GET['show']; // get show date from GET

// Define the API endpoint URL
$url = "https://api.phish.net/v5/setlists/showdate/" . $show . ".json?apikey=1D0A891F8076BD89B4BD&order_by=showdate";

// Set the API key
$apiKey = "1D0A891F8076BD89B4BD";

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "X-API-Key: $apiKey"
]);

// Execute the cURL requestWhat
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
  // Handle the error
  echo "cURL error: " . curl_error($ch);
  exit;
}

// Close the cURL session
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);
//var_dump($data); // To see how to format api call

?>