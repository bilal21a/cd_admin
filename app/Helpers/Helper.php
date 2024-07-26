<?php

use GuzzleHttp\Client;

if (!function_exists('checkImageExists')) {
    function checkImageExists($url)
    {
        $client = new Client();
        try {
            $response = $client->head($url);
            return $response->getStatusCode() == 200;
        } catch (\Exception $e) {
            return false;
        }
    }
}
