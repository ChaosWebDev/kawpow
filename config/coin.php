<?php

$config = [
    'baseURL' => env('API_BASE_URL', "https://api.miningcrypto.online/"),
    'poolName' => env('COIN_POOL_NAME'),
    'name' => env('COIN_NAME'),
    'symbol' => env('COIN_SYMBOL'),
    'scheme' => env('COIN_PAYMENT_SCHEME'),
    'color' => env('COIN_COLOR', '#F29F05'),
    'icon_url' => env('COIN_SYMBOL') . "-icon.png",
    'cacheExpiration' => env('API_CACHE_MINUTES', 5)
];

return json_decode(json_encode($config));
