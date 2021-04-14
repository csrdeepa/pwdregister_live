<?php header_assets(); ?>
<div style="width: 100%;justify-content: flex-end;display: flex;">
    <a href="<?php echo base_url('users/dashboard'); ?>" class="btn btn-default btn_style"  >Back to list</a>
</div>
<form id="register_form" class="frm" method="post" action="./savedataajax" enctype='multipart/form-data'>
<div id="register_form1">

        <input type="hidden" id="registerid" name="registerid" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->id : ""?>" >  
        <div class="container reg">  
        <h1> <?php echo (isset($userdata) && !empty($userdata)) ? "Update" : "Registration"?>  Form</h1>
        <hr>  

        <fieldset class="tffont">
            <?php  $cid = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->id) : ""; // print_r ($cid); ?>
            <h2>Personal Details</h2>

            <div class="form-group">
                <label>bgah; : <span>*</span></label>  
                <input class="tfont w50" type="text" name="tfirstname" id="tfirstname" size="50" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tfirstname : ""?>" placeholder="bgah;"/>   
                <input class="tfont w50"  type="text" name="tlastname" id="tlastname" size="50"  value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tlastname : ""?>"  placeholder="filrp bgah;"/>  
            </div>
            <div class="form-group">
                <label></label>
                <input class="w50"type="text" name="efirstname" id="efirstname" size="50" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->efirstname : ""?>" placeholder="Firstname"/>      
                <input class="w50" type="text" name="elastname" id="elastname" size="50"  value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->elastname : ""?>" placeholder="Lastname"/>  
            </div>

            <div class="d_align form-group">
                <label for="dob">gpwe;j ehs; :</label>
                <input type="date" id="dob" name="dob" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->dob : ""?>">
                <label type="text" id = "age" readonly><?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->age : ""?></label>
            </div>

            <div class="d_align form-group">
                <label>ghypdk; : </label>
                <input type="radio" name="gender" id="gender" <?php echo (isset($userdata) && !empty($userdata) && reset($userdata)->gender=="female") ? "checked" : ""?> value="Female" > <span class="tfont">bgz; </span>  
                <input type="radio" name="gender" id="gender" <?php echo (isset($userdata) && !empty($userdata) && reset($userdata)->gender=="male") ? "checked" : ""?>  value="Male"> <span class="tfont">Mz; </span>   
                <input type="radio" name="gender" id="gender" <?php echo (isset($userdata) && !empty($userdata) && reset($userdata)->gender=="other") ? "checked" : ""?> value="Other" > <span class="tfont">kw;wit </span>  
            </div>
            
            <div class="d_phone form-group">
                <label>bjhiyngrp vz; : <span>*</span></label>
                <input type="tel" name="phone"  id="phone" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->phone : ""?>"/> 
                <input type="tel" name="phone2"  id="phone2" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->phone2 : ""?>"/> 
            </div>
            <div class="form-group d-flex"> 
                <label for="email">,bkapy; :</label>  
                <input type="email" name="email" id="email" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->email : ""?>"> 
            </div>

                <div class="form-group">                
                    <label class=" leftlbl">je;ij/fzth; bgah; :</label>   
                    <?php  $cgardiantype = (isset($userdata) && !empty($userdata)) ? ($userdata[0]->gardiantype) : ""; ?>                    
                    <select class="tfont" name="gardiantype" id="gardiantype" class="form-control input-lg w50">
                        <option <?php if($cgardiantype == "fname"){ echo "selected=selected"; } ?> value="fname">jbg</option>
                        <option <?php if($cgardiantype == "hname"){ echo "selected=selected"; } ?> value="hname">fbg</option>
                        <option <?php if($cgardiantype == "other"){ echo "selected=selected"; } ?> value="other">kw;wth;</option>
                    </select>                 
                    <input class="tfont w50" type="text" name="gardianname" size="50" id="gardianname" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->gardianname : ""?>"  placeholder="bgah;"/>  
                    <input class="w50" type="text" name="egardianname" id="egardianname" size="50" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->egardianname : ""?>" placeholder="Name"/>  
                </div>
                <div class="d_phone form-group">
                    <label>ghJfhtyh; bjhiyngrp :</label>
                    <input type="tel" name="gardiancontact1" class="w50" id="gardiancontact1" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->gardiancontact1 : ""?>"/> 
                    <input type="tel" name="gardiancontact2" class="w50"  id="gardiancontact2" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->gardiancontact2 : ""?>"/> 
                </div>    
                
            <div class="form-group">
                <label>jpUkz epiy :</label>    
                <select name="maritalstatus" id="maritalstatus" class="form-control input-lg w50">
                <?php  $cmaritalstatus = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->maritalstatus) : ""; ?>
                    <option <?php if(($cmaritalstatus) == 0){ echo "selected=selected"; } ?>  value="0">Select Marital Status:</option>
                    <option <?php if($cmaritalstatus == 1){ echo "selected=selected"; } ?>  value="1">Maried</option>
                    <option <?php if($cmaritalstatus == 2){ echo "selected=selected"; } ?>  value="2">Single</option>
                    <option <?php if($cmaritalstatus == 3){ echo "selected=selected"; } ?>  value="3">Other</option>
                </select>  
            </div>

            <div class="form-group">
                <label>kjk; :</label>    
                <select name="religion" id="religion" class="form-control input-lg w50">
                <?php  $creligion = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->religion) : ""; ?>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->religion) : "") == 0){ echo "selected=selected"; } ?>  value="0">Select Religion:</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->religion) : "") == 1){ echo "selected=selected"; } ?>  value="1">HINDU</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->religion) : "") == 2){ echo "selected=selected"; } ?>  value="2">MUSLIM</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->religion) : "") == 3){ echo "selected=selected"; } ?>  value="3">CHIRSTIAN</option>
                </select>  
            </div>

            <div class="form-group">
                <label>tFg;g[ :</label>    
                <select name="caste" id="caste" class="form-control input-lg w50">
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 0){ echo "selected=selected"; } ?> value="0">Select Caste:</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 1){ echo "selected=selected"; } ?> value="1">SC</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 2){ echo "selected=selected"; } ?> value="2">ST</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 3){ echo "selected=selected"; } ?> value="3">MBC</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 4){ echo "selected=selected"; } ?> value="4">BC</option>  
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 5){ echo "selected=selected"; } ?> value="5">OC</option> 
                </select>  
            </div>

            <div class="form-group">
                <label>fy;tp epiy :</label>    
                <select name="edu" id="edu" class="form-control input-lg w50">
                <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->edu) : "") == 0){ echo "selected=selected"; } ?>  value="0">Select Educational Qualification:</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->edu) : "") == 1){ echo "selected=selected"; } ?>  value="1">Not Going School</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->edu) : "") == 2){ echo "selected=selected"; } ?>  value="2">Gradguate</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->edu) : "") == 3){ echo "selected=selected"; } ?>  value="3">Post Gradguate</option>
                </select>  
            </div>

            <div class="form-group">
                <label>bjhHpy; :</label>    
                <select name="business" id="business" class="form-control input-lg w50">
                <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->business) : "") == 0){ echo "selected=selected"; } ?>   value="0">Select Business:</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->business) : "") == 1){ echo "selected=selected"; } ?>   value="1">Enterprunure</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->business) : "") == 2){ echo "selected=selected"; } ?>   value="2">Govt</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->business) : "") == 3){ echo "selected=selected"; } ?>   value="3">Unemployee</option>
                </select>  
            </div>

            <div class="d_align" id="imagepro_id">
                <label>nghl;nlh</label>
                <input type="hidden" name="proimg" id="proimg" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->profilePicpath : base_url('assets/images/placeholder-profile.png');?>" />
                <input type="file" id="myPic" name="profilePicpath" accept="image/x-png,image/gif,image/jpeg" value="" onchange="readimgpath(this);"/>
                <img id="img_view1" width="50px" height="50px" src="<?php echo (isset($userdata) && !empty($userdata)) ? base_url('uploads/photos/'.reset($userdata)->profilePicpath) : base_url('assets/images/placeholder-profile.png'); ?>" alt="your image" />
            </div>

            <div class="d_align" id="image_id">
                <label>igdhp</label>
                <input type="hidden" name="profileimg" id="profileimg" value='<?php echo (isset($userdata) && !empty($userdata)) ? "data:image/jpeg;base64,".base64_encode(reset($userdata)->profilePic) : base_url('assets/images/placeholder-profile.png'); ?>' />
                <input type="file" id="myPic" name="profilePic" accept="image/x-png,image/gif,image/jpeg,image/jpg" value="" onchange="readURLbin(this);"/>
                <img id="img_view" width="50px" height="50px" src='<?php echo (isset($userdata) && !empty($userdata)) ? "data:image/jpeg;base64,".base64_encode(reset($userdata)->profilePic) : base_url('assets/images/placeholder-profile.png'); ?>' alt="your image" />
            </div>

            <div class="d_align form-group" id="pdf_id">
                <label>Mtz';fs; :</label>
                <input type="hidden" name="pdf_at" id="pdf_at" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->pdffile : ""?>" />
                <input type="file" id="myFile" name="pdffile" accept="application/pdf" value="">
                <label id="img_viewpdf" class="pdf_l"><?php // echo (isset($userdata) && !empty($userdata)) ? base_url(reset($userdata)->pdffile) : "" ?></label>
            </div>
        </fieldset>
 
        <fieldset class="addressset">
            <span class="tfont"><h2>Kfthp</h2></span>
            <div>
                <div style="display: flex;">
                    <div style="padding-right: 10px; width:50%">
                        <div class="txtstrong">Permanent Address</div>
                        <div class="d-flex">
                        <label for="epaddress-line-1">Address</label>
                        <input type="text" name="epstreet_addres" id="epstreet_addres" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->epstreet_addres : ""?>">
                        </div>
                        <div class="d-flex">
                        <label for="epstreet_landmark">Land Mark</label>
                        <input type="text" name="epstreet_landmark" id="epstreet_landmark" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->epstreet_landmark : ""?>">
                        </div>
<!--  -->
                        <div class="d-flex">
                            <label for="epvartno">Vard No.</label>
                            <input type="text" name="epvartno" id="epvartno" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->epvartno : ""?>">
                        </div>
                        <div class="d-flex">
                            <label for="epvillage">Village</label>
                            <input type="text" name="epvillage" id="epvillage" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->epvillage : ""?>">
                        </div>
                        <div class="d-flex">
                            <label for="eppost">Post</label>
                            <input type="text" name="eppost" id="eppost" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->eppost : ""?>">
                        </div>
<!--  -->
                        <div class="address_align">
                            <div class="form-group">
                                <label for="perengstate" class="">State</label>	
                                <select name="perengstate" id="perengstate" class="form-control input-lg ">
                                <?php  $cperengstate = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->perengstate) : ""; ?>
                                    <option value=""> ------- </option>
                                    
                                    <?php
                                    foreach($states as $row)
                                    {
                                        $x="";
                                        if($cperengstate == $row->stateid){
                                        $x= "selected=selected";
                                        }
                                        echo '<option '.$x.' value="'.$row->stateid.'">'.$row->estatename.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="perengdistrict" class="">District</label>
                                <?php  $cperengdistrict = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->perengdistrict) : ""; ?>
                                <select name="perengdistrict" id="perengdistrict" class="form-control input-lg ">
                                    <option value=""> ------- </option>
                                    <?php if($cid){  
                                        foreach($dperengdistrict as $row)
                                        {
                                            $x="";
                                            if($cperengdistrict == $row->districtid){
                                            $x= "selected=selected";
                                            // echo $x, $cperengdistrict;
                                            }
                                            echo '<option '.$x.' value="'.$row->districtid.'">'.$row->edistrictname.'</option>';
                                        }
                                    } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="perengtaluk" class="">Taluk</label>		
                                <?php  $cperengtaluk = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->perengtaluk) : ""; ?>
                                <select name="perengtaluk" id="perengtaluk" class="form-control input-lg ">
                                    <option value=""> ------- </option>
                                    <?php if($cid){  
                                        foreach($dperengtaluk as $row)
                                        {
                                            $x="";
                                            if($cperengtaluk == $row->talukid){
                                            $x= "selected=selected";
                                            }
                                            echo '<option '.$x.' value="'.$row->talukid.'">'.$row->etalukname.'</option>';
                                        }
                                    } ?>
                                </select>
                            </div>
                        </div>

                        <div class="zip-wrap d-flex">
                            <label for="perengzip">Postal / Zip Code</label>
                            <input type="text" name="perengzip" id="perengzip" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->perengzip : ""?>">
                        </div>
                    </div>
                    <div style=" padding-left: 10px;  width:50%">
                    <div  class="tfont txtstrong">epue;ju Kfthp</div>
                        <div class="d-flex tfont">
                            <label for="tpstreet_addres">fjt[ vz;</label>
                            <input type="text" name="tpstreet_addres" id="tpstreet_addres" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tpstreet_addres : ""?>">
                        </div>
                        <div class="d-flex tfont">
                            <label for="tpstreet_landmark">Kfthp</label>
                            <input type="text" name="tpstreet_landmark" id="tpstreet_landmark" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tpstreet_landmark : ""?>">
                        </div>
                        <!--  -->
                        <div class="d-flex">
                            <label class="tfont" for="tpvartno">thh;L vz;</label>
                            <input type="text" class="tfont" name="tpvartno" id="tpvartno" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tpvartno : ""?>">
                        </div>
                        <div class="d-flex">
                            <label class="tfont" for="tpvillage">fpuhkk;</label>
                            <input type="text" class="tfont" name="tpvillage" id="tpvillage" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tpvillage : ""?>">
                        </div>
                        <div class="d-flex">
                            <label class="tfont" for="tppost">m";ry;</label>
                            <input type="text" class="tfont" name="tppost" id="tppost" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tppost : ""?>">
                        </div>
                        <!--  -->
                        <div class="address_align">
                        <div class="form-group">
                            <label for="pertamilstate" class="tfont">khepyk;</label>	
                            <select name="pertamilstate" id="pertamilstate" class="form-control input-lg tfont">
                            <?php  $cpertamilstate = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->pertamilstate) : "";   ?>
                                <option value=""> ------- </option>
                                <?php
                                foreach($states as $row)
                                {
                                    $x="";
                                    if($cpertamilstate == $row->stateid){
                                       $x= "selected=selected";
                                    }
                                    echo '<option '.$x.' value="'.$row->stateid.'">'.$row->statename.'</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pertamildistrict" class="tfont">khtl;lk;</label>
                            <?php  $cpertamildistrict = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->pertamildistrict) : ""; ?>
                            <select name="pertamildistrict" id="pertamildistrict" class="form-control input-lg tfont">
                                <option value=""> ------- </option>
                                <?php if($cid){  
                                    foreach($dpertamildistrict as $row)
                                    {
                                        $x="";
                                        if($cpertamildistrict == $row->districtid){
                                        $x= "selected=selected";
                                        // echo $x, $cperengdistrict;
                                        }
                                        echo '<option '.$x.' value="'.$row->districtid.'">'.$row->districtname.'</option>';
                                    }
                                } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pertamiltaluk" class="tfont">jhYf;fh</label>	
                            <?php  $cpertamiltaluk = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->pertamiltaluk) : ""; ?>
                            <select name="pertamiltaluk" id="pertamiltaluk" class="form-control input-lg tfont">
                                <option value=""> ------- </option>
                                <?php if($cid){  
                                    foreach($dpertamiltaluk as $row)
                                    {
                                        $x="";
                                        if($cpertamiltaluk == $row->talukid){
                                        $x= "selected=selected";
                                        }
                                        echo '<option '.$x.' value="'.$row->talukid.'">'.$row->talukname.'</option>';
                                    }
                                } ?>                                
                            </select>
                        </div>
                        </div>

                        <div class="zip-wrap tfont d-flex">
                            <label for="pertamilzip">m";ry; vz;</label>
                            <input type="text" name="pertamilzip" id="pertamilzip" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->pertamilzip : ""?>">
                        </div>
                    </div>
                </div>
                <div class="d_align form-group" style="align-items: baseline; padding: 25px 0px 15px;">
                    <input type="checkbox" id="filladdress" name="filladdress"  onclick="FillBilling(this)">
                    <label class="txtstrong"se for="filladdress">Same Above Address</label>
                </div>
                <div style="display: flex;" class="tempaddress">
                    <div style="padding-right: 10px;  width:50%">
                    <div class="txtstrong">Temp Address</div>
                        <div class="d-flex">
                            <label for="etaddress-line-1">Address</label>
                            <input type="text" name="etstreet_addres" id="etstreet_addres" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->etstreet_addres : ""?>">
                        </div>
                        <div class="d-flex">
                            <label for="etaddress_landmark">Land Mark</label>
                            <input type="text" name="etaddress_landmark" id="etaddress_landmark" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->etaddress_landmark : ""?>">
                        </div>
                        <!--  -->
                        <div class="d-flex">
                            <label for="etvartno">Vard No.</label>
                            <input type="text" name="etvartno" id="etvartno" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->etvartno : ""?>">
                        </div>
                        <div class="d-flex">
                            <label for="etvillage">Village</label>
                            <input type="text" name="etvillage" id="etvillage" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->etvillage : ""?>">
                        </div>
                        <div class="d-flex">
                            <label for="etpost">Post</label>
                            <input type="text" name="etpost" id="etpost" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->etpost : ""?>">
                        </div>
                        <!--  -->
                        <div class="address_align">
                        <div class="form-group">
                            <label for="tempengstate" class="">State</label>	
                            <?php  $ctempengstate = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->tempengstate) : ""; ?>
                            <select name="tempengstate" id="tempengstate" class="form-control input-lg ">
                                <option value=""> ------- </option>
                                <?php
                                foreach($states as $row)
                                {
                                    $x="";
                                    if($ctempengstate == $row->stateid){
                                       $x= "selected=selected";
                                    }
                                    echo '<option '.$x.' value="'.$row->stateid.'">'.$row->estatename.'</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tempengdistrict" class="">District</label>
                            <?php  $ctempengdistrict = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->tempengdistrict) : ""; ?>
                            <select name="tempengdistrict" id="tempengdistrict" class="form-control input-lg ">
                                <option value=""> ------- </option>
                                <?php if($cid){  
                                    foreach($dtempengdistrict as $row)
                                    {
                                        $x="";
                                        if($ctempengdistrict == $row->districtid){
                                        $x= "selected=selected";
                                        // echo $x, $cperengdistrict;
                                        }
                                        echo '<option '.$x.' value="'.$row->districtid.'">'.$row->edistrictname.'</option>';
                                    }
                                } ?>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tempengtaluk" class="">Taluk</label>	
                            <?php  $ctempengtaluk = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->tempengtaluk) : ""; ?>
                            <select name="tempengtaluk" id="tempengtaluk" class="form-control input-lg ">
                                <option value=""> ------- </option>
                                <?php if($cid){  
                                    foreach($dtempengtaluk as $row)
                                    {
                                        $x="";
                                        if( $ctempengtaluk == $row->talukid){
                                        $x= "selected=selected";
                                        }
                                        echo '<option '.$x.' value="'.$row->talukid.'">'.$row->etalukname.'</option>';
                                    }
                                } ?>                                
                            </select>
                        </div>
                        </div>
                        
                        <div class="zip-wrap  d-flex">
                            <label for="tempengzip">Postal / Zip Code</label>
                            <input type="text" name="tempengzip" id="tempengzip" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tempengzip : ""?>">
                        </div>
                    </div>
                    <div style="padding-left: 10px;  width:50%">
                    <div class="tfont txtstrong">jw;fhypf Kfthp</div>
                    <div class="d-flex tfont">
                        <label for="address-line-1">fjt[ vz;</label>
                        <input type="text" name="ttstreet_addres" id="ttstreet_addres" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->ttstreet_addres : ""?>">
                    </div>
                    <div class="d-flex tfont">
                        <label for="ttstreet_landmark">Kfthp</label>
                        <input type="text" name="ttstreet_landmark" id="ttstreet_landmark" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->ttstreet_landmark : ""?>">
                    </div>
                    <!--  -->
                    <div class="d-flex">
                            <label class="tfont" for="ttvartno">thh;L vz;</label>
                            <input type="text" class="tfont" name="ttvartno" id="ttvartno" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->ttvartno : ""?>">
                        </div>
                        <div class="d-flex">
                            <label class="tfont" for="ttvillage">fpuhkk;</label>
                            <input type="text" class="tfont" name="ttvillage" id="ttvillage" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->ttvillage : ""?>">
                        </div>
                        <div class="d-flex">
                            <label class="tfont" for="ttpost">m";ry;</label>
                            <input type="text" class="tfont" name="ttpost" id="ttpost" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->ttpost : ""?>">
                        </div>
                    <!--  -->
                    <div class="address_align">
                        <div class="form-group">
                            <label for="temptamilstate" class="tfont">khepyk;</label>	
                            <?php  $ctemptamilstate = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->temptamilstate) : ""; ?>
                            <select name="temptamilstate" id="temptamilstate" class="form-control input-lg tfont">
                                <option value=""> ------- </option>
                                <?php
                                foreach($states as $row)
                                {
                                    $x="";
                                    if($cpertamilstate == $row->stateid){
                                       $x= "selected=selected";
                                    }
                                    echo '<option '.$x.' value="'.$row->stateid.'">'.$row->statename.'</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="temptamildistrict" class="tfont">khtl;lk;</label>
                            <?php  $ctemptamildistrict = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->temptamildistrict) : ""; ?>
                            <select name="temptamildistrict" id="temptamildistrict" class="form-control input-lg tfont">
                                <option value=""> ------- </option>
                                <?php if($cid){  
                                    foreach($dtemptamildistrict as $row)
                                    {
                                        $x="";
                                        if($ctemptamildistrict == $row->districtid){
                                        $x= "selected=selected";
                                        // echo $x, $cperengdistrict;
                                        }
                                        echo '<option '.$x.' value="'.$row->districtid.'">'.$row->districtname.'</option>';
                                    }
                                } ?>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="temptamiltaluk" class="tfont">jhYf;fh</label>		
                            <?php  $ctemptamiltaluk = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->temptamiltaluk) : ""; ?>
                            <select name="temptamiltaluk" id="temptamiltaluk" class="form-control input-lg tfont">
                                <option value=""> ------- </option>
                                <?php if($cid){  
                                    foreach($dtemptamiltaluk as $row)
                                    {
                                        $x="";
                                        if($ctemptamiltaluk == $row->talukid){
                                        $x= "selected=selected";
                                        }
                                        echo '<option '.$x.' value="'.$row->talukid.'">'.$row->talukname.'</option>';
                                    }
                                } ?>                                
                            </select>
                        </div>
                        </div>
                        <div class="zip-wrap tfont d-flex">
                            <label for="temptamilzip">gpd;nfhL</label>
                            <input type="text" name="temptamilzip" id="temptamilzip" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->temptamilzip : ""?>">
                        </div>

                    </div>
                </div>

                <div class="form-group d_align tfont" style="padding-top:10px">
                        <div class="form-group d_align" style="width:50%;padding-right: 10px;">
                            <label for="sattamandram" class="tfont">rl;lkd;w bjhFjp</label>	
                            <select name="sattamandram" id="sattamandram" class="form-control input-lg tfont" autofocus>
                            <?php  $csattamandram = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->sattamandram) : ""; ?>
                                <option value=""> ------- </option>
                                <?php
                                foreach($sattamandram as $row)
                                {
                                    $x="";
                                    if($csattamandram == $row->sattamandramid){
                                       $x= "selected=selected";
                                    }
                                    echo '<option '.$x.' value="'.$row->sattamandramid.'">'.$row->sattamandramname.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group d_align" style="width:50%; padding-left: 10px;">
                            <label for="nadalumandram" class="tfont">ehlhSkd;w bjhFjp</label>	
                            <select name="nadalumandram" id="nadalumandram" class="form-control input-lg tfont">
                            <?php  $cnadalumandram = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->nadalumandram) : ""; ?>
                                <option value=""> ------- </option>
                                <?php
                                foreach($nadalumandram as $row)
                                {
                                    $x="";
                                    if($cnadalumandram == $row->nadalumandramid){
                                       $x= "selected=selected";
                                    }
                                    echo '<option '.$x.' value="'.$row->nadalumandramid.'">'.$row->nadalumandramname.'</option>';
                                }
                                ?>
                            </select>
                        </div>
                </div>
 
            </div>
        </fieldset>

        <fieldset>
            <h2>Other Details</h2>
            <div class="form-group d_align">
                <label>UDID No. </label>  
                <input type="text" name="udidno" id="udidno" size="50" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->udidno : ""?>" placeholder="UDID No."/>   
            </div>

            <div class="form-group d_align">
                <label class="tfont">eythupa thhpa vz; :</label>  
                <input type="text" name="nalavariyano" id="nalavariyano" size="50" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->nalavariyano : ""?>" placeholder="Nalavariyano No."/>   
            </div>
            <div class="form-group d_align">
                <label  class="tfont">nurd; fhh;L vz; :</label>  
                <input type="text" name="familycard" id="familycard" size="50" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->familycard : ""?>" placeholder="Family Card"/>   
            </div>
            <div class="form-group d_align">
                <label  class="tfont">Mjhh; vz; :<span>*</span></label>  
                <input type="text" name="aadhar" id="aadhar" size="50" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->aadhar : ""?>" placeholder="Aadhar"/>   
            </div>
            <div class="form-group d_align">
                <label  class="tfont">thf;fhsh; milahs vz; :</label>  
                <input type="text" name="voterid" id="voterid" size="50" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->voterid : ""?>" placeholder="voterid"/>   
            </div>
            <div class="form-group d_align">
                <label  class="tfont">ntiytha;g;g[ gjpt[ vz; :</label>  
                <input type="text" id="empregno" name="empregno" size="50" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->empregno : ""?>" placeholder="Employeement No."/>   
                <input type="date" id="empregdate" name="empregdate" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->empregdate : ""?>">
            </div>

        </fieldset>
        <?php // $chelpfromtrust = in_array("freemarriage",explode('&',($userdata[0]->helpfromtrust))) ? "yes" : "no"; //(isset($userdata) && !empty($userdata)) ? ($userdata[0]->helpfromtrust) : ""; 
        // print_r ($userdetdata[1]);
        ?>
        <fieldset> 
        <!-- https://stackoverflow.com/questions/48334913/how-to-insert-dynamic-input-values-into-the-database-using-codeigniter -->
            <span class="tfont"> <h2>FLk;g tpguk;</h2> </span>
            <div class="table-responsive">
                <table class="table table-bordered" id="crud_table">
                <thead>
                <tr>
                 <th class="tfont">t.vz;</th>
                    <th class="tfont">bgah;</th>
                    <th class="tfont">,dk;</th>
                    <th class="tfont">taJ</th>
                    <th class="tfont">cwt[Kiw</th>
                    <th class="tfont">bjhHpy;</th>
                    <th width="5%"></th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $userdetdata="";
            if(isset($userdata) && !empty($userdata)){
             $userdetdata=json_decode($userdata[0]->detdata);
            //   echo "length: ", count($userdetdata);
            }
            if($userdetdata && $userdetdata != null) {
                //  echo "length: ", count($userdetdata);
                for ($i=0; $i < count($userdetdata); $i++) { 
                    ?>
                    <tr id="row<?php echo $i+1 ?>">                    
                    <td class="tblfsno"><?php echo $i+1 ?></td>
                    <td class="tblfname"><input type="text" class="faname tfont" placeholder="bgah;" style="width:100%" value="<?php echo $userdetdata[$i]->faname ?>" /></td>
                    <td class="tblfgender">
                    <select class='fagender tfont'  style='width:auto' > 
                    <option value='fafemale'  <?php if($userdetdata[$i]->fagender == "fafemale"){ echo "selected=selected"; } ?>>bgz;</option>
                    <option value='famale'  <?php if($userdetdata[$i]->fagender == "famale"){ echo "selected=selected"; } ?>>Mz;</option>
                    <option value='faother'  <?php if($userdetdata[$i]->fagender == "faother"){ echo "selected=selected"; } ?>>kw;wit</option> 
                    </select></td>
                    <td class="tblfage"><input type="text" class="faage tfont" placeholder="taJ" style="width:60px" value = "<?php echo $userdetdata[$i]->faage ?>" /></td>
                    <td  class="tblfrelationship">
                    <select class='farelationship tfont'  style='width:100%' > 
                        <option value='famother' <?php if($userdetdata[$i]->farelationship == "famother"){ echo "selected=selected"; } ?> >mk;kh</option>
                        <option value='fafather' <?php if($userdetdata[$i]->farelationship == "fafather"){ echo "selected=selected"; } ?> >mg;gh</option>
                        <option value='fawife' <?php if($userdetdata[$i]->farelationship == "fawife"){ echo "selected=selected"; } ?> >fzth;</option>
                        <option value='fahusband' <?php if($userdetdata[$i]->farelationship == "fahusband"){ echo "selected=selected"; } ?> >kidtp</option>
                        <option value='fabrother' <?php if($userdetdata[$i]->farelationship == "fabrother"){ echo "selected=selected"; } ?> >rnfhjuh;</option>
                        <option value='fasister' <?php if($userdetdata[$i]->farelationship == "fasister"){ echo "selected=selected"; } ?> >rnfhjup</option>
                        <option value='fagrandpa' <?php if($userdetdata[$i]->farelationship == "fagrandpa"){ echo "selected=selected"; } ?> >jhj;jh</option>
                        <option value='fagrandma' <?php if($userdetdata[$i]->farelationship == "fagrandma"){ echo "selected=selected"; } ?> >ghl;o</option>
                        <option value='fagardian' <?php if($userdetdata[$i]->farelationship == "fagardian"){ echo "selected=selected"; } ?> >ghJfhtyh;</option> 
                    </select></td>
                    <td  class="tblfbusiness"><input type="text" class="fabusiness tfont" placeholder="bjhHpy;" style="width:100%" value = "<?php echo $userdetdata[$i]->fabusiness ?>" /></td>
                    <td><button type='button' name='remove' data-row='row<?php echo $i+1 ?>' class='btn btn-danger btn-xs remove'>-</button></td>
                    </tr>
                    <?php
                }


                }else{
                ?>
                    <tr>
                    <td class="tblfsno">1</td>
                    <td class="tblfname"><input type="text" class="faname tfont" placeholder="bgah;" style="width:100%" /></td>
                    <td class="tblfgender">
                    <select class='fagender tfont'  style='width:100%' class="form-control input-lg"> 
                        <option value='fafemale'>bgz;</option>
                        <option value='famale'>Mz;</option>
                        <option value='faother'>kw;wit</option> 
                    </select></td>
                    <td class="tblfage"><input type="text" class="faage tfont" placeholder="taJ" style="width:100%" /></td>
                    <td  class="tblfrelationship">
                    <select class='farelationship tfont'  style='width:100%' class="form-control input-lg"> 
                        <option value='famother'>mk;kh</option>
                        <option value='fafather'>mg;gh</option>
                        <option value='fawife'>fzth;</option>
                        <option value='fahusband'>kidtp</option>
                        <option value='fabrother'>rnfhjuh;</option>
                        <option value='fasister'>rnfhjup</option>
                        <option value='fagrandpa'>jhj;jh</option>
                        <option value='fagrandma'>ghl;o</option>
                        <option value='fagardian'>ghJfhtyh;</option> 
                    </select></td>
                    <td  class="tblfbusiness"><input type="text" class="fabusiness tfont" placeholder="bjhHpy;" style="width:100%" /></td>
                    <td></td>
                    </tr>
                <?php } ?>

                </tbody>
                </table>
                <div align="right" style="padding:10px">
                <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
                </div>
                <!-- <div align="center">     <button type="button" name="save" id="save" class="btn btn-info">Save</button>    </div> -->
            </div>
        </fieldset>
        <fieldset class="diff">
            <h2>Diff Details</h2>
            <div class="d_align" style="display: flex; ">   
                <div class="form-group">
                    <label class="tfont">khw;Wj; jpwd; jd;ik :</label>    
                    <?php  $cdftype = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype) : "";  ?>
                    <select name="dftype" id="dftype" class="form-control input-lg">
                        <option value=""> ------- </option>
                        <?php
                        foreach($dftype as $row)
                        {
                            $x="";
                            if($cdftype == $row->dfid){
                            $x= "selected=selected";
                            }
                            echo '<option '.$x.' value="'.$row->dfid.'">'.$row->dftype.'</option>';
                        }
                        ?>
                    </select>
            
                    <select name="dftype1" id="dftype1" class="dispnone">
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype1) : "") == 0){ echo "selected=selected"; } ?> value="0">Select ------</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype1) : "") == 1){ echo "selected=selected"; } ?> value="1">One hand</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype1) : "") == 2){ echo "selected=selected"; } ?> value="2" >Both hand</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype1) : "") == 3){ echo "selected=selected"; } ?> value="3">One leg</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype1) : "") == 4){ echo "selected=selected"; } ?> value="4">Both leg</option>
                    </select>  
        
                    <select name="dftype2" id="dftype2" class="dispnone">
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype2) : "") == 0){ echo "selected=selected"; } ?> value="0">Select ------</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype2) : "") == 1){ echo "selected=selected"; } ?> value="1">Above Elbow</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype2) : "") == 2){ echo "selected=selected"; } ?> value="2">Below Elbow</option>
                    </select>  
                </div>
            </div>  
            <div class="d_phone form-group">
                <label class="tfont leftlbl">khw;Wj; jpwd; rjtPjk; : </label>
                <input type="text" name="dfpercentage"  id="dfpercentage" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->dfpercentage : ""?>"/> 
            </div>
            
            <div class="d_align" style="display: flex; align-items: baseline;"> 
                <label class="tfont leftlbl">cjtpf; fUtpfs; :</label>                  
              

                    <select class="tfont" name="dfsupportmatrialusing" id="dfsupportmatrialusing">
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing) : "") == 0){ echo "selected=selected"; } ?> value="0"> ------</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing) : "") == 1){ echo "selected=selected"; } ?> value="1">KlePf;F fUtp kl;Lk; gad;gLj;Jgth;</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing) : "") == 2){ echo "selected=selected"; } ?> value="2">Cd;Wnfhy; kl;Lk; gad;gLj;Jgth;</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing) : "") == 3){ echo "selected=selected"; } ?> value="3">,uz;Lk; gad;gLj;Jgth;</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing) : "") == 4){ echo "selected=selected"; } ?> value="4">vJt[k; gad;gLj;jhjth;</option>
                    </select>  
   
             
                    <select class="tfont" name="dfsupportmatrialusing1" id="dfsupportmatrialusing1" class="dispnone">
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing1) : "") == 0){ echo "selected=selected"; } ?> value="0"> ------</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing1) : "") == 1){ echo "selected=selected"; } ?> value="1">,Lg;g[f;F fPH;</option>
                    </select>  
           

            </div> 
 
            
            <div class="form-group">
                <label class="tfont leftlbl">khw;Wj; jpwd; vw;gl;l tpjk; :</label>    
                <select class="tfont" name="dfhappendby" id="dfhappendby">
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfhappendby) : "") == 0){ echo "selected=selected"; } ?> value="0"> ------</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfhappendby) : "") == 1){ echo "selected=selected"; } ?> value="1">gpwtp Cdk;</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfhappendby) : "") == 2){ echo "selected=selected"; } ?> value="2">tpgj;J</option>
                    <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfhappendby) : "") == 3){ echo "selected=selected"; } ?> value="3">nghypnah</option>
                </select>  
            </div>
           <div class="d_align" style="display: flex; align-items: baseline;">   
                    <label class="tfont leftlbl">thfd gad;ghL epiy :</label>            
                <div class="form-group">
   
                    <select class="tfont" name="dfvehicleusage" id="dfvehicleusage">
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage) : "") == 0){ echo "selected=selected"; } ?> value="0"> ------</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage) : "") == 1){ echo "selected=selected"; } ?> value="1">,uz;L rf;fu nkhl;lhh; thfdk;</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage) : "") == 2){ echo "selected=selected"; } ?> value="2">,izg;g[r;rf;fuk; bghUj;jg;gl;l nkhl;lhh; thfdk;</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage) : "") == 3){ echo "selected=selected"; } ?> value="3">kfpH;t[e;J</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage) : "") == 4){ echo "selected=selected"; } ?> value="4">khw;wpaikf;fg;gl;l kfpH;t[e;J</option>
                    </select>  
                </div>
                <div class="form-group"> 
                    <select class="tfont" name="dfvehicleusage1" id="dfvehicleusage1">
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage1) : "") == 0){ echo "selected=selected"; } ?> value="0"> ------</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage1) : "") == 1){ echo "selected=selected"; } ?> value="1">bjhpe;jth;</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage1) : "") == 2){ echo "selected=selected"; } ?> value="2">itj;jpUg;gth;</option>
                        <option <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage1) : "") == 3){ echo "selected=selected"; } ?> value="3">Xl;Leh; chpkk;</option>
                    </select>  
                </div>

            </div>  
            <div class="d_align form-group">
                <label class="tfont leftlbl">ve;j cgfuzKk; ,y;yhky; elf;fToath; :</label>
                <input type="radio" name="walkingwithoutsupportmaterial" id="walkingwithoutsupportmaterial" <?php echo (isset($userdata) && !empty($userdata) && reset($userdata)->walkingwithoutsupportmaterial==0) ? "checked" : ""?>  value="Yes"> <span class="tfont">Mk; </span>   
                <input type="radio" name="walkingwithoutsupportmaterial" id="walkingwithoutsupportmaterial" <?php echo (isset($userdata) && !empty($userdata) && reset($userdata)->walkingwithoutsupportmaterial==1) ? "checked" : ""?> value="No" > <span class="tfont">,y;iy </span>  
            </div>
            
        </fieldset>
              <fieldset>
            <span class="tfont"><h2>cWg;gpdh; re;jh tpguk;</h2></span>

            <div class="d_align form-group">
                <label class="tfont leftlbl">cWg;gpdh; vz; cs;sjh :</label>
                <input type="radio" class='membershipradio' name="havingmembership" id="havingmembershipyes" <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->havingmembership == '1' ? 'checked=checked':'' ) : ""?>  value="1"> <span class="tfont">Mk; </span>   
                <input type="radio" class='membershipradio' name="havingmembership" id="havingmembershipno"   <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->havingmembership == '0' ? 'checked=checked':'' ) : "checked=checked"?> value="0" > <span class="tfont">,y;iy </span>  
            </div>

            <div class="form-group d_align" id="havingmembershipdiv"  <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->havingmembership == '1' ? ' style="display:block" ':' style="display:none" ' ) : ""?> > <!-- hide -->
                <label  class="tfont leftlbl">cWg;gpdh; vz; :</label>  
                <input type="text" id="membershipnumber" name="membershipnumber" size="50" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->membershipnumber : ""?>" placeholder=""/>   
                <input type="date" id="membershipdate" name="membershipdate" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->membershipdate : ""?>">
            </div>

            
            <div class="d_align form-group">
                <label class="tfont leftlbl">elg;g[ Mz;L re;jh brYj;jpa[s;sPuh :</label>
                <input type="radio" class='membershipfeeradio' name="membershipfeespaid" id="membershipfeespaidyes" <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->membershipfeespaid == '1' ? 'checked=checked':'' ) : ""?>  value="1"> <span class="tfont">Mk; </span>   
                <input type="radio" class='membershipfeeradio' name="membershipfeespaid" id="membershipfeespaidno"   <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->membershipfeespaid == '0' ? 'checked=checked':'' ) : "checked=checked"?> value="0" > <span class="tfont">,y;iy </span>  
            </div>

            <div class="form-group d_align " id="membershipfeespaiddiv" <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->membershipfeespaid == '1' ? ' style="display:block" ':' style="display:none" ' ) : ""?>> <!-- hide -->
                <label  class="tfont leftlbl">urPJ vz; :</label>  
                <input type="text" id="membershipreceiptno" name="membershipreceiptno" size="50" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->membershipreceiptno : ""?>" placeholder=""/>   
                <input type="date" id="membershipreceiptdate" name="membershipreceiptdate" value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->membershipreceiptdate : ""?>">
            </div>
            
            <!-- <div class="form-group d_align "> 
                <label><input type="radio" name="post-format" id="post-format-gallery">Show gallery</label>
                <label><input type="radio" name="post-format" checked>Hide gallery</label>
                <div id="gallery-box" style="border: 1px solid red;">The Gallery</div>
           </div>             -->
        </fieldset>  
        <fieldset>
            <span class="tfont"><h2>r';fj;jpd; _yk; cjtpfs;</h2></span>

            <div id="helpfromtrust" class="d_align" style="display: flex; align-items: baseline;">
                <label class="hobbi tfont ">jpl;l';fs; :</label>
                <input type="checkbox"  name="helpfromtrust[]" <?php echo (isset($userdata) && !empty($userdata) && in_array("freemarriage",explode(',',reset($userdata)->helpfromtrust)) ) ? "checked" : ""?> value="freemarriage"><label class="tfont" for="help1">,ytr jpUkzk;</label>
                <input type="checkbox"  name="helpfromtrust[]" <?php echo (isset($userdata) && !empty($userdata) && in_array("selfemp",explode(',',reset($userdata)->helpfromtrust))) ? "checked" : ""?> value="selfemp"><label class="tfont" for="help2">RabjhHpy; ntiy tha;g;g[</label>
                <input type="checkbox"  name="helpfromtrust[]" <?php echo (isset($userdata) && !empty($userdata) && in_array("eduhelp",explode(',',reset($userdata)->helpfromtrust))) ? "checked" : ""?> value="eduhelp"><label class="tfont" for="help3">fy;tp cjtpj;bjhif</label>
                <input type="checkbox"  name="helpfromtrust[]" <?php echo (isset($userdata) && !empty($userdata) && in_array("nalathittam",explode(',',reset($userdata)->helpfromtrust))) ? "checked" : ""?> value="nalathittam"><label class="tfont" for="help3">eyj;jpl;l cjtpfs;</label>
            </div>
            <div class="form-group d_align">
                <label  class="tfont">,ju jpl;l';fs; :</label>  
                <textarea class="tfont" style="width:50%"  type="textarea " id="otherhelpfromtrust" name="otherhelpfromtrust" size="50" value="otherhelpfromtrust" placeholder="jkpHpy;"><?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->otherhelpfromtrust : ""?></textarea>
                <textarea style="margin-left:25px;width:50%" type="textarea " id="otherhelpfromtrusteng" name="otherhelpfromtrusteng" size="50" value="otherhelpfromtrusteng" placeholder="in english"><?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->otherhelpfromtrusteng : ""?></textarea>   
            </div>
        </fieldset>               
        <fieldset>
            <span class="tfont"><h2>kw;wit</h2></span>

            <div id="hobbies" class="d_align" style="display: flex; align-items: baseline;">
                <label class="hobbi tfont ">bghGJ nghf;F :</label>
                <!-- <input type="checkbox"  name="hobbies[]" <?php // echo (isset($userdata) && !empty($userdata) && in_array("chess",explode('&',reset($userdata)->hobbies)) ) ? "checked" : ""?> value="chess"><label for="hob1">Playing Chess</label>
                <input type="checkbox"  name="hobbies[]" <?php // echo (isset($userdata) && !empty($userdata) && in_array("books",explode('&',reset($userdata)->hobbies))) ? "checked" : ""?> value="books"><label for="hob2">Reading Books</label>
                <input type="checkbox"  name="hobbies[]" <?php // echo (isset($userdata) && !empty($userdata) && in_array("music",explode('&',reset($userdata)->hobbies))) ? "checked" : ""?> value="music"><label for="hob3">Music</label>
                <input type="checkbox"  name="hobbies[]" <?php // echo (isset($userdata) && !empty($userdata) && in_array("cooking",explode('&',reset($userdata)->hobbies))) ? "checked" : ""?> value="cooking"><label for="hob3">Cooking</label> -->

                <input type="checkbox"  name="hobbies[]" <?php echo (isset($userdata) && !empty($userdata) && in_array("chess",explode(',',reset($userdata)->hobbies)) ) ? "checked" : ""?> value="chess"><label for="hob1">Playing Chess</label>
                <input type="checkbox"  name="hobbies[]" <?php echo (isset($userdata) && !empty($userdata) && in_array("books",explode(',',reset($userdata)->hobbies))) ? "checked" : ""?> value="books"><label for="hob2">Reading Books</label>
                <input type="checkbox"  name="hobbies[]" <?php echo (isset($userdata) && !empty($userdata) && in_array("music",explode(',',reset($userdata)->hobbies))) ? "checked" : ""?> value="music"><label for="hob3">Music</label>
                <input type="checkbox"  name="hobbies[]" <?php echo (isset($userdata) && !empty($userdata) && in_array("cooking",explode(',',reset($userdata)->hobbies))) ? "checked" : ""?> value="cooking"><label for="hob3">Cooking</label>
            </div>
            
        </fieldset>  
        <div style="text-align: center;">
            <input type="submit" name="btnsave" class="registerbtn" value="<?php echo (isset($userdata) && !empty($userdata)) ? "Update" : "Submit"?>" />
            <!-- <button type="submit" class="btn btn-primary" id="btnsave">Submit</button> -->
        </div>
</div>
    </form>
    