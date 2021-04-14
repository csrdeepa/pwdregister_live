<!DOCTYPE html>
<html>
<head>
<title>Registeration</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">        <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>        <!-- jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>        <!-- Popper JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>        <!-- Latest compiled JavaScript -->    
 
    <link rel="stylesheet" href="<?php echo base_url("assets/css/other.css"); ?>">

</head>

<body>

<div class="login">
<div class="content"> 
<form id="login" method="get" action="login">          
    <div style="text-align: center;">
        <img  class="rounded-circle"  src="<?php echo base_url(); ?>assets/images/profile.png" width="150px" height="auto"/>
    </div>
    <div>
        <input type="text" placeholder="Username">
    </div>
    <div>
        <input type="text" placeholder="Password">
    </div>    
    <div>
        <span><input type="checkbox" >Remember me</span>
        <span><a href="#">Forgot password</a></span>
    </div>
    <div class="loginbtndiv">
        <a class="btnlogin" href="#">Login</a>
    </div>
</form>    
</div>
</div>

</body>
<html>