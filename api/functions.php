<?php

function getCurl($url) {
    // Initialize curl
    $curl = curl_init();

    // Set the options
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_URL, $url);

    // Execute the request
    $resp = curl_exec($curl);

    //close the connection
    curl_close($curl);

    return $resp;
}
