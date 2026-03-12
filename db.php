<?php
function get_db(): PDO {
    $host = getenv('DB_HOST') ?: '127.0.0.1';
    $db   = getenv('DB_NAME') ?: 'cyberapp';
    $user = getenv('DB_USER') ?: 'cyberuser';
    $pass = getenv('DB_PASS') ?: 'cyberpass';
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $opts = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC];
    return new PDO($dsn, $user, $pass, $opts);
}
?>