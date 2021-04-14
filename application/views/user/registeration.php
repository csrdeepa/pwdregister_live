<?php
add_assets('header', array(    
    '<link rel="stylesheet" type="text/css" href="'.base_url('assets/css/frmstyle.css').'">',
));
?>
<div style="width: 100%;justify-content: flex-end;display: flex;" class="container">
    <a href="<?php echo base_url('users/dashboard'); ?>" class="btn btn-default btn_style">Back to list</a>
</div>
<form id="register_form" class="frm" method="post" action="./savedataajax" enctype='multipart/form-data'>
    <div id="register_form1">

        <input type="hidden" id="registerid" name="registerid"
            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->id : ""?>">
        <div class="container reg">
            <div class="col-12">
                <h1> <?php echo (isset($userdata) && !empty($userdata)) ? "Update" : "Registration"?> Form</h1>
            </div>
            <hr>
            <fieldset class="col-12">
                <?php  $cid = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->id) : ""; // print_r ($cid); ?>
                <div class="disflx">
                    <h2>Personal Details</h2>
                </div>
                <div class="col-12 disflx  pl0 resp3">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                        <input
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tfirstname : ""?>"
                            class="tfont" name="tfirstname" id="tfirstname" placeholder=" " type="text">
                        <label class="tfont">Kjy; bgah; <span class="manitary">*</span></label>
                    </div>
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                        <input
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tlastname : ""?>"
                            class="tfont" name="tlastname" id="tlastname" placeholder=" " type="text">
                        <label class="tfont">filrp bgah; </label>
                    </div>
                </div>

                <div class="col-12 disflx pl0 resp3">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3 dispinlinetbl">
                        <input
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->efirstname : ""?>"
                            name="efirstname" id="efirstname" placeholder=" " type="text">
                        <label class="aftererror">Firstname <span class="manitary">*</span></label>
                    </div>
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                        <input
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->elastname : ""?>"
                            name="elastname" id="elastname" placeholder=" " type="text">
                        <label>Lastname </label>
                    </div>
                </div>
                <div class="disflx pl0 resp3 pt20 resdisflx col-md-12 col-xs-12">
                    <div class="material-textfield pl0 col-md-3 col-xs-3">
                        <input type="date" id="dob" name="dob" max="<?php echo date('Y-m-d')?>" 
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->dob : ""?>" >
                        <label class="tfont" for="dob">gpwe;j njjp : </label>
                    </div>
                    <div class="material-textfield col-md-3 col-xs-3 pl0 resp3">
                        <label type="text" class="tfont" id="age" readonly> taJ :
                            <span> <?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->age : ""?>
                            </span></label>
                    </div>
                </div>

                <div class="col-12 disflx pl0 resp3">
                    <div class="material-textfield col-md-12 col-xs-12 disflx pl0 resp3 resdisflx pt20" style="margin-bottom: 23px;">
                        <label class="tfont pl0 resp3 lblresetstyle">ghypdk; :</label>
                        <div class="disflx resdisblock">
                            <div style="display:flex; align-items: center; padding-right: 20px;">
                                <input type="radio" name="gender" id="gender"
                                    <?php echo (isset($userdata) && !empty($userdata) && reset($userdata)->gender=="female") ? "checked" : ""?>
                                    value="Female"> <span class="tfont">bgz; </span>
                            </div>
                            <div style="display:flex align-items: center; padding-right: 20px;">
                                <input type="radio" name="gender" id="gender"
                                    <?php echo (isset($userdata) && !empty($userdata) && reset($userdata)->gender=="male") ? "checked" : ""?>
                                    value="Male"> <span class="tfont">Mz; </span>
                            </div>
                            <div style="display:flex align-items: center; padding-right: 20px;">
                                <input type="radio" name="gender" id="gender"
                                    <?php echo (isset($userdata) && !empty($userdata) && reset($userdata)->gender=="other") ? "checked" : ""?>
                                    value="Other"> <span class="tfont">kw;wit </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 disflx  pl0 resp3">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3 dispinlinetbl">
                        <input
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->phone : ""?>"
                            class="tfont propdecimal10" name="phone" id="phone" placeholder=" " type="tel">
                        <label class="tfont aftererror">bjhiyngrp vz; <span class="manitary">*</span></label>
                    </div>
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3 dispinlinetbl">
                        <input
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->phone2 : ""?>"
                            class="tfont propdecimal10" name="phone2" id="phone2" placeholder=" " type="tel">
                        <label class="tfont aftererror">bjhiyngrp vz; </label>
                    </div>
                </div>

                <div class="col-12 disflx  pl0 resp3">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                        <input
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->email : ""?>"
                            name="email" id="email" placeholder=" " type="email">
                        <label class="tfont aftererror">,bkapy; </label>
                    </div>
                </div>

                <!-- #Gardian -->
                <div class="col-12 disflx  pl0 resp3">
                    <div class="material-textfield col-md-12 col-xs-12 pl0 resp3">
                        <label class="tfont lblresetstyle">je;ij (m) fzth; bgah;
                            :</label>
                        <div class="col-12 disflx  pl0 pr0 resp3">
                            <div class="material-textfield col-md-2 col-xs-12 pl0 resp3" style="margin-top: 0px;">
                                <?php  $cgardiantype = (isset($userdata) && !empty($userdata)) ? ($userdata[0]->gardiantype) : ""; ?>
                                <select class="tfont" name="gardiantype" id="gardiantype" class="" style="max-width: 85px;">
                                    <option class="tfont" <?php if($cgardiantype == "fname"){ echo "selected=selected"; } ?>
                                        value="fname">jbg</option>
                                    <option class="tfont" <?php if($cgardiantype == "hname"){ echo "selected=selected"; } ?>
                                        value="hname">fbg</option>
                                    <option class="tfont" <?php if($cgardiantype == "other"){ echo "selected=selected"; } ?>
                                        value="other">kw;wth;</option>
                                </select>
                            </div>
                            <div class="material-textfield col-md-5 col-xs-12 pl0 resp3" style="margin-top: 0px;">
                                <input class="tfont" type="text" name="gardianname" id="gardianname"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->gardianname : ""?>"
                                    placeholder=" " />
                                <label class="tfont">bgah; jkpHpy; </label>
                            </div>
                            <div class="material-textfield col-md-5 col-xs-12 pl0 pr0 resp3" style="margin-top: 0px;">
                                <input class="" type="text" name="egardianname" id="egardianname"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->egardianname : ""?>"
                                    placeholder=" " />
                                <label>in english </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- @Gardian -->

                <div class="col-12 disflx  pl0 resp3">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3 dispinlinetbl">
                        <input
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->gardiancontact1 : ""?>"
                            class="tfont propdecimal10" name="gardiancontact1" id="gardiancontact1" placeholder=" " type="tel">
                        <label class="tfont aftererror">ghJfhtyh; bjhiyngrp</label>
                    </div>
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3 dispinlinetbl">
                        <input
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->gardiancontact2 : ""?>"
                            class="tfont propdecimal10" name="gardiancontact2" id="gardiancontact2" placeholder=" " type="tel">
                        <label class="tfont aftererror">ghJfhtyh; bjhiyngrp </label>
                    </div>
                </div>

                <div class="col-12 disflx  pl0 resp3">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                        <?php  $cmaritalstatus = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->maritalstatus) : ""; ?>
                        <select name="maritalstatus" id="maritalstatus"
                            class="<?php if(($cmaritalstatus) != 0){ echo "lblclass"; } ?>"
                            onchange="this.options[this.selectedIndex].value ? this.classList.add('lblclass') : this.classList.remove('lblclass')">
                            <option <?php if(($cmaritalstatus) == 0){ echo "selected=selected"; } ?> value="0">---
                            </option>
                            <option <?php if($cmaritalstatus == 1){ echo "selected=selected"; } ?> value="1">Maried
                            </option>
                            <option <?php if($cmaritalstatus == 2){ echo "selected=selected"; } ?> value="2">Single
                            </option>
                            <option <?php if($cmaritalstatus == 3){ echo "selected=selected"; } ?> value="3">Other
                            </option>
                        </select>
                        <label class="tfont">jpUkz epiy :</label>
                    </div>
                </div>

                <div class="col-12 disflx  pl0 resp3">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                        <?php  $creligion = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->religion) : ""; ?>
                        <select name="religion" id="religion"
                            class="form-control input-lg <?php if(($creligion) != 0){ echo "lblclass"; } ?>"
                            onchange="this.options[this.selectedIndex].value ? this.classList.add('lblclass') : this.classList.remove('lblclass')">
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->religion) : "") == 0){ echo "selected=selected"; } ?>
                                value="0">---</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->religion) : "") == 1){ echo "selected=selected"; } ?>
                                value="1">HINDU</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->religion) : "") == 2){ echo "selected=selected"; } ?>
                                value="2">MUSLIM</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->religion) : "") == 3){ echo "selected=selected"; } ?>
                                value="3">CHIRSTIAN</option>
                        </select>
                        <label class="tfont">kjk;
                            :</label>
                    </div>
                </div>

                <div class="col-12 disflx  pl0 resp3">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">

                        <select name="caste" id="caste"
                            class="form-control input-lg <?php if(((int)($userdata[0]->religion)) != 0){ echo "lblclass"; } ?>"
                            onchange="this.options[this.selectedIndex].value ? this.classList.add('lblclass') : this.classList.remove('lblclass')">
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 0){ echo "selected=selected"; } ?>
                                value="0">---</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 1){ echo "selected=selected"; } ?>
                                value="1">SC</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 2){ echo "selected=selected"; } ?>
                                value="2">ST</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 3){ echo "selected=selected"; } ?>
                                value="3">MBC</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 4){ echo "selected=selected"; } ?>
                                value="4">BC</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->caste) : "") == 5){ echo "selected=selected"; } ?>
                                value="5">OC</option>
                        </select>
                        <label class="tfont">tFg;g[
                            :</label>
                    </div>
                </div>

                <div class="col-12 disflx  pl0 resp3">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">

                        <select name="edu" id="edu"
                            class="form-control input-lg <?php if(((int)($userdata[0]->edu)) != 0){ echo "lblclass"; } ?>"
                            onchange="this.options[this.selectedIndex].value ? this.classList.add('lblclass') : this.classList.remove('lblclass')">
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->edu) : "") == 0){ echo "selected=selected"; } ?>
                                value="0">--- </option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->edu) : "") == 1){ echo "selected=selected"; } ?>
                                value="1">Not Going School</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->edu) : "") == 2){ echo "selected=selected"; } ?>
                                value="2">Gradguate</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->edu) : "") == 3){ echo "selected=selected"; } ?>
                                value="3">Post Gradguate</option>
                        </select>
                        <label class="tfont">fy;tp
                            epiy :</label>
                    </div>
                </div>

                <div class="col-12 disflx  pl0 resp3">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">

                        <select name="business" id="business"
                            class="form-control input-lg <?php if(((int)($userdata[0]->business)) != 0){ echo "lblclass"; } ?>"
                            onchange="this.options[this.selectedIndex].value ? this.classList.add('lblclass') : this.classList.remove('lblclass')">
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->business) : "") == 0){ echo "selected=selected"; } ?>
                                value="0">--- </option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->business) : "") == 1){ echo "selected=selected"; } ?>
                                value="1">Enterprunure</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->business) : "") == 2){ echo "selected=selected"; } ?>
                                value="2">Govt</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->business) : "") == 3){ echo "selected=selected"; } ?>
                                value="3">Unemployee</option>
                        </select>
                        <label class="tfont">bjhHpy; :</label>
                    </div>
                </div>


                <div class=" col-md-12 col-xs-12 disflx  pl0 resp3"
                    style="padding-top:25px; justify-content: space-between;align-items: center;text-align: center;">
                    <!-- <label class="tfont " >nghl;nlh:</label> -->
                    <div class=" col-md-6 col-xs-6 pl0 resp3">
                        <img id="img_view1" width="138px" height="190px"
                            src="<?php echo (isset($userdata) && !empty($userdata) && ($userdata[0]->profilePicpath)) ? base_url('uploads/photos/'.reset($userdata)->profilePicpath) : 
                            base_url('assets/images/placeholder-profile.png'); ?>"
                            alt="your image" />
                    </div>
                    <div class=" col-md-6 col-xs-6 pl0 resp3" style=" padding-top: 15px; padding-bottom: 15px;">
                        <input type="hidden" name="proimg" id="proimg"
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->profilePicpath : base_url('assets/images/placeholder-profile.png');?>" />
                        <input type="file" id="myPic" name="profilePicpath" accept="image/x-png,image/gif,image/jpeg"
                            value="" onchange="readimgpath(this);" />
                    </div>
                </div>

                <div class=" col-md-12 col-xs-12 disflx  pl0 resp3"
                    style="padding-top:25px; justify-content: space-between;align-items: center;text-align: center; display:none;">
                    <!-- <label class="tfont lblresetstyle" >igdhp</label> -->
                    <div class=" col-md-6 col-xs-6 pl0 resp3">
                        <img id="img_view" width="50px" height="50px"
                            src='<?php echo (isset($userdata) && !empty($userdata)) ? "data:image/jpeg;base64,".base64_encode(reset($userdata)->profilePic) : base_url('assets/images/placeholder-profile.png'); ?>'
                            alt="your binary image" />
                    </div>
                    <div class=" col-md-6 col-xs-6 pl0 resp3">
                        <input type="hidden" name="profileimg" id="profileimg"
                            value='<?php echo (isset($userdata) && !empty($userdata)) ? "data:image/jpeg;base64,".base64_encode(reset($userdata)->profilePic) : base_url('assets/images/placeholder-profile.png'); ?>' />
                        <input type="file" id="myPic" name="profilePic"
                            accept="image/x-png,image/gif,image/jpeg,image/jpg" value="" onchange="readURLbin(this);" />
                    </div>
                </div>

                <div class=" col-md-12 col-xs-12 disflx  pl0 resp3"
                    style="padding-top:25px; justify-content: space-between;align-items: center;text-align: center; display:none;">
                    <!-- <label class="tfont lblresetstyle" >Mtz';fs; </label> -->
                    <div class=" col-md-6 col-xs-6 pl0 resp3">
                        <img id="pdf" width="50px" height="50px" src="<?php echo base_url('assets/images/pdf.png'); ?>"
                            alt="your image" />
                    </div>
                    <div class=" col-md-6 col-xs-6 pl0 resp3">
                        <input type="hidden" name="pdf_at" id="pdf_at"
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->pdffile : ""?>" />
                        <input type="file" id="myFile" name="pdffile" accept="application/pdf" value="">
                        <label id="img_viewpdf"
                            class="pdf_l"><?php // echo (isset($userdata) && !empty($userdata)) ? base_url(reset($userdata)->pdffile) : "" ?></label>
                    </div>
                </div>
            </fieldset>

            <hr>
            <fieldset class="col-12">
                <?php  $cid = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->id) : ""; // print_r ($cid); ?>
                <div class="d-flex resdisflx"> <span class="tfont">
                        <h2>Kfthp</h2>
                    </span> <span>
                        <h2>/Address</h2>
                    </span></div>

                <div class="col-md-12 col-xs-12 pl0 resp3">
                    <div class="col-md-12 col-xs-12 pl0 resp3 disflx">
                        <!-- #Per Address -->
                        <div class="col-md-6 col-xs-12 pl0 resp3 pt20">
                            <div class="disflx"> <span>
                                    <h4>Permanent Address</h4>
                                </span> </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="epstreet_addres" id="epstreet_addres"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->epstreet_addres : ""?>"
                                    placeholder=" ">
                                <label>Address</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="epstreet_landmark" id="epstreet_landmark"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->epstreet_landmark : ""?>"
                                    placeholder=" ">
                                <label>Land Mark </label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="epvartno" id="epvartno"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->epvartno : ""?>"
                                    placeholder=" ">
                                <label for="epvartno">Vard No.</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="epvillage" id="epvillage"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->epvillage : ""?>"
                                    placeholder=" ">
                                <label for="epvillage">Village</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="eppost" id="eppost"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->eppost : ""?>"
                                    placeholder=" ">
                                <label for="eppost">Post</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="perengzip" id="perengzip" class="propdecimal6"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->perengzip : ""?>"
                                    placeholder=" " onchange="fill_perengzip(this)">
                                <label for="perengzip">Postal / Zip Code</label>
                            </div>

                            <div class="material-textfield">
                             <?php  $cperengstate = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->perengstate) : ""; ?>
                                <select name="perengstate" id="perengstate"
                                    class="form-control input-lg <?php if(((int)($userdata[0]->perengstate)) != 0){ echo "lblclass"; } ?>"
                                    onchange="fillstate_perengstate(this)" >
                                    <option value=""> --- </option>
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
                                <label for="perengstate" class="">State</label>
                            </div>

                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <?php  $cperengdistrict = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->perengdistrict) : ""; ?>
                                <select name="perengdistrict" id="perengdistrict"
                                    class="form-control input-lg <?php if(((int)($userdata[0]->perengdistrict)) != 0){ echo "lblclass"; } ?>"
                                    onchange="filldistrict_perengdistrict(this)">
                                    <option value=""> --- </option>
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
                                <label for="perengdistrict" class="">District</label>
                            </div>

                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <?php  $cperengtaluk = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->perengtaluk) : ""; ?>
                                <select name="perengtaluk" id="perengtaluk"
                                    class="form-control input-lg <?php if(((int)($userdata[0]->perengtaluk)) != 0){ echo "lblclass"; } ?>"
                                    onchange="filltaluk_perengtaluk(this)">
                                    <option value=""> --- </option>
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
                                <label for="perengtaluk" class="">Taluk</label>
                            </div>
                        </div>
                        <!-- @Per Address -->
                        <!-- #Per Address Tamil-->
                        <div class="col-md-6 col-xs-12 pl0 resp3 pt20">
                            <div class="disflx"> <span class="tfont">
                                    <h4>epue;ju Kfthp</h4>
                                </span> </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="tpstreet_addres" id="tpstreet_addres" class="tfont"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tpstreet_addres : ""?>"
                                    placeholder=" ">
                                <label class="tfont" for="tpstreet_addres">fjt[ vz;</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="tpstreet_landmark" id="tpstreet_landmark" class="tfont"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tpstreet_landmark : ""?>"
                                    placeholder=" ">
                                <label class="tfont" for="tpstreet_landmark">Kfthp</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" class="tfont" name="tpvartno" id="tpvartno"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tpvartno : ""?>"
                                    placeholder=" ">
                                <label class="tfont" for="tpvartno">thh;L vz;</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" class="tfont" name="tpvillage" id="tpvillage"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tpvillage : ""?>"
                                    placeholder=" ">
                                <label class="tfont" for="tpvillage">fpuhkk;</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" class="tfont" name="tppost" id="tppost"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tppost : ""?>"
                                    placeholder=" ">
                                <label class="tfont" for="tppost">m";ry;</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="pertamilzip" id="pertamilzip" class="tfont" class="propdecimal6"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->pertamilzip : ""?>"
                                    placeholder=" " onchange="fill_pertamilzip(this)">
                                <label class="tfont" for="pertamilzip">m";ry; vz;</label>
                            </div>

                            <div class="material-textfield col-xs-12 pl0 resp3">
                            <?php  $cpertamilstate = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->pertamilstate) : "";   ?>
                                <select name="pertamilstate" id="pertamilstate"
                                    class="form-control input-lg tfont <?php if(((int)($userdata[0]->pertamilstate)) != 0){ echo "lblclass"; } ?>"
                                    onchange="fillstate_pertamilstate(this)">
                                    
                                    <option value=""> --- </option>
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
                                <label for="pertamilstate" class="tfont">khepyk;</label>
                            </div>

                            <div class="material-textfield col-xs-12 pl0 resp3">

                                <?php  $cpertamildistrict = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->pertamildistrict) : ""; ?>
                                <select name="pertamildistrict" id="pertamildistrict"
                                    class="form-control input-lg tfont <?php if(((int)($userdata[0]->pertamildistrict)) != 0){ echo "lblclass"; } ?>"
                                    onchange="filldistrict_pertamildistrict(this)">
                                    <option value=""> --- </option>
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
                                <label for="pertamildistrict" class="tfont">khtl;lk;</label>
                            </div>

                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <?php  $cpertamiltaluk = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->pertamiltaluk) : ""; ?>
                                <select name="pertamiltaluk" id="pertamiltaluk"
                                    class="form-control input-lg tfont <?php if(((int)($userdata[0]->pertamiltaluk)) != 0){ echo "lblclass"; } ?>"
                                    onchange="filltaluk_pertamiltaluk(this)">
                                    <option value=""> --- </option>
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
                                <label for="pertamiltaluk" class="tfont">jhYf;fh</label>
                            </div>
                        </div>
                        <!-- @Per Address Tamil-->
                    </div>
                    <div class=" " style="align-items: baseline; padding: 25px 0px 15px;">
                        <input type="checkbox" id="filladdress" name="filladdress" onclick="FillBilling(this)"
                            style="transition: none; width: auto;">
                        <label class="txtstrong lblresetstyle" for="filladdress">Same Above Address</label>
                    </div>
                    <div class="col-md-12 col-xs-12 pl0 resp3 disflx tempaddress pt20">
                        <!-- #Temp Address English-->
                        <div class="col-md-6 col-xs-12 pl0 resp3 pt20">
                            <div class="disflx"> <span>
                                    <h4>Temp Address</h4>
                                </span> </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="etstreet_addres" id="etstreet_addres"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->etstreet_addres : ""?>"
                                    placeholder=" ">
                                <label for="etaddress-line-1">Address</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="etaddress_landmark" id="etaddress_landmark"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->etaddress_landmark : ""?>"
                                    placeholder=" ">
                                <label for="etaddress_landmark">Land Mark</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="etvartno" id="etvartno"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->etvartno : ""?>"
                                    placeholder=" ">
                                <label for="etvartno">Vard No.</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="etvillage" id="etvillage"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->etvillage : ""?>"
                                    placeholder=" ">
                                <label for="etvillage">Village</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="etpost" id="etpost"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->etpost : ""?>"
                                    placeholder=" ">
                                <label for="etpost">Post</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="tempengzip" id="tempengzip" class="propdecimal6"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->tempengzip : ""?>"
                                    placeholder=" " onchange="fill_tempengzip(this)">
                                <label for="tempengzip">Postal / Zip Code</label>
                            </div>

                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <?php  $ctempengstate = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->tempengstate) : ""; ?>
                                <select name="tempengstate" id="tempengstate"
                                    class="form-control input-lg <?php if(((int)($userdata[0]->tempengstate)) != 0){ echo "lblclass"; } ?>"
                                    onchange="fillstate_tempengstate(this)">
                                    <option value=""> --- </option>
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
                                <label for="tempengstate" class="">State</label>
                            </div>

                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <?php  $ctempengdistrict = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->tempengdistrict) : ""; ?>
                                <select name="tempengdistrict" id="tempengdistrict"
                                    class="form-control input-lg <?php if(((int)($userdata[0]->tempengdistrict)) != 0){ echo "lblclass"; } ?>"
                                    onchange="filldistrict_tempengdistrict(this)">
                                    <option value=""> --- </option>
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
                                <label for="tempengdistrict" class="">District</label>
                            </div>

                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <?php  $ctempengtaluk = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->tempengtaluk) : ""; ?>
                                <select name="tempengtaluk" id="tempengtaluk"
                                    class="form-control input-lg <?php if(((int)($userdata[0]->tempengtaluk)) != 0){ echo "lblclass"; } ?>"
                                    onchange="filltaluk_tempengtaluk(this)">
                                    <option value=""> --- </option>
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
                                <label for="tempengtaluk" class="">Taluk</label>
                            </div>
                        </div>
                        <!-- @Temp Address English-->
                        <!-- #Temp Address Tamil-->
                        <div class="col-md-6 col-xs-12 pl0 resp3 pt20">
                            <div class="disflx"> <span class="tfont">
                                    <h4>jw;fhypf Kfthp</h4>
                                </span> </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="ttstreet_addres" id="ttstreet_addres"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->ttstreet_addres : ""?>"
                                    placeholder=" ">
                                <label class="tfont" for="address-line-1">fjt[ vz;</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="ttstreet_landmark" id="ttstreet_landmark"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->ttstreet_landmark : ""?>"
                                    placeholder=" ">
                                <label class="tfont" for="ttstreet_landmark">Kfthp</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" class="tfont" name="ttvartno" id="ttvartno"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->ttvartno : ""?>"
                                    placeholder=" ">
                                <label class="tfont" for="ttvartno">thh;L vz;</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" class="tfont" name="ttvillage" id="ttvillage"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->ttvillage : ""?>"
                                    placeholder=" ">
                                <label class="tfont" for="ttvillage">fpuhkk;</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" class="tfont" name="ttpost" id="ttpost"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->ttpost : ""?>"
                                    placeholder=" ">
                                <label class="tfont" for="ttpost">m";ry;</label>
                            </div>
                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <input type="text" name="temptamilzip" id="temptamilzip" class="propdecimal6"
                                    value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->temptamilzip : ""?>"
                                    placeholder=" " onchange="fill_temptamilzip(this)">
                                <label class="tfont" for="temptamilzip">gpd;nfhL</label>
                            </div>

                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <?php  $ctemptamilstate = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->temptamilstate) : ""; ?>
                                <select name="temptamilstate" id="temptamilstate"
                                    class="form-control input-lg tfont <?php if(((int)($userdata[0]->temptamilstate)) != 0){ echo "lblclass"; } ?>"
                                    onchange="fillstate_temptamilstate(this)">
                                    <option value=""> --- </option>
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
                                <label for="temptamilstate" class="tfont">khepyk;</label>
                            </div>

                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <?php  $ctemptamildistrict = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->temptamildistrict) : ""; ?>
                                <select name="temptamildistrict" id="temptamildistrict"
                                    class="form-control input-lg tfont <?php if(((int)($userdata[0]->temptamildistrict)) != 0){ echo "lblclass"; } ?>"
                                    onchange=" filldistrict_temptamildistrict(this)">
                                    <option value=""> --- </option>
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
                                <label for="temptamildistrict" class="tfont">khtl;lk;</label>
                            </div>

                            <div class="material-textfield col-xs-12 pl0 resp3">
                                <?php  $ctemptamiltaluk = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->temptamiltaluk) : ""; ?>
                                <select name="temptamiltaluk" id="temptamiltaluk"
                                    class="form-control input-lg tfont <?php if(((int)($userdata[0]->temptamiltaluk)) != 0){ echo "lblclass"; } ?>"
                                    onchange="filltaluk_tempengtaluk(this)">
                                    <option value=""> --- </option>
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
                                <label for="temptamiltaluk" class="tfont">jhYf;fh</label>
                            </div>
                        </div>
                        <!-- @Temp Address Tamil-->
                    </div>
                    <div class="col-md-12 col-xs-12 pl0 resp3 pt20" style="padding-top: 23px;">
                        <div class="col-md-12 col-xs-12 pl0 resp3 disflx" style="padding-right: 0;">
                            <div class="material-textfield col-md-6 col-xs-12 pl0 resp3 ">

                                <select name="sattamandram" id="sattamandram"
                                    class="form-control input-lg tfont <?php if(((int)($userdata[0]->sattamandram)) != 0){ echo "lblclass"; } ?>"
                                    onchange="this.options[this.selectedIndex].value ? this.classList.add('lblclass') : this.classList.remove('lblclass')"
                                    autofocus>
                                    <?php  $csattamandram = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->sattamandram) : ""; ?>
                                    <option value=""> --- </option>
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
                                <label for="sattamandram" class="tfont">rl;lkd;w bjhFjp</label>
                            </div>
                            <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                                <select name="nadalumandram" id="nadalumandram"
                                    class="form-control input-lg tfont <?php if(((int)($userdata[0]->nadalumandram)) != 0){ echo "lblclass"; } ?>"
                                    onchange="this.options[this.selectedIndex].value ? this.classList.add('lblclass') : this.classList.remove('lblclass')">
                                    <?php  $cnadalumandram = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->nadalumandram) : ""; ?>
                                    <option value=""> --- </option>
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
                                <label for="nadalumandram" class="tfont">ehlhSkd;w bjhFjp</label>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <hr>
            <fieldset>
                <h2>Other Details</h2>
                <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                    <input type="text" name="udidno" id="udidno" size="50"
                        value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->udidno : ""?>"
                        placeholder=" " />
                    <label>UDID No. </label>
                </div>
                <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                    <input type="text" name="nalavariyano" id="nalavariyano" size="50"
                        value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->nalavariyano : ""?>"
                        placeholder=" " />
                    <label class="tfont">eythupa thhpa vz; :</label>
                </div>
                <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                    <input type="text" name="familycard" id="familycard" size="50"
                        value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->familycard : ""?>"
                        placeholder=" " />
                    <label class="tfont">nurd; fhh;L vz; :</label>
                </div>
                <div class="material-textfield col-md-6 col-xs-12 pl0 resp3 dispinlinetbl">
                    <input type="text" name="aadhar" id="aadhar" size="50" class="propdecimal12"
                        value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->aadhar : ""?>"
                        placeholder=" " />
                    <label class="tfont aftererror">Mjhh; vz; :<span class="manitary">*</span></label>
                </div>
                <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                    <input type="text" name="voterid" id="voterid" size="50"
                        value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->voterid : ""?>"
                        placeholder=" " />
                    <label class="tfont">thf;fhsh; milahs vz; :</label>
                </div>
                <div class="col-md-12 col-xs-12 pl0 resp3 disflx ">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3 resdisflx">
                        <input type="text" id="empregno" name="empregno" size="50"
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->empregno : ""?>"
                            placeholder=" " />
                        <label class="tfont">ntiytha;g;g[ gjpt[ vz; :</label>
                    </div>
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                        <input type="date" id="empregdate" name="empregdate"  max="<?php echo date('Y-m-d')?>"
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->empregdate : ""?>">
                    </div>
                </div>
            </fieldset>
            <hr>
            <fieldset>
                <!-- https://stackoverflow.com/questions/48334913/how-to-insert-dynamic-input-values-into-the-database-using-codeigniter -->
                <span class="tfont">
                    <h2>FLk;g tpguk;</h2>
                </span>
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
                }
                if($userdetdata && $userdetdata != null) {
                    for ($i=0; $i < count($userdetdata); $i++) { 
                        ?>
                            <tr id="row<?php echo $i+1 ?>">
                                <td class="tblfsno" style="text-align: center;"><?php echo $i+1 ?></td>
                                <td class="tblfname"><input type="text" class="faname tfont" placeholder="bgah;"
                                        style="width:100%" value="<?php echo $userdetdata[$i]->faname ?>" /></td>
                                <td class="tblfgender">
                                    <select class='fagender tfont' style='width:auto'>
                                        <option value='fafemale'
                                            <?php if($userdetdata[$i]->fagender == "fafemale"){ echo "selected=selected"; } ?>>
                                            bgz;</option>
                                        <option value='famale'
                                            <?php if($userdetdata[$i]->fagender == "famale"){ echo "selected=selected"; } ?>>
                                            Mz;</option>
                                        <option value='faother'
                                            <?php if($userdetdata[$i]->fagender == "faother"){ echo "selected=selected"; } ?>>
                                            kw;wit</option>
                                    </select>
                                </td>
                                <td class="tblfage"><input type="text" class="faage tfont" placeholder="taJ"
                                        style="width:100px" value="<?php echo $userdetdata[$i]->faage ?>" /></td>
                                <td class="tblfrelationship">
                                    <select class='farelationship tfont' style='width:100%'>
                                        <option value='famother'
                                            <?php if($userdetdata[$i]->farelationship == "famother"){ echo "selected=selected"; } ?>>
                                            mk;kh</option>
                                        <option value='fafather'
                                            <?php if($userdetdata[$i]->farelationship == "fafather"){ echo "selected=selected"; } ?>>
                                            mg;gh</option>
                                        <option value='fawife'
                                            <?php if($userdetdata[$i]->farelationship == "fawife"){ echo "selected=selected"; } ?>>
                                            fzth;</option>
                                        <option value='fahusband'
                                            <?php if($userdetdata[$i]->farelationship == "fahusband"){ echo "selected=selected"; } ?>>
                                            kidtp</option>
                                        <option value='fabrother'
                                            <?php if($userdetdata[$i]->farelationship == "fabrother"){ echo "selected=selected"; } ?>>
                                            rnfhjuh;</option>
                                        <option value='fasister'
                                            <?php if($userdetdata[$i]->farelationship == "fasister"){ echo "selected=selected"; } ?>>
                                            rnfhjup</option>
                                        <option value='fagrandpa'
                                            <?php if($userdetdata[$i]->farelationship == "fagrandpa"){ echo "selected=selected"; } ?>>
                                            jhj;jh</option>
                                        <option value='fagrandma'
                                            <?php if($userdetdata[$i]->farelationship == "fagrandma"){ echo "selected=selected"; } ?>>
                                            ghl;o</option>
                                        <option value='fagardian'
                                            <?php if($userdetdata[$i]->farelationship == "fagardian"){ echo "selected=selected"; } ?>>
                                            ghJfhtyh;</option>
                                    </select>
                                </td>
                                <td class="tblfbusiness"><input type="text" class="fabusiness tfont"
                                        placeholder="bjhHpy;" style="width:100%"
                                        value="<?php echo $userdetdata[$i]->fabusiness ?>" /></td>
                                <td><button type='button' name='remove' data-row='row<?php echo $i+1 ?>'
                                        class='btn btn-danger btn-xs remove'>-</button></td>
                            </tr>
                            <?php
                    }
                    }else{
                    ?>
                            <tr>
                                <td class="tblfsno" style="text-align: center;">1</td>
                                <td class="tblfname"><input type="text" class="faname tfont" placeholder="bgah;"
                                        style="width:100%" /></td>
                                <td class="tblfgender">
                                    <select class='fagender tfont' style='width:auto' class="form-control input-lg">
                                        <option value='fafemale'>bgz;</option>
                                        <option value='famale'>Mz;</option>
                                        <option value='faother'>kw;wit</option>
                                    </select>
                                </td>
                                <td class="tblfage"><input type="text" class="faage tfont" placeholder="taJ"
                                        style="width:100px" /></td>
                                <td class="tblfrelationship">
                                    <select class='farelationship tfont' style='width:100%'
                                        class="form-control input-lg">
                                        <option value='famother'>mk;kh</option>
                                        <option value='fafather'>mg;gh</option>
                                        <option value='fawife'>fzth;</option>
                                        <option value='fahusband'>kidtp</option>
                                        <option value='fabrother'>rnfhjuh;</option>
                                        <option value='fasister'>rnfhjup</option>
                                        <option value='fagrandpa'>jhj;jh</option>
                                        <option value='fagrandma'>ghl;o</option>
                                        <option value='fagardian'>ghJfhtyh;</option>
                                    </select>
                                </td>
                                <td class="tblfbusiness"><input type="text" class="fabusiness tfont"
                                        placeholder="bjhHpy;" style="width:100%" /></td>
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
            <hr>
            <fieldset>

                <div class="" style="padding-top: 15px;">

                    <div class="col-md-12 col-xs-12 pl0 resp3 disflx">
                        <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                            <?php  $cdftype = (isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype) : "";  ?>
                            <select name="dftype" id="dftype"
                                class="form-control input-lg <?php if(((int)($userdata[0]->dftype)) != 0){ echo "lblclass"; } ?>"
                                onchange="this.options[this.selectedIndex].value ? this.classList.add('lblclass') : this.classList.remove('lblclass')">>
                                <option class="tfont" value=""> --- </option>
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
                            <label class="tfont">khw;Wj; jpwd; jd;ik :</label>
                        </div>
                        <div class="material-textfield col-md-3 col-xs-12 pl0 resp3">
                            <select name="dftype1" id="dftype1" class="dispnone">
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype1) : "") == 0){ echo "selected=selected"; } ?>
                                    value="0"> --- </option>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype1) : "") == 1){ echo "selected=selected"; } ?>
                                    value="1">One hand</option>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype1) : "") == 2){ echo "selected=selected"; } ?>
                                    value="2">Both hand</option>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype1) : "") == 3){ echo "selected=selected"; } ?>
                                    value="3">One leg</option>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype1) : "") == 4){ echo "selected=selected"; } ?>
                                    value="4">Both leg</option>
                            </select>
                        </div>
                        <div class="material-textfield col-md-3 col-xs-12 pl0 resp3">
                            <select name="dftype2" id="dftype2" class="dispnone">
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype2) : "") == 0){ echo "selected=selected"; } ?>
                                    value="0"> --- </option>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype2) : "") == 1){ echo "selected=selected"; } ?>
                                    value="1">Above Elbow</option>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dftype2) : "") == 2){ echo "selected=selected"; } ?>
                                    value="2">Below Elbow</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                    <input type="text" name="dfpercentage" id="dfpercentage"
                        value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->dfpercentage : ""?>"
                        placeholder=" " />
                    <label class="tfont leftlbl">khw;Wj; jpwd; rjtPjk; : </label>
                </div>

                <div class="" style="padding-top: 15px;">

                    <div class="col-md-12 col-xs-12 pl0 resp3 disflx">
                        <div class="material-textfield col-md-6 col-xs-12 pl0 resp3" style=" margin-top: 5px;">
                            <select name="dfsupportmatrialusing" id="dfsupportmatrialusing"
                                class="tfont <?php if(((int)($userdata[0]->dfsupportmatrialusing)) != 0){ echo "lblclass"; } ?>"
                                onchange="this.options[this.selectedIndex].value ? this.classList.add('lblclass') : this.classList.remove('lblclass')">>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing) : "") == 0){ echo "selected=selected"; } ?>
                                    value="0"> --- </option>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing) : "") == 1){ echo "selected=selected"; } ?>
                                    value="1">KlePf;F fUtp kl;Lk; gad;gLj;Jgth;</option>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing) : "") == 2){ echo "selected=selected"; } ?>
                                    value="2">Cd;Wnfhy; kl;Lk; gad;gLj;Jgth;</option>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing) : "") == 3){ echo "selected=selected"; } ?>
                                    value="3">,uz;Lk; gad;gLj;Jgth;</option>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing) : "") == 4){ echo "selected=selected"; } ?>
                                    value="4">vJt[k; gad;gLj;jhjth;</option>
                            </select>
                            <label class="tfont leftlbl">cjtpf; fUtpfs; :</label>
                        </div>
                        <div class="material-textfield col-md-4 col-xs-12 pl0 resp3" style=" margin-top: 5px;">
                            <select class="tfont" name="dfsupportmatrialusing1" id="dfsupportmatrialusing1"
                                class="dispnone">
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing1) : "") == 0){ echo "selected=selected"; } ?>
                                    value="0"> --- </option>
                                <option
                                    <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfsupportmatrialusing1) : "") == 1){ echo "selected=selected"; } ?>
                                    value="1">,Lg;g[f;F fPH;</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="material-textfield col-md-6 col-xs-12 pl0 resp3" style=" margin-top: 5px;">

                    <select name="dfhappendby" id="dfhappendby"
                        class="tfont <?php if(((int)($userdata[0]->dfhappendby)) != 0){ echo "lblclass"; } ?>"
                        onchange="this.options[this.selectedIndex].value ? this.classList.add('lblclass') : this.classList.remove('lblclass')">>
                        <option
                            <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfhappendby) : "") == 0){ echo "selected=selected"; } ?>
                            value="0"> --- </option>
                        <option
                            <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfhappendby) : "") == 1){ echo "selected=selected"; } ?>
                            value="1">gpwtp Cdk;</option>
                        <option
                            <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfhappendby) : "") == 2){ echo "selected=selected"; } ?>
                            value="2">tpgj;J</option>
                        <option
                            <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfhappendby) : "") == 3){ echo "selected=selected"; } ?>
                            value="3">nghypnah</option>
                    </select>
                    <label class="tfont leftlbl">khw;Wj; jpwd; vw;gl;l tpjk; :</label>
                </div>
                <div class="col-md-12 col-xs-12 pl0 resp3 disflx">
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3" style=" margin-top: 5px;">
                        <select name="dfvehicleusage" id="dfvehicleusage"
                            class="tfont <?php if(((int)($userdata[0]->dfvehicleusage)) != 0){ echo "lblclass"; } ?>"
                            onchange="this.options[this.selectedIndex].value ? this.classList.add('lblclass') : this.classList.remove('lblclass')">>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage) : "") == 0){ echo "selected=selected"; } ?>
                                value="0"> --- </option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage) : "") == 1){ echo "selected=selected"; } ?>
                                value="1">,uz;L rf;fu nkhl;lhh; thfdk;</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage) : "") == 2){ echo "selected=selected"; } ?>
                                value="2">,izg;g[r;rf;fuk; bghUj;jg;gl;l nkhl;lhh; thfdk;</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage) : "") == 3){ echo "selected=selected"; } ?>
                                value="3">kfpH;t[e;J</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage) : "") == 4){ echo "selected=selected"; } ?>
                                value="4">khw;wpaikf;fg;gl;l kfpH;t[e;J</option>
                        </select>
                        <label class="tfont leftlbl">thfd gad;ghL epiy :</label>
                    </div>
                    <div class="material-textfield col-md-4 col-xs-12 pl0 resp3" style=" margin-top: 5px;">
                        <select class="tfont" name="dfvehicleusage1" id="dfvehicleusage1">
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage1) : "") == 0){ echo "selected=selected"; } ?>
                                value="0"> --- </option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage1) : "") == 1){ echo "selected=selected"; } ?>
                                value="1">bjhpe;jth;</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage1) : "") == 2){ echo "selected=selected"; } ?>
                                value="2">itj;jpUg;gth;</option>
                            <option
                                <?php if(((isset($userdata) && !empty($userdata)) ? (int)($userdata[0]->dfvehicleusage1) : "") == 3){ echo "selected=selected"; } ?>
                                value="3">Xl;Leh; chpkk;</option>
                        </select>
                    </div>
                </div>
            </fieldset>
            <hr>
            <fieldset>
                <span class="tfont">
                    <h2>cWg;gpdh; re;jh tpguk;</h2>
                </span>

                <div class="col-12 disflx pl0 resp3">
                    <div class="material-textfield col-md-12 col-xs-12 disflx pl0 resp3 resdisflx resdisblock360">
                        <label class="tfont pl0 resp3 lblresetstyle">cWg;gpdh; vz; cs;sjh
                            :</label>
                        <div class="disflx">
                            <div style="display:flex; align-items: center; padding-right: 20px;">
                                <input type="radio" class='membershipradio' name="havingmembership"
                                    id="havingmembershipyes"
                                    <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->havingmembership == '1' ? 'checked=checked':'' ) : ""?>
                                    value="1"> <span class="tfont">Mk; </span>
                            </div>
                            <div style="display:flex align-items: center; padding-right: 20px;">
                                <input type="radio" class='membershipradio' name="havingmembership"
                                    id="havingmembershipno"
                                    <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->havingmembership == '0' ? 'checked=checked':'' ) : "checked=checked"?>
                                    value="0"> <span class="tfont">,y;iy </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xs-12 pl0 resp3 disflx" id="havingmembershipdiv"
                    style=" <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->havingmembership == '1' ? ' display:flex ':' display:none ' ) : ""?>">
                    <div class="material-textfield col-md-6 col-xs-6 pl0 resp3 resdisblock360" style="float: left;">
                        <input type="text" id="membershipnumber" name="membershipnumber" size="50"
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->membershipnumber : ""?>"
                            placeholder=" " />
                        <label class="tfont" for="membershipnumber">cWg;gpdh; vz; : </label>
                    </div>
                    <div class="material-textfield col-md-3 col-xs-3 pl0 resp3" style="float: left;">
                        <input type="date" id="membershipdate" name="membershipdate"  max="<?php echo date('Y-m-d')?>"
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->membershipdate : ""?>">
                    </div>
                </div>

                <div class="col-12 disflx pl0 resp3">
                    <div class="material-textfield col-md-12 col-xs-12 disflx pl0 resp3 resdisflx resdisblock360">
                        <label class="tfont pl0 resp3 lblresetstyle">elg;g[ Mz;L re;jh
                            brYj;jpa[s;sPuh </label>
                        <div class="disflx">
                            <div style="display:flex; align-items: center; padding-right: 20px;">
                                <input type="radio" class='membershipfeeradio' name="membershipfeespaid"
                                    id="membershipfeespaidyes"
                                    <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->membershipfeespaid == '1' ? 'checked=checked':'' ) : ""?>
                                    value="1"> <span class="tfont">Mk; </span>
                            </div>
                            <div style="display:flex align-items: center; padding-right: 20px;">
                                <input type="radio" class='membershipfeeradio' name="membershipfeespaid"
                                    id="membershipfeespaidno"
                                    <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->membershipfeespaid == '0' ? 'checked=checked':'' ) : "checked=checked"?>
                                    value="0"> <span class="tfont">,y;iy </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="disflx col-md-12 col-xs-12 pl0 resp3 disflx resdisflx" id="membershipfeespaiddiv"
                    style="  <?php echo (isset($userdata) && !empty($userdata)) ? (reset($userdata)->membershipfeespaid == '1' ? ' display:flex ':' display:none ' ) : ""?>">
                    <div class="material-textfield col-md-6 col-xs-6 pl0 resp3 " style="float: left;">
                        <input type="text" id="membershipreceiptno" name="membershipreceiptno" size="50"
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->membershipreceiptno : ""?>"
                            placeholder=" " />
                        <label class="tfont" for="membershipnumber">urPJ vz; : </label>
                    </div>
                    <div class="material-textfield col-md-3 col-xs-3 pl0 resp3" style="float: left;">
                        <input type="date" id="membershipreceiptdate" name="membershipreceiptdate"  max="<?php echo date('Y-m-d')?>"
                            value="<?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->membershipreceiptdate : ""?>">
                    </div>
                </div>
            </fieldset>
            <hr>
            <fieldset>
                <span class="tfont">
                    <h2>r';fj;jpd; _yk; cjtpfs;</h2>
                </span>

                <div id="helpfromtrust" class="col-12 disflx pl0 resp3" style="display: flex; align-items: baseline;">
                    <label class="tfont pl0 resp3 lblresetstyle">
                        jpl;l';fs; : </label>
                    <div>
                        <div class="material-textfield col-md-12 col-xs-12 disflx pl0 resp3 alc"
                            style="padding-bottom: 5px; margin-top: 0px;">
                            <input type="checkbox" name="helpfromtrust[]"
                                <?php echo (isset($userdata) && !empty($userdata) && in_array("freemarriage",explode(',',reset($userdata)->helpfromtrust)) ) ? "checked" : ""?>
                                value="freemarriage"><label class="tfont lblresetstyle" for="help1">,ytr
                                jpUkzk;</label>
                        </div>
                        <div class="material-textfield col-md-12 col-xs-12 disflx pl0 resp3 alc"
                            style="padding-bottom: 5px; margin-top: 0px;">
                            <input type="checkbox" name="helpfromtrust[]"
                                <?php echo (isset($userdata) && !empty($userdata) && in_array("selfemp",explode(',',reset($userdata)->helpfromtrust))) ? "checked" : ""?>
                                value="selfemp"><label class="tfont lblresetstyle" for="help2">RabjhHpy;
                                ntiy
                                tha;g;g[</label>
                        </div>
                        <div class="material-textfield col-md-12 col-xs-12 disflx pl0 resp3 alc"
                            style="padding-bottom: 5px; margin-top: 0px;">
                            <input type="checkbox" name="helpfromtrust[]"
                                <?php echo (isset($userdata) && !empty($userdata) && in_array("eduhelp",explode(',',reset($userdata)->helpfromtrust))) ? "checked" : ""?>
                                value="eduhelp"><label class="tfont lblresetstyle" for="help3">fy;tp
                                cjtpj;bjhif</label>
                        </div>
                        <div class="material-textfield col-md-12 col-xs-12 disflx pl0 resp3 alc"
                            style="padding-bottom: 5px; margin-top: 0px;">
                            <input type="checkbox" name="helpfromtrust[]"
                                <?php echo (isset($userdata) && !empty($userdata) && in_array("nalathittam",explode(',',reset($userdata)->helpfromtrust))) ? "checked" : ""?>
                                value="nalathittam"><label class="tfont lblresetstyle" for="help3">eyj;jpl;l
                                cjtpfs;</label>
                        </div>
                    </div>
                </div>

                <div class=" col-md-12 col-xs-12 disflx pt20">
                    <!-- <label class="tfont lblresetstyle">,ju jpl;l';fs; :</label> -->
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                        <textarea class="tfont reswidth100" type="textarea " id="otherhelpfromtrust" name="otherhelpfromtrust"
                            value="otherhelpfromtrust"
                            placeholder=" "><?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->otherhelpfromtrust : ""?></textarea>
                        <label class="tfont">,ju jpl;l';fs; : (jkpHpy;)</label>
                    </div>
                    <div class="material-textfield col-md-6 col-xs-12 pl0 resp3">
                        <textarea type="textarea " id="otherhelpfromtrusteng" name="otherhelpfromtrusteng" class="reswidth100"
                            value="otherhelpfromtrusteng"
                            placeholder=" "><?php echo (isset($userdata) && !empty($userdata)) ? reset($userdata)->otherhelpfromtrusteng : ""?></textarea>
                        <label>Other Help :(in english)</label>
                    </div>
                </div>

            </fieldset>
            <hr>
            <fieldset>
                <span class="tfont">
                    <h2>kw;wit</h2>
                </span>

                <div id="hobbies" class="col-12 disflx pl0 resp3" style="display: flex; align-items: baseline;">
                    <label class="tfont pl0 resp3 lblresetstyle"> bghGJ
                        nghf;F : </label>
                    <div>
                        <div class="material-textfield col-md-12 col-xs-12 disflx pl0 resp3 alc"
                            style="padding-bottom: 5px; margin-top: 0px;">
                            <input type="checkbox" name="hobbies[]"
                                <?php echo (isset($userdata) && !empty($userdata) && in_array("chess",explode(',',reset($userdata)->hobbies)) ) ? "checked" : ""?>
                                value="chess"><label class="lblresetstyle" for="hob1">Playing
                                Chess</label>
                        </div>
                        <div class="material-textfield col-md-12 col-xs-12 disflx pl0 resp3 alc"
                            style="padding-bottom: 5px; margin-top: 0px;">
                            <input type="checkbox" name="hobbies[]"
                                <?php echo (isset($userdata) && !empty($userdata) && in_array("books",explode(',',reset($userdata)->hobbies))) ? "checked" : ""?>
                                value="books"><label class="lblresetstyle" for="hob2">Reading
                                Books</label>
                        </div>
                        <div class="material-textfield col-md-12 col-xs-12 disflx pl0 resp3 alc"
                            style="padding-bottom: 5px; margin-top: 0px;">
                            <input type="checkbox" name="hobbies[]"
                                <?php echo (isset($userdata) && !empty($userdata) && in_array("music",explode(',',reset($userdata)->hobbies))) ? "checked" : ""?>
                                value="music"><label class="lblresetstyle" for="hob3">Music</label>
                        </div>
                        <div class="material-textfield col-md-12 col-xs-12 disflx pl0 resp3 alc"
                            style="padding-bottom: 5px; margin-top: 0px;">
                            <input type="checkbox" name="hobbies[]"
                                <?php echo (isset($userdata) && !empty($userdata) && in_array("cooking",explode(',',reset($userdata)->hobbies))) ? "checked" : ""?>
                                value="cooking"><label class="lblresetstyle" for="hob3">Cooking</label>
                        </div>
                    </div>
                </div>

            </fieldset>
            <hr>
            <fieldset>
                <div style="text-align: center; margin: 10px 10px 30px;">
                    <input type="submit" name="btnsave" class="registerbtn btn btn-default btn_style"
                        value="<?php echo (isset($userdata) && !empty($userdata)) ? "Update" : "Submit"?>" />
                </div>
            </fieldset>
        </div>
    </div>
</form>

<?php
add_assets('footer', array(  
    '<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js"></script>', 
    '<script src="'. base_url('assets/js/validate.js').'"></script>',
    '<script type="text/javascript" src="'.base_url('assets/js/reguser.js').'"></script>',
    '<script src="'. base_url('assets/js/dynamicregtbl.js') .'"></script>',    
    '<script src="'. base_url('assets/js/insertajax.js') .'"></script>',
    '<script src="'. base_url('assets/js/state.js') .'"></script>'
));
?>