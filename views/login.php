<?php
include '../controllers/userController.php';
?>
<!doctype>
<html>
<head>

    <script src="js/loginValidate.js"></script>
</head>
<body>
<form name="loginForm" action="" method="post" onsubmit="return userLoginValidate()">
    <table align="center">
        <tr>
            <td align="right">
                Username:</td>
            <td><input type="text" id="username" name="username"><span id="err_username"></span>
            </td>
        </tr>
        <tr>
            <td align="right">Password:</td>
            <td><input type="password" id="pass" name="pass"><span id="err_pass"></span>
            </td>
        </tr>
        <tr align="center">
            <td colspan="2">
                <input name="login" type="submit" value="Login">
            </td>
        </tr>
    </table>
</form>
</body>
</html>

