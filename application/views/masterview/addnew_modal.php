<div class="uk-modal-dialog uk-modal-body frm">
    <form id="saveTalukForm" method="post">
        <input type="hidden" name="id"
            value="<?php echo (isset($userdata) && !empty($userdata)) ? ($userdata)->id : ""?>">
            <?php  $cid = (isset($userdata) && !empty($userdata)) ? (int)($userdata->id) : ""; // print_r ($cid); ?>
        <h5 class="modal-title" id="exampleModalLabel">
            <?php echo (isset($userdata) && !empty($userdata)) ? "Update" : "Add New "?>Taluk</h5>
        <div class="uk-margin" style="display:none"><input type="text" name="talukid" id="talukid"
                class="uk-input uk-form-width-large" required placeholder=" "
                value="<?php echo (isset($userdata) && !empty($userdata)) ? ($userdata)->talukid : ""?>">
        </div>
        <div class="uk-margin material-textfield plr5">
            <input type="text" name="talukcode" id="talukcode" class="uk-input uk-form-width-large" placeholder=" "
                value="<?php echo (isset($userdata) && !empty($userdata)) ? ($userdata)->talukcode : ""?>">
            <label>Taluk Code</label>
        </div>
        <div class="uk-margin material-textfield plr5">
            <input type="text" name="talukname" id="talukname" class="uk-input uk-form-width-large tfont"
                placeholder=" "
                value="<?php echo (isset($userdata) && !empty($userdata)) ? ($userdata)->talukname : ""?>">
            <label class="tfont">jhYf;fh</label>
        </div>
        <div class="uk-margin material-textfield plr5">
            <input type="text" name="etalukname" id="etalukname" class="uk-input uk-form-width-large" required
                placeholder=" "
                value="<?php echo (isset($userdata) && !empty($userdata)) ? ($userdata)->etalukname : ""?>">
            <label>Taluk Name</label>
        </div>

        <div class="address_align d-flex">
            <!-- Dropdown -->
            <div class="address_align uk-width-1-2">
                <div class="form-group material-textfield plr5">
                <?php  $cstate = (isset($userdata) && !empty($userdata)) ? (int)($userdata->stateid) : ""; ?>
                    <select name="state" id="state" class="form-control input-lg <?php echo ($cstate=="") ? "" :' lblclass '  ?> "
                        onchange="fillstate(this)">
                        <option value=""> ------- </option>
                        <?php
                            foreach($states as $row)
                            {
                                $x="";
                                if($cstate == $row->stateid){
                                    $x= "selected=selected";
                                }
                                echo '<option '.$x.' value="'.$row->stateid.'">'.$row->estatename.'</option>';
                            }
                            ?>
                    </select>
                    <label for="state" class="">State</label>
                </div>

                <div class="form-group material-textfield plr5">
                    <?php  $cdistrict = (isset($userdata) && !empty($userdata)) ? (int)($userdata->districtid) : ""; ?>
                    <select name="district" id="district" class="form-control input-lg <?php echo ($cdistrict=="") ? "" :' lblclass '  ?>"
                        onchange="filldistrict(this)">
                        <option value=""> ------- </option>
                        <?php if($cid){  
                            foreach($districts as $row)
                            {
                                $x="";
                                if($cdistrict == $row->districtid){
                                    $x= "selected=selected";
                                    // echo $x, $cdistrict;
                                }
                                echo '<option '.$x.' value="'.$row->districtid.'">'.$row->edistrictname.'</option>';
                            }
                        } ?>
                    </select>
                    <label for="district" class="">District</label>
                </div>
            </div>
            <!-- Dropdown -->

            <!-- Tamil Dropdown -->
            <div class="address_align uk-width-1-2">
                <div class="form-group material-textfield plr5">
                     <?php  $cstate = (isset($userdata) && !empty($userdata)) ? (int)($userdata->stateid) : "";    ?>
                    <select name="tstate" id="tstate" class="form-control input-lg tfont <?php echo ($cstate=="") ? "" :' lblclass '  ?>"
                        onchange="tfillstate(this)">
                       
                        <option value=""> ------- </option>
                        <?php
                            foreach($states as $row)
                            {
                                $x="";
                                if($cstate == $row->stateid){
                                    $x= "selected=selected";
                                }
                                echo '<option '.$x.' value="'.$row->stateid.'">'.$row->statename.'</option>';
                            }
                            ?>
                    </select>
                    <label class="tfont" for="tstate" class="">khepyk;</label>
                </div>

                <div class="form-group material-textfield plr5">
                    <?php  $cdistrict = (isset($userdata) && !empty($userdata)) ? (int)($userdata->districtid) : ""; ?>
                    <select name="tdistrict" id="tdistrict" class="form-control input-lg tfont <?php echo ($cdistrict=="") ? "" :' lblclass '  ?>"
                        onchange="tfilldistrict(this)">
                        <option value=""> ------- </option>
                        <?php if($cid){  
                            foreach($districts as $row)
                            {
                                $x="";
                                if($cdistrict == $row->districtid){
                                    $x= "selected=selected";
                                // echo $x, $cdistrict;
                                }
                                echo '<option '.$x.' value="'.$row->districtid.'">'.$row->districtname.'</option>';
                            }
                        } ?>
                    </select>
                    <label for="tdistrict" class="tfont">khtl;lk;</label>
                </div>
            </div>
            <!-- Tamil Dropdown -->
        </div>
        <div class="d_align form-group" style="align-items: baseline; padding: 25px 0px 15px;">
            <input type="checkbox" id="active" name="active" checked="checked" style="width: auto;">
            <label for="active" class="lblresetstyle">Active</label>
        </div>
 
        <p class="uk-text-right">
            <input type="button" class="uk-button uk-button-default uk-modal-close" value="Cancel" data-dismiss="modal">
            <input name="submit" id="form_sub" type="submit" class="uk-button uk-button-primary"
                value="<?php echo (isset($userdata) && !empty($userdata)) ? "Update" : "Save"?>">
        </p>
    </form>
</div>