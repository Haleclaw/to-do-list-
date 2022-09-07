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

            <button class = 'w3-btn w3-black'type = "submit" onclick = 'location.href ="home.php"' name = "Main page">Main page</button> 
        </div>

        <?php
            require 'function.php';

            $id = $_GET['id'];
            deleteList($id);

            header("Location: home.php");
        ?>
    </body> 

</html>
