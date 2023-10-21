<?php
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'shortner';
    $db_url = 'localhost';

    try {
        $conn = mysqli_connect($db_url, $db_user, $db_pass, $db_name);
    } catch (mysqli_sql_exception) {
        // incase of a DB error redirect user to error page
        header('Location: /error.html');
        exit;
    }
?>