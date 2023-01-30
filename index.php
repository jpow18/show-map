<?php

// Define the API endpoint URL
$url = "https://api.phish.net/v5/setlists/showdate/2014-07-03.json?apikey=1D0A891F8076BD89B4BD&order_by=showdate";

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
//var_dump($data); To see how to format api call

// Access the data
echo $data["data"][0]["city"];

?>


<!DOCTYPE html>
<html>

<?php include("./view/head.php") ?>

<body>
  <?php include("./view/header.php") ?>

  <main>
    <?php include("./view/form.php") ?>
    <?php include("./view/list.php") ?>

  </main>
  <?php include("./view/footer.php") ?>
</body>

</html>