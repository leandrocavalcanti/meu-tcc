<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    Define('BASE', 'peladafutebolclube');

    $conn = new mysqli(HOST, USER, PASS, BASE);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
} 
?>