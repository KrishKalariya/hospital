function validate123()
{
    var npwd=document.getElementById('npassw').value;
    var cpwd=document.getElementById('cpassw').value;
    if(npwd!="")
    {
        re = /[0-9]/;
        re1 = /[a-z]/;
        re2 = /[A-Z]/;
        re3=/[!@#\$%\^\&*+=._-]/;
        var a1=npwd.length<6;
        var a2=npwd.length>15;
        var a3=re.test(npwd);
        var a4=re1.test(npwd);
        var a5=re2.test(npwd);
        var a6=re3.test(npwd);
        if(a1==true||(a2==true)||(a3==false)||(a4==false)||(a5==false)||(a6==false))
        {
            alert("Password length must be 6 to 15 charachters and must contain one small and capital letter a digit and special character");
            document.getElementById('npwd').focus();
            document.getElementById('npassw').innerHTML="Password length must be 6 to 15 charachters and must contain one small and capital letter a digit and special character";
            document.getElementById('npwd').style.color="red";
            document.getElementById('npwd').style.borderColor="red";
            vnpwd="false";
        }
        else
        {
            document.getElementById('npassw').innerHTML="";
            document.getElementById('npwd').style.borderColor="green";
            vnpwd="true";
        }
    }
    if(cpwd!=npwd)
    {
        alert("password and confirm password must be same");
        document.getElementById('cpwd').focus();
        document.getElementById('cpassw').innerHTML="password and confirm password must be same";
        document.getElementById('cpassw').style.color="red";
        document.getElementById('cpwd').style.borderColor="red";
        vcpwd="false";
    }
    else
    {
        document.getElementById('cpassw').innerHTML="";
        document.getElementById('cpwd').style.borderColor="green";
        vcpwd="true";
    }
    if(vnpwd=="true" && vcpwd=="true")
    {
        return true;
    }
    else
    {
        return false;
    }
}