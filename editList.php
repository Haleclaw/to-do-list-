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

                <h2>edit list</h2> 
        
                <div class = "w3-container">

                    <?php
                        require 'function.php';
                        
                        $id = $_GET['id'];

                        if ( $_POST == false){
                    ?>

                    <form class = "w3-container" role = "form" action = 'editList.php' method = "post">
                        <input name='listid' type='hidden' value="<?php echo $id; ?>">
                        <label> name: </label>  
                        <input type = "text" name = "listName" required></br>
                        <label> description: </label>  
                        <input type = "text" name = "description" required></br>
                        <button class = 'w3-btn w3-teal'type = "submit" name = "register">submit</button>
                    </form>
                </div>

                    <?php
                        }

                        if ($_POST == true){

                            

                            $id = $_POST['id'];
                            editList($id);
                        }   
                        ?>
                       
                    
        </div>
    </body>
</html>