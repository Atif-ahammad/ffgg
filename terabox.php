<?php

// Retrieve the URL parameter from the request
$inputUrl = $_REQUEST["url"];

// Encode the URL for safe transmission
$encodedUrl = urlencode($inputUrl);

// Define the API endpoint and key
$apiUrl = "https://terabox-online-player-and-downloader-api.p.rapidapi.com/?link=" . $encodedUrl;
$apiKey = "635b1a46demshc45648e0f4e72e5p19f3a1jsn3ceb2eaad660";

// Initialize cURL
$curl = curl_init($apiUrl);

// Set cURL options
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    "Accept: application/json",
    "x-rapidapi-key: $apiKey",
    "x-rapidapi-host: terabox-online-player-and-downloader-api.p.rapidapi.com",
]);

// Execute the cURL request
$response = curl_exec($curl);

// Check for cURL errors
if ($response === false) {
    echo "cURL Error: " . curl_error($curl);
} else {
    // Output the response
    echo $response;
}

// Close cURL
curl_close($curl);

?>
