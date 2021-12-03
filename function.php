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

function createList($listName){
    $conn = databaseConnection();
    $stmt=$conn->prepare('INSERT INTO list (`name`) values (:listName)');
    $stmt->bindParam(':listName', $listName);
    $stmt->execute();
    $conn = null;

    $idList = getListId();
    var_dump($idList[0][0]);

    header("location: list.php?listId=".$idList[0][0]);
}

// getListId // // getListId //
// getListId // // getListId //

function getListId(){
    $conn = databaseConnection();
    $stmt=$conn->prepare('SELECT MAX(id) FROM list');
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

// deleteList // // deleteList //
// deleteList // // deleteList //

function deleteList($listName){
    $conn = databaseConnection();
    $stmt=$conn->prepare('DELETE FROM list WHERE (:listName)');
    $stmt-execute();
    $conn = null; 
}

// addTask // // addTask //
// addTask // // addTask //

function addTask(){
    
}

?>