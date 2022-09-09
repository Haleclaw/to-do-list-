<?php
// databaseConnection // // databaseConnection // 
// databaseConnection // // databaseConnection // 

function databaseConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "todolist";

    $conn = new PDO("mysql:host=localhost;dbname=todolist", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;

}

// Insertaccount // // Insertaccount // 
// Insertaccount // // Insertaccount // 

function Insertaccount($username, $password){
    $conn = databaseConnection();
    $stmt=$conn->prepare("INSERT INTO users (username, password) Values (:username, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $conn = null; 
}

// getUsers // // getUsers // 
// getUsers // // getUsers // 

function getUsers(){
	$conn = databaseConnection();
	$stmt=$conn->prepare('SELECT * FROM users');
	$stmt->execute();
	return $stmt->fetchAll();
    $conn = null; 
}

// createList // // createList //
// createList // // createList //

function createList($listName,$listDescription){
    $conn = databaseConnection();
    $stmt=$conn->prepare('INSERT INTO list (`name`,`description`) values (:listName,:listDescription)');
    $stmt->bindParam(':listName', $listName);
    $stmt->bindParam(':listDescription', $listDescription);
    $stmt->execute();
    $conn = null;

}

// editList // // editList //
// editList // // editList //

function editList($id,$listName,$description){
    $conn = databaseConnection();
    $stmt=$conn->prepare('UPDATE list SET id = :id, name = :listName, description = :description  WHERE id= :id');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':listName', $listName);
    $stmt->bindParam(':description', $description);
    $stmt->execute();
    $conn = null; 
}


// getListId // // getListId //
// getListId // // getListId //

function getallListId(){
    $conn = databaseConnection();
    $stmt=$conn->prepare('SELECT * FROM task WHERE listid');
    $stmt->execute();
    return $stmt->fetchAll();
    $conn = null;
}

// getName // // getName // 
// getName // // getName // 

function getName(){
    $conn = databaseConnection();
    $stmt=$conn->prepare('SELECT * FROM list WHERE id');
    $stmt->execute();
    return $stmt->fetchAll();
    $conn = null;
}

// getAllList // // getAllList // 
// getAllList // // getAllList // 

function getAllList(){
    $conn = databaseConnection();
    $stmt=$conn->prepare('SELECT * FROM list');
    $stmt->execute();
    return $stmt->fetchAll();
    $conn = null;
}

// getAlltask // // getAlltask //
// getAlltask // // getAlltask //

function getAlltask($id,$filter){
    // no filter //
    if ($filter == ''){
        $conn = databaseConnection();
        $stmt=$conn->prepare('SELECT * FROM task where listid = :id');
        $stmt->execute([":id" => $id]);
        return $stmt->fetchALL();
        $conn = null;
      }

      // status filter
      else if ($filter == 'statusVoldaan'){
        $conn = databaseConnection();
        $stmt=$conn->prepare('SELECT * FROM task  where listid = :id AND status = "voldaan"');
        $stmt->execute([":id" => $id]);
        return $stmt->fetchALL();
        $conn = null;
      }

       // status filter
       else if ($filter == 'statusBehandeling'){
         $conn = databaseConnection();
         $stmt=$conn->prepare('SELECT * FROM task  where listid = :id AND status = "Behandeling"');
         $stmt->execute([":id" => $id]);
         return $stmt->fetchALL();
         $conn = null;
     }

     // time filter
      else if ($filter == 'time'){
        $conn = databaseConnection();
        $stmt=$conn->prepare('SELECT * FROM task  where listid = :id ORDER BY duration' );
        $stmt->execute([":id" => $id]);
        return $stmt->fetchALL();
        $conn = null;
      }
}

// deleteList // // deleteList //
// deleteList // // deleteList //

function deleteList($id){
    $conn = databaseConnection();
    $stmt=$conn->prepare('DELETE FROM list WHERE id= :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $conn = null; 
}

// addTask // // addTask //
// addTask // // addTask //

function addTask($listid, $taskName, $taskDescription,$status,$time,$duration){
    $conn = databaseConnection();
    $stmt=$conn->prepare("INSERT INTO `task` (`listid`,`name`,`text`,`status`,`time`,`duration`) values (:listid,:taskName,:taskDescription,:status,:time,:duration)");
    $stmt->bindParam(':listid', $listid);
    $stmt->bindParam(':taskName', $taskName);
    $stmt->bindParam(':taskDescription', $taskDescription);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':time', $time);
    $stmt->bindParam(':duration', $duration);
    $stmt->execute();
    $conn = null;
}

// deleteTask // // deleteTask // 
// deleteTask // // deleteTask // 

function deleteTask($id){
    $conn = databaseConnection();
    $stmt=$conn->prepare('DELETE FROM task WHERE id= :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $conn = null; 
}

// editTask // // editTask // 
// editTask // // editTask // 

function editTask($id,$taskName,$description,$status,$duration){
    $conn = databaseConnection();
    $stmt=$conn->prepare('UPDATE task SET id = :id, name = :taskName, text = :description, status = :status, duration = :duration  WHERE id= :id');
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':taskName', $taskName);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':duration', $duration);
    $stmt->execute();
    $conn = null; 
}

?>
