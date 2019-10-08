<?php
error_reporting(~E_ALL);
$errors = [];

set_error_handler(function($errno, $errstr, $errfile, $errline) use ($db) {
    global $errors;
    $errors[] = [
        'errno' => $errno,
        'errstr' => $errstr,
        'errfile' => $errfile,
        'errline' => $errline,
    ];
});

header('Content-Type: application/json');
if (!$_REQUEST['token']) return json_encode(['status' => 'error', 'error' => 'Не указан token']);
$method = $_REQUEST['method'] ?: 'getMe';

$result = file_get_contents('https://api.telegram.org/bot' . $_REQUEST['token'] . '/' . urlencode($method));

if (!$result || $errors) {
    echo json_encode([
        'status' => 'error',
        'errors' => $errors,
    ]);
} else {
    echo $result;
}