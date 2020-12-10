function getElement(id){
    return document.getElementById(id);
}

function userLoginValidate(){
    //alert("hello ");
    refresh();
    var has_err=false;
    /*var username=getElement("username");
    var password=getElement("pass");
    var err_username=getElement("err_username");
    var err_password=getElement("err_pass");

    var username = document.forms["loginForm"]["username"].value;
    //alert(username);
    var password = document.forms["loginForm"]["pass"].value;*/

    var e_username = getElement("username");
    var e_password = getElement("pass");
    var err_username = getElement("err_username");
    var err_password = getElement("err_pass");

    var hasErr = false;

    if(e_username.value == ""){
        hasErr= true;
        err_username.innerHTML = "Username Required";
        e_username.focus();
        return !hasErr;
    }
    if(e_password.value == ""){
        hasErr= true;
        err_password.innerHTML = "Password Required";
        e_password.focus();
        return !hasErr;
    }

    return !hasErr;
}

function refresh(){
    var err_username = getElement("err_username");
    var err_password = getElement("err_pass");
    //var err_username = getElement("err_username");

    err_username.innerHTML = "";
    err_pass.innerHTML = "";
    //err_username.innerHTML = "";

}