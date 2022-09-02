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


    $list = getListId();
    var_dump($list[0][0]);

    header("location: list.php?listId=".$list[0][0]);
}

// editList // // editList //
// editList // // editList //

function editlist($id){
    $conn = databaseConnection();
    $stmt=$conn->prepare('UPDATE list SET name = `listid`  WHERE id= :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $conn = null; 
}


// getListId // // getListId //
// getListId // // getListId //

function getListId(){
    $conn = databaseConnection();
    $stmt=$conn->prepare('SELECT (id) FROM list');
    $stmt->execute();
    return $stmt->fetchAll();
    $conn = null;
}

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

function getAlltask($id){
    $conn = databaseConnection();
    $stmt=$conn->prepare('SELECT * FROM task where listid = :id');
    $stmt->execute([":id" => $id]);
    return $stmt->fetchALL();
    $conn = null;
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

function addTask($listid, $taskName, $taskDescription){
    $conn = databaseConnection();
    $stmt=$conn->prepare("INSERT INTO `task` (`listid`,`name`,`text`) values (:listid,:taskName,:taskDescription)");
    $stmt->bindParam(':listid', $listid);
    $stmt->bindParam(':taskName', $taskName);
    $stmt->bindParam(':taskDescription', $taskDescription);
    $stmt->execute();
    $conn = null;
}

?>