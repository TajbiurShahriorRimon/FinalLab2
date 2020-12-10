<?php

?>
<html>
<head>

</head>
<body>
    <table align="center" cellpadding="3" border="3">
        <thead>
        <th>ID#</th>
        <th> Name</th>
        <th>DOB </th>
        <th> CREDIT</th>
        <th> CGPA</th>
        <th>DEPT_ID</th>
        <th></th>

        </thead>
        <?php
        include '../models/DataBase.php';
        $i = 1;
        $array = new DataBase();
        $array->dbCon();
        $result = $array->allStudents();
        if(!empty($result)) {
            echo 'not empty';
            foreach ($result as $data) {
                /*$foreign = $data['category_id'];
                $db = new DataBase();
                $db->dbCon();
                $category = $db->categoryName($foreign);*/
                echo "<tbody>";
                //echo "<td>" . $i . "</td>";
                echo "<td>" . $data['id'] . "</td>";
                //echo "<td>" . $category['category_name'] . "</td>";
                echo "<td>" . $data['name'] . "</td>";
                echo "<td>" . $data['dob'] . "</td>";
                echo "<td>" . $data['credit'] . "</td>";
                echo "<td>" . $data['cgpa'] . "</td>";
                echo "<td>" . $data['dept_id'] . "</td>";
                echo "<td>" . "<a href='editStudent.php?id=" . $data['id'] . "' class='btn btn-success'>Edit</a>" . "</td>";
                echo "<td><a href='deleteStudent.php?id=" . $data['id'] . "' class='btn btn-danger' name='." . $data['id'] . ".'>Delete</td>";
                echo "</tbody>";
                //$i++;
            }
        }
        ?>
    </table>
</body>
</html>