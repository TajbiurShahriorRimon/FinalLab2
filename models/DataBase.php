<?php

class DataBase
{
    private $serverName = "localhost: 3345";
    private $user = "root";
    private $dbpassword = "";
    private $dbName = "finallab2";

    private $con;

    function dbCon()
    {
        $this->con = mysqli_connect($this->serverName, $this->user, $this->dbpassword, $this->dbName);

        if (!$this->con) {
            die("not connected");
        } else {
            //echo "Connected<br> Now Showing data <br><br/>";
        }
    }

    function allStudents(){
        $sqlQuery = "select * from student";
        $result = mysqli_query($this->con, $sqlQuery);
        $row = mysqli_num_rows($result);

        $data = [];

        if($row > 0){
            while ($rowArray = mysqli_fetch_assoc($result)){
                $data[] = $rowArray;
            }
            return $data;
        }
        else{
            return $data;
        }
    }

    function insertStudent($id, $name, $dob, $credit, $cgpa, $dept_id)
    {
        $sqlQuery = "INSERT INTO student (id, name, dob, credit, cgpa, dept_id)
                    VALUES ('$id', '$name', '$dob', '$credit', '$cgpa', '$dept_id')";

        mysqli_query($this->con, $sqlQuery);
    }

    function editStudent($id, $name, $dob, $credit, $cgpa, $dept_id)
    {
        $sqlQuery = "UPDATE products 
                    SET id = '$id', name = '$name', dob = '$dob', credit = '$credit', cgpa = '$cgpa', dept_id = '$dept_id'
                    WHERE id = '$id'";

        $result = mysqli_query($this->con, $sqlQuery);
    }

    function deleteStudent($id)
    {
        //echo $categoryId;
        $sqlQuery = "DELETE FROM student
                    WHERE id = '$id'";

        $result = mysqli_query($this->con, $sqlQuery);
    }

    function searchAdmin($username, $pass)
    {
        $sqlQuery = "SELECT * FROM admin WHERE username = '$username' AND password = '$pass';";

        $result = mysqli_query($this->con, $sqlQuery);
        $row = mysqli_num_rows($result);

        if ($row > 0) {
            return 1;
        } else {
            //return  "not found";
        }
    }
}
?>