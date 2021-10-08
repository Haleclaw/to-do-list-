<?php
    session_start();
    // If the user is not logged in redirect to the login page...
    if (!sset($_SESSION['loggedin'])){
        header('location: index.php');
        exit;
    }
?>