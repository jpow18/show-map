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

// Execute the cURL request
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
var_dump($data);

// Access the data
echo $data["data"][0]["city"];

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phish Map</title>
  <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>

<body>
  <header>
    <h1>Phish Map</h1>
  </header>
  <main>
    <form id="show-form">
      <label for="show-input">Enter Show Info:</label>
      <input type="text" id="show-input">
      <button type="submit">Submit</button>
      <button type="reset">Reset</button>
    </form>
    <section id="show-list">
      <h3>Your Shows:</h3>
      <ul>
        <!-- Show entries will be added here -->
      </ul>
    </section>
    <button id="map-shows">Map Your Shows</button>
  </main>
  <footer>
    <p>
      Contact: <a href="mailto:info@phishmap.com">info@phishmap.com</a><br>
      Copyright &copy; 2023 Phish Map<br>
      <a href="https://phish.net">Phish.net</a>
    </p>
  </footer>
</body>

</html>