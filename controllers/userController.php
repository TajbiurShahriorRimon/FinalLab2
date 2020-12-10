<?php
include '../models/DataBase.php';

$err_username = '';
$err_pass = '';
$username = '';
$err_name = '';
$err_email = '';
$name = '';
$pass = '';
$email = '';
$notFound = '';
$has_err = false;

if(isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['pass']);

    $db = new DataBase();
    $db->dbCon();
    $sig = $db->searchAdmin($username, $pass);

    if($sig == 1){
        setcookie('userName', $username, time() + 10000);
        header('Location: dashboard.php');
    }
    else{
        $notFound = "password not matched with username";
    }
    /*if (empty($_POST['username'])) {
        $err_username = "User Name cannot be empty!";
        $has_err = true;
    }
    else {
        $username = htmlspecialchars($_POST['username']);
    }
    if (empty($_POST['pass'])) {
        $err_pass = "Password cannot be empty!";
        $has_err = true;
    } else {
        $pass = htmlspecialchars($_POST['pass']);
    }

    if(!$has_err){
        $db = new DataBase();
        $db->dbCon();
        $sig = $db->searchUsers($username, $pass);
        if($sig == 1){
            setcookie('userName', $username, time() + 10000);
            header('Location: dashboard.php');
        }
        else{
            $notFound = "password not matched with username";
        }
    }*/
}
if(isset($_POST['addStudent'])){
    $studentId = htmlspecialchars($_POST['studentId']);
    $name = htmlspecialchars($_POST['sname']);
    $day = htmlspecialchars($_POST['day']);
    $month = htmlspecialchars($_POST['month']);
    $year = htmlspecialchars($_POST['year']);
    $credit = htmlspecialchars($_POST['credit']);
    $cgpa = htmlspecialchars($_POST['cgpa']);
    $deptId = htmlspecialchars($_POST['deptId']);

    $dob = $year.'-'.$month.'-'.$day;

    $db = new DataBase();
    $db->dbCon();
    $sig = $db->insertStudent($studentId, $name, $dob, $credit, $cgpa, $deptId);
}

?>