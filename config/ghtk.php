<?php
return [
    'token' => env('GHTK_TOKEN', ''),
    'open_api' => env('GHTK_OPEN_API', false),
    'ulr_fee' => env('GHTK_URL_FEE', 'https://services.giaohangtietkiem.vn/services/shipment/fee'),
    'url_order' => env('GHTK_URL_ORDER', 'https://services.giaohangtietkiem.vn/services/shipment/order'),
    'url_tracking' => env('GHTK_URL_TRACKING', 'https://services.giaohangtietkiem.vn/services/shipment/v2/'),
    'url_cancel' => env('GHTK_URL_CANCEL', 'https://services.giaohangtietkiem.vn/services/shipment/cancel/'),
    'url_pickup' => env('GHTK_URL_PICKUP', 'https://services.giaohangtietkiem.vn/services/pickup-address'),
    'url_label' => env('GHTK_URL_LABEL', 'https://services.giaohangtietkiem.vn/services/shipment/label/'),
];
