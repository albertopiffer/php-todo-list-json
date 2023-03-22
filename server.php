<?php

$responseData = [
    [
        'text' => 'bruh1',
        'done' => false,
    ],
    [
        'text' => 'bruh2',
        'done' => false,
    ],
    [
        'text' => 'bruh3',
        'done' => false,
    ]
];

header('Content-Type: application/json');

echo json_encode(['response' => $responseData]);