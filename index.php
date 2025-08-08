
<?php
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/api/oi' && $method === 'GET') {

    echo json_encode([
        "message" => "Olá, mundo! API PHP funcionando"
    ]);

} else {

    http_response_code(404);
    echo json_encode([
        "error" => "Rota não encontrada"    
    ]);
}
    




