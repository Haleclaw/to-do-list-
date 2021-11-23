<html>
   <?php
        require 'function.php'
   ?>

    <header>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </header>

 
    <body>
        <div id = 'pagina' class = 'w3-container'>
            <div class ='w3-container w3-teal'>
                <h1>ToDoList</h1> 
            </div>

        <div class = "w3-card" style="width:20%; height:80%">
            <h3 class = "w3-center"><?php echo $listName ?></h3>
                <div class = 'w3-center'>
                    <button class = 'w3-btn w3-teal'type = "submit" name = "addTask">add task</button>
                    <button class = 'w3-btn w3-teal'type = "submit" onclick ='deleteList();' name = "deleteList">delete list</button>
                </div>
        </div>
    </body>

</html>