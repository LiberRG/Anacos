<?php

return [
// Codigo: Aquí variables globales (por ejemplo: datos de contacto del cliente)
    'cache' => [
        'defaultDuration' => env('PV_CACHE_DEFAULT_DURATION', 60)
    ],
    'FILTRO_VIVE' => [
        'alojamiento',
        'servicios turísticos',
        'como llegar',
        'cultura y tradiciones',
        'sabores del lugar',
        'paisajes',
    ],
    'KEY_ALOJAMIENTO' => 0,
    'KEY_SERVICIOS_TURISTICOS' => 1,
    'KEY_COMO_LLEGAR' => 2,
    'KEY_CULTURA_Y_TRADICIONES' => 3,
    'KEY_SABORES_DEL_LUGAR' => 4,
    'KEY_PAISAJES' => 5,


];
