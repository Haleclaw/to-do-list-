<html>

    <header>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </header>

    <body>
        <div id = 'pagina' class = 'w3-container'>
                <div class ='w3-container w3-round-large w3-teal'>
                    <h1>ToDoList</h1> 
                </div>

                <h2>edit task</h2> 
        
                <div class = "w3-container">

                    <?php
                        require 'function.php';
                        
                        $id = $_GET['id'];

                        if ( $_POST == false){
                    ?>

                    <form class = "w3-container" role = "form" action = 'editTask.php' method = "post">
                        <input name='id' type='hidden' value="<?php echo $id; ?>">
                        <label> name: </label>  
                        <input type = "text" name = "taskName" required></br>
                        <label> description: </label>  
                        <input type = "text" name = "description" required></br>
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
                </div>


                    <?php
                        }

                        if ($_POST == true){

                        
                            $id = $_POST['id'];
                            $taskName = $_POST['taskName'];
                            $description = $_POST['description'];
                            $status = $_POST['status'];
                            $duration = $_POST['duration'];
                            editTask($id,$taskName,$description,$status,$duration);

                            header("Location: home.php");
                        }   
                        ?>
                       
                    
        </div>
    </body>
</html>