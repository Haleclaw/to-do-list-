<html>
   <?php
        require 'function.php';

        $listName = getName();

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

            <button class = 'w3-btn w3-black'type = "submit" onclick = 'location.href ="home.php"' name = "Main page">Main page</button> 

        <div class = "w3-card w3-white" style="width:20%; height:80%">
            <h3 class = "w3-center"><?php echo $listName[0][1] ?></h3>
                <div class = 'w3-center'>
                    <button class = 'w3-btn w3-teal'type = "submit" name = "addTask">add task</button>
                    <button class = 'w3-btn w3-teal'type = "submit" onclick ='#' name = "deleteList">delete list</button>
                </div>
        </div>
    </body>

</html>