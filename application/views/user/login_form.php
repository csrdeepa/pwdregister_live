<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

// header("location: /users/userlogin");
}
?>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/login.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>
<div id="main">
<div id="login">
<h2>Login Form</h2>
<div style="padding-top: 30px;">
<?php echo form_open('users/userlogin'); ?>
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
<label>UserName :</label>
<input type="text" name="username" id="name" placeholder="username"/><br /><br />
<label>Password :</label>
<input type="password" name="password" id="password" placeholder="**********"/><br/><br />
<input type="submit" value="Login" name="submit"/><br />
<a href="<?php echo base_url() ?>users/signup">Sign Up</a>
<?php echo form_close(); ?>
</div>
</div>
</div>
</body>
</html>