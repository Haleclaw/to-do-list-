<html>
    <header>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </header>

    <body>
        <div id = 'pagina' class = 'w3-container'>
            <div class ='w3-container w3-teal'>
                <h1>ToDoList</h1> 
            </div>

            <h2>add list</h2> 
      
            <div class = "w3-container">

                <?php

                    require 'function.php'; 

                    if ( $_POST == false){
                ?>

                <form class = "w3-container" role = "form" action = 'createList.php' method = "post">
                    <label> name: </label>  
                    <input type = "text" name = "listName" required></br>
                    <button class = 'w3-btn w3-teal'type = "submit" name = "register">submit</button>
                </form>
        </div>

        <?php

            }

            if ( $_POST == true){
                $listName = $_POST['listName'];
                createList($listName);

            }
        ?>

    </body> 


</html>