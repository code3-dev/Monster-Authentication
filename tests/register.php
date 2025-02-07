<?php

require('vendor/autoload.php');

use Monster\App\Models\Http;

$http = new Http();

$http->Url('http://xflex.test/api/v1/register')
    ->Method('POST')
    ->Headers(['Content-Type: application/json'])
    ->Body(json_encode([
        "name" => "John Doe",
        "email" => "h3dev.pira@gmail.com",
        "password" => "123456",
        "confirmPassword" => "123456"
    ]));

try {
    $response = $http->Send();

    if ($response === false) {
        throw new \Exception("Failed to get a response from server.");
    }

    $responseArray = json_decode($response, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new \Exception("Failed to decode JSON: " . json_last_error_msg());
    }

    if ($http->getStatus() === 200) {
        if (isset($responseArray['status']) && $responseArray['status']) {
            echo "Registration successful. User ID: " . (isset($responseArray['user_id']) ? $responseArray['user_id'] : 'Unknown');
        } else {
            echo "Error: " . (isset($responseArray['message']) ? $responseArray['message'] : 'Unknown error');
        }
    } else {
        echo "Request failed with status code: " . $http->getStatus();
        echo "<br>Error Message: " . (isset($responseArray['message']) ? $responseArray['message'] : 'Unknown error');
    }
} catch (\Exception $e) {
    echo 'Request failed. ' . $e->getMessage();
}