<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
header("location: /users/userlogin");
}
?>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
<div id="login">
<h2>Registration Form</h2>
<?php
echo "<div class='error_msg'>";
echo validation_errors();
echo "</div>";
echo form_open('users/signup');

echo form_label('Create Username : ');
echo"<br/>";
echo form_input('username');
echo "<div class='error_msg'>";
if (isset($message_display)) {
echo $message_display;
}
echo "</div>";
echo"<br/>";
echo form_label('Email : ');
echo"<br/>";
$data = array(
'type' => 'email',
'name' => 'email_value'
);
echo form_input($data);
echo"<br/>";
echo"<br/>";
echo form_label('Password : ');
echo"<br/>";
echo form_password('password');
echo"<br/>";
echo"<br/>";
echo form_label('User Role : ');
echo"<br/>";
// echo form_input('userrole_id');
// print_r( $userrole[1]->userrole);

$options=[];
for ($i=0; $i <count($userrole) ; $i++) { 
    $options[$userrole[$i]->userroleid]= ($userrole[$i]->userrole);
}

echo form_dropdown('userrole_id', $options, 'admin');
echo"<br/>";
echo"<br/>";
echo form_submit('submit', 'Sign Up');
echo form_close();
?>
<a href="<?php echo base_url() ?>users ">Login Here</a>
</div>
</div>
</body>
</html>