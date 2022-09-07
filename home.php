<?php
    require 'function.php'
?>

<header>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
</header>

    <body>
        <div id = 'pagina' class = 'w3-container'>
            <div class ='w3-container w3-round-large w3-teal'>
                <h1>ToDoList</h1> 
            </div>

            <div id = 'contentPagina' class = "w3-container">
                <form class = "w3-container" role = "form" action = 'createList.php' method = "post">
                    <button class = 'w3-btn w3-teal'type = "submit" > add list </button>
                </form>

                <form class = "w3-container" role = "form" action = 'home.php?filter=status' method = "post">
                    <button class = 'w3-btn w3-teal'type = "submit" > filteren op status </button>
                </form>

                <form class = "w3-container" role = "form" action = 'home.php?filter=time' method = "post">
                    <button class = 'w3-btn w3-teal'type = "submit" > filteren op tijd </button>
                </form>

            </div>

        <?php


        
        // filter status //
        
        $filter = $_GET['filter'];

        // Data import  //

        $alllist = getAllList();
        
        $alllistid = getallListId(); 


        foreach ($alllist as $value){

        ?>
        
            <div class = "w3-card w3-white left" style="width:20%; height:80%">
                <h3 class = "w3-center"><?php echo $value['name'] ?></h3>
                    <div class = 'w3-center'>
                        <button class = 'w3-btn w3-teal'type = "submit" onclick ='location.href =`createTask.php?id= <?php echo $value["id"]; ?>`'name = "addTask">add task</button>
                        <button class = 'w3-btn w3-teal'type = "submit" onclick ='location.href =`editList.php?id= <?php echo $value["id"]; ?>`' name = "editList">edit list</button>
                        <button class = 'w3-btn w3-teal'type = "submit" onclick ='location.href ="deleteList.php?id= <?php echo $value["id"]; ?>"' name = "deleteList">delete list</button>
                    </div>

                    <?php

                    $id = $value['id'];
                    $alltask = getAlltask($id,$filter);

                     foreach ($alltask as $taskloop){
              
                    ?>
                        <div class = 'w3-card w3-round-xxlarge w3-sand' style=" height:27%; max-height:28%">
                            <h3 class = "w3-center"><?php echo $taskloop['name'] ?></h3>
                            <h4 class = "w3-center"> beschrijving: <?php echo $taskloop['text'] ?></h4>
                            <h5 class = "w3-center"> status: <?php echo $taskloop['status'] ?> </h5>
                            <p class="w3-center"> tijd: <?php echo $taskloop['time'] ?> <p> 
                                <div class = 'w3-container w3-center'>
                                    <button class = 'w3-btn w3-sand'type = "submit" onclick ='location.href ="editTask.php?id= <?php echo $taskloop["id"]; ?>"'name = "bewerken">edit</button>
                                    <button class = 'w3-btn w3-sand'type = "submit" onclick ='location.href ="deleteTask.php?id= <?php echo $taskloop["id"]; ?>"'name = "delete">delete task</button>
                                </div>
                        </div>
                    <?php
                   
                    }
                    ?>
            </div>

        <?php
        }
        ?>


        </div>
    </body>


