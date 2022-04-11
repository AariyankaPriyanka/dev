<?php

function createMysqlConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";


    $conn = new mysqli($servername, $username, $password);

    if($conn->connect_error) {
        die("Connection failed: ".$conn->coonect_error);
    }

    echo "phpMyAdmin Connected Successfully <br>";
    return $conn;
}
//createMysqlConnection();

function createDatabase($dbname){
    $conn = createMysqlConnection();
    $sql = "CREATE DATABASE $dbname";
    if($conn->query($sql)== TRUE)
        {
        echo "DataBase created Succesfully";
        }

}
createDatabase("royalT");

function createDBConnection(){
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "royalT";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die(" DataBase Connection failed: ".$conn->connect_error);
        }

        echo "$dbname connected successfully <br>";
        return $conn;
}
//createDBConnection();



?>
