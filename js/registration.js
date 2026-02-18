function validate123()
{
    alert("Please Login");
    var fn=document.getElementById('fn').value;
    var ln=document.getElementById('ln').value;
    var em=document.getElementById('em').value;
    var pwd=document.getElementById('pwd').value;
    var cpwd=document.getElementById('cpwd').value;
    var no=document.getElementById('mno1').value;
    
    if(fn!="")
    {
        var fn123=/^[a-zA-Z ]*$/;
        var a=fn123.test(fn);
        if(a==false)
        {
            alert("First name must contain only letters");
            document.getElementById('fn').focus();
            document.getElementById('fn1').innerHTML="Full name must contain only letters";
            document.getElementById('fn1').style.color="red";
            document.getElementById('fn').style.borderColor="red";
            vfn="false";
        }
        else
        {
            document.getElementById('fn1').innerHTML="";
            document.getElementById('fn').style.borderColor="green";
            vfn="true";
        }
    }

    if(ln!="")
    {
        var ln123=/^[a-zA-Z ]*$/;
        var b=ln123.test(ln);
        if(b==false)
        {
            alert("Last name must contain only letters");
            document.getElementById('ln').focus();
            document.getElementById('ln1').innerHTML="Full name must contain only letters";
            document.getElementById('ln1').style.color="red";
            document.getElementById('ln').style.borderColor="red";
            vln="false";
        }
        else
        {
            document.getElementById('ln1').innerHTML="";
            document.getElementById('ln').style.borderColor="green";
            vln="true";
        }
    }

    if(em!="")
    {
        var em123=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
        var c=em123.test(em);
        if(c==false)
        {
            alert("Invalid Email address Please Enter Valid Email Address");
            document.getElementById('em').focus();
            document.getElementById('mail1').innerHTML="Invalid Email address Please Enter Valid Email Address";
            document.getElementById('mail1').style.color="red";
            document.getElementById('em').style.borderColor="red";
            vem="false";
        }
        else
        {
            document.getElementById('mail1').innerHTML="";
            document.getElementById('em').style.borderColor="green";
            vem="true";
        }
    }

    if(pwd!="")
    {
        re = /[0-9]/;
        re1 = /[a-z]/;
        re2 = /[A-Z]/;
        re3=/[!@#\$%\^\&*+=._-]/;
        var a1=pwd.length<6;
        var a2=pwd.length>15;
        var a3=re.test(pwd);
        var a4=re1.test(pwd);
        var a5=re2.test(pwd);
        var a6=re3.test(pwd);
        if(a1==true||(a2==true)||(a3==false)||(a4==false)||(a5==false)||(a6==false))
        {
            alert("Password length must be 6 to 15 charachters and must contain one small and capital letter a digit and special character");
            document.getElementById('pwd').focus();
            document.getElementById('passw').innerHTML="Password length must be 6 to 15 charachters and must contain one small and capital letter a digit and special character";
            document.getElementById('pwd').style.color="red";
            document.getElementById('pwd').style.borderColor="red";
            vpwd="false";
        }
        else
        {
            document.getElementById('passw').innerHTML="";
            document.getElementById('pwd').style.borderColor="green";
            vpwd="true";
        }
    }
    if(cpwd!=pwd)
    {
        alert("Password and Confirm Password are does not match");
        document.getElementById('cpwd').focus();
        document.getElementById('cpassw').innerHTML="Password and Confirm Password are does not match";
        document.getElementById('cpwd').style.color="red";
        document.getElementById('cpwd').style.borderColor="red";
        vcpwd="false"; 
    }
    else
    {
        document.getElementById('cpassw').innerHTML="";
        document.getElementById('cpwd').style.borderColor="green";
        vcpwd="true";
    }

    if(no!="")
    {
        var no123=/^[0-9 ]{10}*$/;
        var d=no123.test(no);
        if(d==false)
        {
            alert("Invalid Mobile Number Please Enter Valid Mobile Number");
            document.getElementById('no').focus();
            document.getElementById('mno1').innerHTML="Invalid Mobile Number Please Enter Valid Mobile Number";
            document.getElementById('mno1').style.color="red";
            document.getElementById('no').style.borderColor="red";
            vno="false";
        }
        else
        {
            document.getElementById('mno1').innerHTML="";
            document.getElementById('no').style.borderColor="green";
            vno="true";
        }
    }

    if(vem=="true" && vno=="true" && vpwd=="true" && vfn=="true" && vln=="true" && vcpwd=="true")
    {
        return true;
    }
    else
    {
        return false;
    } 
}

function demo(y)
{
    var url = "check_email.php?emailid=" + y.value ;
    if (window.XMLHttpRequest)
    {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET",url,false);
    xmlhttp.send(null);
    if(xmlhttp.responseText!="noerror")
    {
        alert("Email ID is Already registered Please Enter a new Email address");  
        document.getElementById('em').value="";
        document.getElementById('em').focus();
    }
}