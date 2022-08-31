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
            </div>

        <?php

        $alllist = getAllList();
        $alltask = getAlltask();

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
                     foreach ($alltask as $value){

                    ?>
                        <div class = 'w3-card w3-round-xxlarge w3-sand left' style="width:100%; height:20%">
                            <h3 class = "w3-center"><?php echo $value['name'] ?></h3>
                                <div class = 'w3-container w3-center'>
                                    <button class = 'w3-btn w3-sand'type = "submit" onclick ='location.href ="task.php"'name = "bewerken">edit</button>
                                    <button class = 'w3-btn w3-sand'type = "submit" onclick ='location.href ="task.php"'name = "bewerken">delete task</button>
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


