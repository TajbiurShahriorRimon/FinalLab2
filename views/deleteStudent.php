<?php
include '../models/DataBase.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $db = new DataBase();
    $db->dbCon();
    $db->deleteStudent($id);
    header('Location: AllStudent.php');
}

?>