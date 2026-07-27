<?php
 
declare(strict_types=1);

/** Mostrar todos os erros em fase de implementação e salvar log de erros. */
ini_set('log_errors', 'On');
ini_set('error_log', __DIR__ . '/storage/logs/php-error.log');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ob_start();

include "conexao.php";

$query = "SELECT * FROM users";
$stmt = $conn->prepare($query);
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_OBJ);

echo "<pre>";
print_r($users);
echo "</pre>";

ob_end_flush();
