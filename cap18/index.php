<?php

require_once 'config/database.php';

try {
    $dbh = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME,
        DB_USER,
        DB_PASS
    );
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}