<html>

    <header>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </header>

    <body>
        <div id = 'pagina' class = 'w3-container w3-display-topmiddle'>
            <div class ='w3-container w3-teal'>
                <h1>ToDoList</h1> 
            </div>

            <h2>Register</h2> 
      
            <div class = "w3-container">
      
                <form class = "w3-container" role = "form" action = 'registerUpload.php' method = "post">
                    <label> Username: </label>  
                    <input type = "text" name = "username" required></br>
                    <label> Password: </label> 
                    <input type = "password" name = "password" required>
                    <button class = 'w3-btn w3-teal'type = "submit" name = "register">submit</button>
            </form>
			     
            </div>


        </div>

</body>

</html>