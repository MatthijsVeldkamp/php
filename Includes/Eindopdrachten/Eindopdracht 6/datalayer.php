<?php
function createDatabaseConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "characters";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
}
function readSubjects(){
    $dbConnection = createDatabaseConnection();
    $stmt = $dbConnection->prepare("SELECT * FROM characters");
    $stmt->execute();
    $result = $stmt->fetchAll();
    $dbConnection = null;
    return $result;
}
function countSubjects(){
    $dbConnection = createDatabaseConnection();
    $stmt = $dbConnection->prepare("SELECT COUNT(*) FROM characters");
    $stmt->execute();
    $result = $stmt->fetchColumn();
    $dbConnection = null;
    return $result;
}

function readSubject($id){
    $dbConnection = createDatabaseConnection();
    $stmt = $dbConnection->prepare("SELECT * FROM characters WHERE id=:id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch();
    $dbConnection = null;
    return $result;
}
?>