<html>
    <header>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </header>

    <body>

    <?php

    $time = date('Y-m-d h:i:s');
    $listid = $_GET['id'];    

    ?>
        <div id = 'pagina' class = 'w3-container'>
            <div class ='w3-container w3-round-large w3-teal'>
                <h1>ToDoList</h1> 
            </div>

            <h2>add task</h2>
            <h3> lijst: <?php echo $listid ?> </h3> 

            <form class = "w3-container" role = "form" action = 'createTask.php' method = "post">
                <input name='listid' type='hidden' value="<?php echo $listid; ?>">
                <label> naam: </label>  
                <input type = "text" name = "taskName" required></br>
                <label> task description: </label>
                <input type = "text" class='taskDescription' name = "taskDescription" required><br>
                <h2> status: </h2>
                <label> voldaan: </label>
                <input name='status' type='checkbox' value="voldaan">
                <label> in Behandeling: </label>
                <input name='status' type='checkbox' value="Behandeling">
                <br><br>
                <h2> duur: </h2>
                <label> hoelang doe je over de taak in uren?: </label>
                <input type = "text" class='duration' name = "duration" required><br>
                
                <button class = 'w3-btn w3-teal'type = "submit" name = "register">submit</button>
            </form>

            <?php

                require 'function.php';
                
                if ( $_POST == true){
                
                $listid = $_POST['listid'];
                $taskName = $_POST['taskName'];
                $taskDescription = $_POST['taskDescription'];
                $status = $_POST['status'];
                $duration = $_POST['duration'];
                
               
                addTask($listid,$taskName,$taskDescription,$status,$time,$duration);

                header("Location: home.php");
                }
            ?>
        </div>
    </body>

</html>
