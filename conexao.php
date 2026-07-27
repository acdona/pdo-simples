<?php
// Conexão com o banco
$host = 'localhost';
$dbname = 'nome_do_banco';
$user = 'root';
$pass = '1234';

try {
    $conn = new PDO(
        "mysql:host=$host;
        dbname=$dbname;
        charset=utf8mb4", 
        $user, 
        $pass
    );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE, 
        PDO::ERRMODE_EXCEPTION
    );
    echo "Conexão feita com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
    die();
}
    
