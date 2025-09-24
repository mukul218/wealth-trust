<?php

/**
 * Ensure a value (string/array/object) is valid UTF-8 for safe json_encode.
 */
function utf8_sanitize($data)
{
    if (is_array($data)) {
        return array_map('utf8_sanitize', $data);
    }
    if (is_object($data)) {
        foreach ($data as $key => $value) {
            $data->$key = utf8_sanitize($value);
        }
        return $data;
    }
    if (is_string($data)) {
        return mb_convert_encoding($data, 'UTF-8', 'UTF-8');
    }
    return $data;
}


function response($data = [], $status = 'success', $code = 200)
{
    header('Content-Type: application/json; charset=utf-8');
    // http_response_code($code);
    echo json_encode([
        'status' => $status,
        'data'   => utf8_sanitize($data)
    ]);
    exit;
}
