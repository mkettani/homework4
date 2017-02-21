<?php
    $dsn = 'host=sql1.njit.edu;dbname=mk688';
    $username = 'mk688';
    $password = 'mehdikettani08';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
