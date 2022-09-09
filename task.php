<?php

    require 'function.php'; 

    // create task data //
    if(isset($_POST['createTask'])){
        // set the current time
        $time = date('Y-m-d h:i:s');


        $listid = $_POST['listid'];
        $taskName = $_POST['taskName'];
        $taskDescription = $_POST['taskDescription'];
        $status = $_POST['status'];
        $duration = $_POST['duration'];
        
       
        addTask($listid,$taskName,$taskDescription,$status,$time,$duration);

        header("Location: home.php");
    }

    // edit task data //
    if(isset($_POST['editTask'])){
        $id = $_POST['id'];
        $taskName = $_POST['taskName'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        $duration = $_POST['duration'];
        editTask($id,$taskName,$description,$status,$duration);
    
        header("Location: home.php");

    }




    