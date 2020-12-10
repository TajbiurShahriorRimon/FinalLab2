<?php

?>

<html>
<head>

</head>
<body>
<form name="" action="" method="post" onsubmit="return userRegistrationValidate()">
    <table align="center">
        <tr>
            <td align="right">Student Id:</td>
            <td><input id="name" type="text" id="studentId" name="studentId"> <span id="err_studentId"></span>

        </tr>
        <tr>
            <td align="right">Name:</td>
            <td><input id="name" type="text" id="name" name="name"> <span id="err_name"></span>
                <script>

                </script>
                <?php
                //echo $err_name;
                ?>
            </td>
        </tr>
        <tr>
            <td align="right">
                DOB:</td>
            <td><input type="text" id="dob" name="dob"><span id="err_dob"></span>
                <?php
                //echo $err_username;
                ?>
            </td>
        </tr>
        <tr>
            <td align="right">Credit:</td>
            <td><input type="text" id="credit" name="credit"><span id="err_credit"></span>
                <?php
                //echo $err_pass;
                ?>
            </td>
        </tr>

        <tr>
            <td align="right">
                Cgpa:</td>
            <td><input type="text" id="cgpa" name="cgpa"><span id="err_cgpa"></span>
                <?php
                //echo $err_email;
                ?>
            </td>
        </tr>
        <tr>
            <td align="right">
                Dept ID:</td>
            <td><input type="text" id="deptId" name="deptId"><span id="err_deptId"></span>
                <?php
                //echo $err_email;
                ?>
            </td>
        </tr>
        <tr align="center">
            <td colspan="2">
                <input name="edit" type="submit" value="EDIT">
            </td>
        </tr>
    </table>
</form>
<script src="../controllers/userValidate.js"></script>
</body>
</html>
