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

            <div id = 'contentPagina' class = "w3-container">
                <form class = "w3-container" role = "form" action = 'createList.php' method = "post">
                    <button class = 'w3-btn w3-teal'type = "submit" > add list </button>
                </form>
            </div>




        </div>
    </body>


