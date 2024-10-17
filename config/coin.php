<?php

$envVars = getenv();

$externalLinks = array_filter($envVars, function ($key) {
    return strpos($key, 'COIN_EXT_') === 0;
}, ARRAY_FILTER_USE_KEY);

$externalLinks = array_combine(
    array_map(function ($key) {
        return strtolower(str_replace('COIN_EXT_', '', $key));
    }, array_keys($externalLinks)),
    $externalLinks
);

ksort($externalLinks);

$config = [
    'baseURL' => env('API_BASE_URL', "https://api.miningcrypto.online/"),
    'poolName' => env('COIN_POOL_NAME'),
    'name' => env('COIN_NAME'),
    'symbol' => env('COIN_SYMBOL'),
    'scheme' => env('COIN_PAYMENT_SCHEME'),
    'color' => env('COIN_COLOR', '#F29F05'),
    'icon_url' => env('COIN_SYMBOL') . "-icon.png",
    'cacheExpiration' => env('API_CACHE_MINUTES', 5),
    'external' => $externalLinks
];

return $config;
