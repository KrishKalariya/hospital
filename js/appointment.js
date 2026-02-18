function validate123()
{
    var name=document.getElementById('n').value;
    var email=document.getElementById('e').value;
    var no=document.getElementById('m').value;

    if(name!="")
    {
        var name123=/^[a-zA-Z ]*$/;
        var a=name123.test(n);
        if(a==false)
        {
            alert("First name must contain only letters");
            document.getElementById('n').focus();
            document.getElementById('n1').innerHTML="Full name must contain only letters";
            document.getElementById('n1').style.color="red";
            document.getElementById('n').style.borderColor="red";
            vname="false";
        }
        else
        {
            document.getElementById('n1').innerHTML="";
            document.getElementById('n').style.borderColor="green";
            vname="true";
        }
    }

    if(email!="")
    {
        var email123=/^([a-z0-9_\-\.]+)@([a-z0-9_\-\.]+)\.([a-z]{2,5})$/;
        var b=email123.test(e);
        if(b==false)
        {
            alert("Invalid Email address Please Enter Valid Email Address");
            document.getElementById('e').focus();
            document.getElementById('e1').innerHTML="Invalid Email address Please Enter Valid Email Address";
            document.getElementById('e1').style.color="red";
            document.getElementById('e').style.borderColor="red";
            vemail="false";
        }
        else
        {
            document.getElementById('e1').innerHTML="";
            document.getElementById('e').style.borderColor="green";
            vemail="true";
        }
    }

    if(mno!="")
    {
        var mno123=/^[0-9 ]{10}*$/;
        var c=mno123.test(m);
        if(c==false)
        {
            alert("Invalid Mobile Number Please Enter Valid Mobile Number");
            document.getElementById('m').focus();
            document.getElementById('m1').innerHTML="Invalid Mobile Number Please Enter Valid Mobile Number";
            document.getElementById('m1').style.color="red";
            document.getElementById('m').style.borderColor="red";
            vmno="false";
        }
        else
        {
            document.getElementById('m1').innerHTML="";
            document.getElementById('m').style.borderColor="green";
            vmno="true";
        }
    }

    if(vname=="true" && vemail=="true" && vmno=="true")
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