
function editStudent(){
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

    var e_sname = getElement("sname");
    var e_studentId = getElement("studentId");
    /*var e_day = getElement("day")
    var e_month = getElement("month");
    var e_year = getElement("year");*/
    var e_credit = getElement("credit")
    var e_cgpa = getElement("cgpa");
    var e_deptId = getElement("deptId");

    var err_sname = getElement("err_sname");
    var err_studentId = getElement("err_studentId");
    /*var err_day = getElement("err_day");
    var err_month = getElement("err_month");
    var err_year = getElement("err_year");*/
    var err_credit = getElement("err_credit");
    var err_cgpa = getElement("err_cgpa");
    var err_deptId = getElement("err_deptId");

    var regExp = /[a-zA-Z]/g;

    var hasErr = false;

    if(e_studentId.value == ""){
        hasErr= true;
        err_studentId.innerHTML = "ID Required";
        e_studentId.focus();
        return !hasErr;
    }
    if(e_sname.value == ""){
        hasErr= true;
        err_sname.innerHTML = "Name Required";
        e_sname.focus();
        return !hasErr;
    }
    else{
        if(e_sname.search("0") != -1 || e_sname.search("1") != -1 || e_sname.search("2") != -1 || e_sname.search("3") != -1 ||
            e_sname.search("4") != -1 || e_sname.search("5") != -1 || e_sname.search("6") != -1 || e_sname.search("7") != -1 ||
            e_sname.search("8") != -1 || e_sname.search("9") != -1){
            hasErr= true;
            err_sname.innerHTML = "Name Cannot Contain any Number!!";
            e_sname.focus();
            return !hasErr;
        }
    }
    /*if(e_day.value == ""){
        hasErr= true;
        err_day.innerHTML = "DOB Required";
        e_day.focus();
        return !hasErr;
    }*/
    if(e_credit.value == ""){
        hasErr= true;
        err_credit.innerHTML = "Credit Required";
        e_credit.focus();
        return !hasErr;
    }
    else{
        if(regExp.test(e_credit.value)){
            hasErr= true;
            err_credit.innerHTML = "Credit cannot contain any letter";
            e_credit.focus();
            return !hasErr;
        }
    }
    if(e_cgpa.value == ""){
        hasErr= true;
        err_cgpa.innerHTML = "CGPA Required";
        e_cgpa.focus();
        return !hasErr;
    }
    else{
        if(e_cgpa.value > 4 && e_cgpa.value < 0){
            hasErr= true;
            err_cgpa.innerHTML = "CGPA cannot be grater than 4 or less than Zero";
            e_cgpa.focus();
            return !hasErr;
        }
    }
    if(e_deptId.value == ""){
        hasErr= true;
        err_deptId.innerHTML = "Department ID Required";
        e_deptId.focus();
        return !hasErr;
    }

    return !hasErr;
}

function refresh(){
    /*var err_sname = getElement("err_sname");
    var err_password = getElement("err_pass");*/
    //var err_username = getElement("err_username");

    var err_sname = getElement("err_sname");
    var err_studentId = getElement("err_studentId");
    /*var err_day = getElement("err_day");
    var err_month = getElement("err_month");
    var err_year = getElement("err_year");*/
    var err_credit = getElement("err_credit");
    var err_cgpa = getElement("err_cgpa");
    var err_deptId = getElement("err_deptId");

    /*err_username.innerHTML = "";
    err_pass.innerHTML = "";*/
    //err_username.innerHTML = "";

    err_sname.innerHTML = "";
    err_studentId.innerHTML = "";
    /*err_day.innerHTML = "";
    err_month.innerHTML = "";
    err_year.innerHTML = "";*/
    err_credit.innerHTML = "";
    err_cgpa.innerHTML = "";
    err_deptId.innerHTML = "";

}

function getElement(id){
    return document.getElementById(id);
}

/*function studentValidate(){
    //alert("hello ");
    refresh1();
    var has_err=false;*/
    /*var username=getElement("username");
    var password=getElement("pass");
    var err_username=getElement("err_username");
    var err_password=getElement("err_pass");

    var username = document.forms["loginForm"]["username"].value;
    //alert(username);
    var password = document.forms["loginForm"]["pass"].value;*/

    /*var e_name = getElement("sname");
    var e_studentId = getElement("studentId");
    var err_name = getElement("err_sname");
    var err_studentId = getElement("err_studentId");

    var hasErr = false;

    if(e_name.value == ""){
        hasErr= true;
        err_name.innerHTML = "Username Required";
        e_name.focus();
        return !hasErr;
    }
    if(e_studentId.value == ""){
        hasErr= true;
        err_studentId.innerHTML = "Password Required";
        e_studentId.focus();
        return !hasErr;
    }

    return !hasErr;
}*/

/*function refresh1(){
    var err_sname = getElement("err_sname");
    var err_studentId = getElement("err_studentId");
    //var err_username = getElement("err_username");

    err_sname.innerHTML = "";
    err_studentId.innerHTML = "";
    //err_username.innerHTML = "";

}*/