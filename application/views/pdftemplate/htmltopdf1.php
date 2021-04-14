
<html>
<head>
    <title>Generate PDF using Dompdf</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<body>
	<div class="container box" style="width:50%">
		<h2 class="text-center text-primary">Registration</h3>
		<br />
		
		<table width="100%" cellspacing="35" cellpadding="35">
		<?php foreach($customer_details as $row){ ?>
			<tr>
		  	    <td width="50%"><img width="250px" height="250px" src="http://devdomain:8046/register1/uploads/photos/<?php echo $row->profilePicpath ?>"/></td>
				<td style="float:Right">
					<p><b>First Name : </b> <?php echo $row->efirstname ?> </p>
					<p><b>Last Name : </b> <?php echo $row->elastname ?></p>
					<p><b>Date Of Birth : </b>  <?php echo $row->dob ?></p>
					<p><b>Gender : </b> <?php echo $row->gender ?></p>
					<p><b>Phone : </b> <?php echo $row->phone ?></p>
					<p><b>Email : </b> <?php echo $row->email ?> </p>
				</td>
			</tr>
		<?php }?>
		</table>
		
	</div>
</body>
</html>