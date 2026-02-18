function validate123() {
    //alert("welcome to js");

    var pwd = document.getElementById('pass').value;
    var pwd1 = document.getElementById('password1').value;
    //alert("welcome to js");

    if (pwd == "") {
        document.getElementById('passw').innerHTML = "Password field cannot be empty";
        document.getElementById('passw').style.color = "red";
        document.getElementById('pass').style.borderColor = "red";
        var vpwd = "false";
    } else {
        re = /[0-9]/;
        re1 = /[a-z]/;
        re2 = /[A-Z]/;
        re3 = /[!@#\$%\^\&*+=._-]/;
        var a1 = pwd.length < 6;
        var a2 = pwd.length > 15;
        var a3 = re.test(pwd);
        var a4 = re1.test(pwd);
        var a5 = re2.test(pwd);
        var a6 = re3.test(pwd);
        if (a1 == true || (a2 == true) || (a3 == false) || (a4 == false) || (a5 == false) || (a6 == false)) {
            document.getElementById('pass').focus();
            var msgpwd =
                "Password length must be 6 to 15 charachters and must contain one small and capital letter a digit and special character";
            document.getElementById('passw').innerHTML = msgpwd;
            document.getElementById('passw').style.color = "red";
            document.getElementById('pass').style.borderColor = "red";
            var vpwd = "false";
            //alert(vpwd);
        } else {
            var msgpwd = "";
            document.getElementById('passw').innerHTML = msgpwd;
            document.getElementById('pass').style.borderColor = "green";
            vpwd = "true";
        }
    }
    if (pwd1 == "") {
        document.getElementById('passw1').innerHTML = "Confirm Password field cannot be empty";
        document.getElementById('passw1').style.color = "red";
        document.getElementById('password1').style.borderColor = "red";
        var vpwd1 = "false";
    } else {
        if (pwd1 != pwd) {
            document.getElementById('password1').focus();
            document.getElementById('passw1').innerHTML = "Password and Confirm Password must be same";
            document.getElementById('passw1').style.color = "red";
            document.getElementById('password1').style.borderColor = "red";
            vpwd1 = "false";
        } else {
            document.getElementById('passw1').innerHTML = "";
            document.getElementById('password1').style.borderColor = "green";
            vpwd1 = "true";
        }
    }

    if (vpwd == "true" && vpwd1 == "true") {
        return true;
    } else {
        return false;
    }
}