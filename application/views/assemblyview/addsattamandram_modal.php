<div class="uk-modal-dialog uk-modal-body frm">
    <form id="saveSattamandramForm" method="post">
        <input type="hidden" name="id"
            value="<?php echo (isset($userdata) && !empty($userdata)) ? ($userdata)->id : ""?>">
            <?php  $cid = (isset($userdata) && !empty($userdata)) ? (int)($userdata->id) : ""; // print_r ($cid); ?>
        <h5 class="modal-title" id="exampleModalLabel">
            <?php echo (isset($userdata) && !empty($userdata)) ? "Update" : "Add New "?>Assembly</h5>
        <div class="uk-margin" style="display:none"><input type="text" name="sattamandramid" id="sattamandramid"
                class="uk-input uk-form-width-large" required placeholder=" "
                value="<?php echo (isset($userdata) && !empty($userdata)) ? ($userdata)->sattamandramid : ""?>">
        </div>
        <div class="uk-margin material-textfield plr5">
            <input type="text" name="sattamandramcode" id="sattamandramcode" class="uk-input uk-form-width-large" placeholder=" "
                value="<?php echo (isset($userdata) && !empty($userdata)) ? ($userdata)->sattamandramcode : ""?>">
            <label>Assembly Code</label>
        </div>
        <div class="uk-margin material-textfield plr5">
            <input type="text" name="sattamandramname" id="sattamandramname" class="uk-input uk-form-width-large tfont"
                placeholder=" "
                value="<?php echo (isset($userdata) && !empty($userdata)) ? ($userdata)->sattamandramname : ""?>">
            <label class="tfont">rl;lkd;w bjhFjp</label>
        </div>
        <div class="uk-margin material-textfield plr5">
            <input type="text" name="esattamandramname" id="esattamandramname" class="uk-input uk-form-width-large" required
                placeholder=" "
                value="<?php echo (isset($userdata) && !empty($userdata)) ? ($userdata)->esattamandramname : ""?>">
            <label>Assembly Name</label>
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