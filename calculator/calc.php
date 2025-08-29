<?php

declare(strict_types=1);

header('Content-Type: application/json');

// include classes + config (relative to root)
require_once __DIR__ . '/http/ApiClient.php';
require_once __DIR__ . '/services/CalculatorService.php';
$config = require __DIR__ . '/config/calculator.php';

try {
    $calculator = $_POST['calculator'] ?? $_GET['calculator'] ?? null;
    if (!$calculator) {
        http_response_code(400);
        echo json_encode(['ok' => false, 'error' => 'Missing calculator']);
        exit;
    }

    $svc   = new CalculatorService($config, new ApiClient());
    $input = array_merge($_GET, $_POST);
    unset($input['calculator']);

    $result = $svc->call($calculator, $input);

    echo json_encode(['ok' => true, 'data' => $result]);
} catch (Throwable $e) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => $e->getMessage()]);
}
