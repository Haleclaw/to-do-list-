<?php

    require 'function.php'; 

    // create list data //
    if(isset($_POST['createList'])){
        $listName = $_POST['listName'];
        $listDescription = $_POST['description'];
        createList($listName,$listDescription);

        header("Location: home.php");
    }

    // edit list data // 
    if(isset($_POST['editList'])){
        $id = $_POST['id'];
        $listName = $_POST['listName'];
        $description = $_POST['description'];
        editList($id,$listName,$description);

        header("Location: home.php");

    }

    // delete list //
    if(isset($_POST['test'])){
        $id = $_GET['id'];
        deleteList($id);

        header("Location: home.php");
    }

            
        
    ?>