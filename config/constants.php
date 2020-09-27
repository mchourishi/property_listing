<?php

return [
    'PROPERTIES' => [
        'APP'           => 'App\Property',
        'DB_TABLE'      => 'properties',
        'PROPERTY_ID'       => 'id',
        'ROUTE' => [
            'INDEX'         => 'properties.index',
            'CREATE'        => 'properties.create',
            'STORE'         => 'properties.store',
            'SHOW'          => 'properties.show',
            'EDIT'          => 'properties.edit',
            'UPDATE'        => 'properties.update',
        ],
        'FIELDS' => [
            'NAME'          => 'name',
            'DESCRIPTION'   => 'description',
            'PRICE'         => 'price',
            'NUM_BEDROOM'   => 'num_bedroom',
            'NUM_BATHROOM'  => 'num_bathroom',
            'STATUS'        => 'status',
            'IMAGE'         => 'image',
        ]
    ],
];
