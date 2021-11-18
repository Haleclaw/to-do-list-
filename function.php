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
}

// createList // // createList //
// createList // // createList //

function createList($listName){
    $conn = databaseConnection();
    $stmt=$conn->prepare('INSERT INTO list (`name`) values (:listName)');
    $stmt->bindParam(':listName', $listName);
    $stmt->execute();

    include 'list.php';
}

// deleteList // // deleteList //
// deleteList // // deleteList //

function deleteList($listName){
    $conn = databaseConnection();
    $stmt=$conn->prepare('DELETE FROM list WHERE (:listName)');
    $stmt-execute();
}

?>