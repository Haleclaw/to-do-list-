<?php

    require 'function.php';

    $id = $_GET['id'];
    deleteList($id);

    header("Location: home.php");
?>

