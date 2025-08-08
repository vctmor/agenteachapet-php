
<?php
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/api/oi' && $method === 'GET') {

    echo json_encode([
        "message" => "Olá, mundo! tudo bem, como vai?"
    ]);

} elseif ($uri === '/' && $method == 'GET') {

    echo json_encode([

        "message" => "API PHP funcionando na raiz"
    ]);

} else {

    http_response_code(404);
    echo json_encode([
        "error" => "Rota não encontrada"    
    ]);
}
    




