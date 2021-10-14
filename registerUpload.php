<?php
    // connectDatabase // // connectDatabase //
    // connectDatabase // // connectDatabase //

    $username = $_POST['username'];
    $password = $_POST['password'];

    require 'function.php'; 

    // register //  // register //
    // register //  // register //

    Insertaccount($username, $password);    
 
?>