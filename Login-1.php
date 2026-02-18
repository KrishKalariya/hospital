<?php
session_start();
include_once("header.php");
include_once("connection.php");


if(isset($_SESSION['uname']) && isset($_SESSION['pwd']))
{
  if($_SESSION['uname']=="janki.kansagra@rku.ac.in")
  {
    echo "<script type='text/javascript'> window.location='admin_login_action.php';</script>";
  }
  else
  {
    echo "<script type='text/javascript'> window.location='login_action.php';</script>";
  }

}


if(isset($_POST['s']))
{
  $em=$_POST['eid'];
  $pass=$_POST['pwd1'];


$q="select * from registration where Email='$em' and Password='$pass'";
$res=mysqli_query($con,$q);
$count=mysqli_num_rows($res);
// while($f=mysqli_fetch_array($res))
// {
if($count==1)
{ 
    $_SESSION['uname']=$em;
    $_SESSION['pwd']=$pass;
   
    if($_SESSION['uname'] == "janki.kansagra@rku.ac.in")
    {
    echo "<script type='text/javascript'> window.location='admin_login_action.php';</script>";
    }
    else
    {
      echo "<script type='text/javascrit'> window.location='login_action.php</script>";
    }
  }  

}
?>
<br/>
<br/>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-12 col-sm-12">
	
</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-sm-12" style="border: 2px;">
	<h1 align="center" style="background-color: #251f36; color:white;padding-bottom: 10px;"> Login</h1>
	<form action="Login.php" method="post">  
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="eid">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd1">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <div class="form-group">
   <a href="forget_pwd_form.php"> <label >Forgot Password</label></a>
  
  </div>
  <button type="submit" class="btn btn-primary" name="s">Submit </button>
	</form>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 col-sm-12">
	
</div>
</div>

<?php
include_once("Footer.php");
?>