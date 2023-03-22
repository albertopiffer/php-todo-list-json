<?php

$data_string = file_get_contents('./data.json');

$decode = json_decode($data_string);

$responseData = [];

foreach ($decode as $text) {
    $responseData[] = [
        'text' => $text,
        'done' => false,
    ];
}


header('Content-Type: application/json');

echo json_encode(['response' => $responseData]);
