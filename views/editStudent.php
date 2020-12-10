<?php

include '../controllers/userController.php';
?>

<html>
<head>
    <style>
        span{
            color: darkred;
            font-weight: bold;
        }
    </style>

</head>
<body>
<form name="editValidation" action="" method="post" onsubmit="return editStudent()">
    <table align="center">
        <tr>
            <td align="right">Student Id:</td>
            <td><input type="text" id="studentId" name="studentId"> <span id="err_studentId"></span>

        </tr>
        <tr>
            <td align="right">Name:</td>
            <td><input type="text" id="sname" name="sname"> <span id="err_sname"></span>
                <script>

                </script>
            </td>
        </tr>
        <tr>
            <td align="right">DOB:</td>
            <!--
            <td>
                <input type="date" name="dob" id="dob"> <span id="err_dob"></span>
            </td>
            -->
            <td>
                <select name="day" id="day">
                    <option disabled selected> Day </option>"
                    <?php

                    for($i = 1; $i < 32; $i++) {
                        echo "<option value=" . $i . ">" . $i . "</option>";
                    }
                    ?>
                </select>
                <select name="month" id="month">
                    <option disabled selected> Month </option>"
                    <?php
                    $month = array("Jan", "Feb","March","April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec");
                    for($i = 0; $i <= 11; $i++){
                        echo "<option value=" . $month[$i] . ">" . $month[$i] . "</option>";
                    }
                    ?>

                </select>
                <select name="year" id="year">
                    <option disabled selected> Year </option>"
                    <?php
                    for($i = 1997; $i <= 2007; $i++){
                        echo "<option value=" . $i . ">" . $i . "</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">Credit:</td>
            <td>
                <input type="text" id="credit" name="credit"><span id="err_credit"></span>
            </td>
        </tr>

        <tr>
            <td align="right">
                Cgpa:</td>

            <td>
                <input type="text" id="cgpa" name="cgpa"><span id="err_cgpa"></span>
            </td>
        </tr>
        <tr>
            <td align="right">
                Dept ID:</td>
            <td>
                <select name="deptId" id="deptId">
                    <option disabled selected>Choose</option>
                    <?php
                    include_once '../models/DataBase.php';
                    $array = new DataBase();
                    $array->dbCon();
                    $result = $array->departmentList();
                    foreach ($result as $data){
                        echo "<option value='.".$data['id'].".'>".$data['id']."</option>";
                    }
                    ?>
                </select> <span id="err_deptId"></span>
            </td>
        </tr>
        <tr align="center">
            <td colspan="2">
                <input name="editStudent" type="submit" value="EDIT">
            </td>
        </tr>
    </table>
</form>
<script src="js/editValidate.js"></script>
</body>
</html>

