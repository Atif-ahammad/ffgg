<?php

// Define the API endpoint
$api_url = "https://terabox-online-player-and-downloader-api.p.rapidapi.com/";

// Define the link
$link = "https://teraboxapp.com/s/1tD839uEjRzGUbeKYg24UBg";

// Encode the link for URL usage
$encoded_link = urlencode($link);

// Construct the full API URL with the encoded link
$url = $api_url . "?link=" . $encoded_link;

// API headers
$headers = [
    "Accept: application/json",
    "x-rapidapi-ua: RapidAPI-Playground",
    "x-rapidapi-key: 635b1a46demshc45648e0f4e72e5p19f3a1jsn3ceb2eaad660",
    "x-rapidapi-host: terabox-online-player-and-downloader-api.p.rapidapi.com"
];

// Initialize cURL
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Execute the request and get the response
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Decode the JSON response
    $data = json_decode($response, true);
    
    // Output the URL
    if (isset($data['url'])) {
        echo $data['url'] . "\n";
    } else {
        echo 'URL not found in response' . "\n";
    }
    
    // Add custom messages with precise alignment
    echo str_pad("Api Made By Sohel Ahammad", 40, " ", STR_PAD_LEFT) . "\n";
    echo str_pad("🗨️ @sohelahammad5853", 40, " ", STR_PAD_LEFT);
}

// Close the cURL session
curl_close($ch);

?>
