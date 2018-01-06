<?php
class DBConnect{

    function __construct(){
        //ket noi db
        
    }

    //thuc thi query
    // UPDATE/INSERT/DELETE
    function executeQuery(){

    }

    //fetch Data
    //SELECT 1 row
    function  loadOneRow(){
        //fetch()
    }

    function loadMoreRows(){
        //fetchAll()
    }

    function getLastId(){
        //lastInsertId()
    }

    function rowCount(){
        //rowCount()
    }
}

$sql = "...";
$db = new DBConnect;
$result = $db->loadOneRow($sql);



?>