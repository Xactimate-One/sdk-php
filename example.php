<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');

$apiInstance = new OpenAPI\Client\Api\HealthApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->alive();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->alive: ', $e->getMessage(), PHP_EOL;
}
