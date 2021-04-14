<html>

<head>
    <title>Registeration form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>

<body>
    <div class="container box">
        <input type="hidden" id="base" value="<?php echo base_url(); ?>">
        <h2 class="text-center text-primary">Application</h3>
            <br />

            <?php
            
			$base_url= base_url();
		if(isset($taluklist)){
			$array=$taluklist[0];
			// print_r ($taluklist);
			// print_r ($array);
			?>

            <div style="width:75%; margin: auto; border: 1px solid #f2f2f2; position: relative; padding: 15px;">
                <div style="font-size:18px; color:#000; font-family:roboto;">
                <div class="photo" style="position: absolute; top: 0; right: 0; padding-top: 20px;">
                    <img id="" width="138px" height="190px"
                        src="<?php echo  $array->profilePicpath ? base_url('uploads/photos/').$array->profilePicpath : base_url('assets/images/placeholder-profile.png'); ?>"
                    alt="image" />
                   
                </div>
                    <div>
                        <label>Code :</label>
                        <label> <?php echo $array->ucode ?> </label>
                    </div>
                    <div>
                        <label>Name (in english) :</label>
                        <label> <?php echo $array->efirstname . " " . $array->elastname  ?> </label>
                    </div>
                    <div>
                        <label>Name :</label>
                        <label> <?php echo $array->tfirstname . " " . $array->tlastname  ?> </label>
                    </div>
                    <div>
                        <label>DOB :</label>
                        <label> <?php echo $array->dob ?> </label>
                        <label>Age :</label>
                        <label> <?php echo $array->age ?> </label>
                    </div>
                    <div>
                        <label>Email :</label>
                        <label> <?php echo $array->email ?> </label>
                    </div>
                    <div>
                        <label>Gender :</label>
                        <label> <?php echo $array->gender ?> </label>
                    </div>
                    <div>
                        <label>Phone :</label>
                        <label> <?php echo $array->phone . " " . $array->phone2  ?> </label>
                    </div>
                    <div>
                        <label>Gardianname :</label>
                        <label> <?php echo $array->gardiantype . "/ " . $array->egardianname   ?> </label>
                    </div>
                    <div>
                        <label>Gardian Phone :</label>
                        <label> <?php echo $array->gardiancontact1 . " " . $array->gardiancontact2   ?> </label>
                    </div>
                    <div>
                        <label>Marital status :</label>
                        <label> <?php echo $array->maritalstatus  ?> </label>
                    </div>
                    <div>
                        <label>Religion :</label>
                        <label> <?php echo $array->religion  ?> </label>
                    </div>
                    <div>
                        <label>Caste :</label>
                        <label> <?php echo $array->caste  ?> </label>
                    </div>
                    <div>
                        <label>Edu :</label>
                        <label> <?php echo $array->edu  ?> </label>
                    </div>
                    <div>
                        <label>Business :</label>
                        <label> <?php echo $array->business  ?> </label>
                    </div>
                    <div class="peraddress">
                        <div>
                            <label>Address :</label>
                            <label> <?php echo $array->tpstreet_addres  ?> </label>
                            <label> <?php echo $array->tpstreet_landmark  ?> </label>
                            <label> <?php echo $array->tpvartno  ?> </label>
                            <label> <?php echo $array->tpvillage  ?> </label>
                            <label> <?php echo $array->tppost  ?> </label>
                            <label> <?php echo $array->talukname  ?> </label>
                            <label> <?php echo $array->districtname  ?> </label>
                            <label> <?php echo $array->statename  ?> </label>
                        </div>
                        <div>
                            <label>Address :</label>
                            <label> <?php echo $array->tpstreet_addres  ?> </label>
                            <label> <?php echo $array->tpstreet_landmark  ?> </label>
                            <label> <?php echo $array->tpvartno  ?> </label>
                            <label> <?php echo $array->tpvillage  ?> </label>
                            <label> <?php echo $array->tppost  ?> </label>
                            <label> <?php echo $array->talukname  ?> </label>
                            <label> <?php echo $array->districtname  ?> </label>
                            <label> <?php echo $array->statename  ?> </label>
                        </div>
                    </div>

            </div>
            <!-- <div class="photo" style="position: absolute; top: 0; right: 0; padding: 15px;">
            <label>Photo</label>
                <div style="display: grid; text-align: center;">
                    <img id="" width="138px" height="190px"
                        src="< ?php echo  $array->profilePicpath ? $base_url.'uploads/photos/'.$array->profilePicpath : $base_url.'assets/images/placeholder-profile.png'; ?>"
                        alt="image" />
                    
                </div>
            </div> -->
    </div>
    <?php
		}
		?>
    </div>
</body>

</html>