<?php
    $dsn = 'mysql:host=localhost;sql1.njit.edu';
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
