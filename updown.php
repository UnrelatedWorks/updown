<?php

// Set the URLs to check
$urls = array(
    "https://unrelated.works",
    "https://fellas.media"
    );

// Set the log file path
$log_file = __DIR__ . "/updown.log";

// Loop through the URLs and check their availability
foreach ($urls as $url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Log any outages
    if ($http_code !== 200) {
        $log_entry = date("d-m-Y H:i:s") . " - $url is down (HTTP code $http_code)\n";
        file_put_contents($log_file, $log_entry, FILE_APPEND);
    }
}

?>
