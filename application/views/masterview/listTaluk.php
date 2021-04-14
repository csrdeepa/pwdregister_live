<?php
add_assets('header', array(    
    '<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />',
    '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.8/css/uikit.min.css" />',
    '<link rel="stylesheet" href="https://getuikit.com/assets/uikit/dist/css/uikit.css" />',
    '<link rel="stylesheet" href="'. base_url('assets/css/frmstyle.css') .'" />',
    '<link rel="stylesheet" href="'. base_url('assets/css/masteritem.css') .'" />'
));
?>

<div class="taluk_head talukmaster">
    <div style="display: flex; align-items: center; justify-content: space-between; padding-bottom: 30px;">
    <h1 style="display: contents;">Taluk Master</h1>
    <button id="add_btn" style="float:right" class="p-2 border btn btn_style modal_taluk" type="button"
        uk-toggle="target: #addTalukModal">Add New</button>
    </div>    
    <table class=" " id="talukListing">
        <thead>
            <tr>
                <th>Id</th>
                <!-- <th>Taluk Id</th> -->
                <th>Taluk Code</th>
                <th class="tfont">jhYf;fh</th>
                <th>Taluk</th>
                <th>District</th>
                <!-- <th>State Id</th>
						<th>Country Id</th> -->
                <!-- <th>Active</th> -->
                <th style="text-align: revert" ;>Action</th>
            </tr>
        </thead>
        <tbody id="listRecords">
        </tbody>
    </table>
</div>

<!-- This is the Add new modal -->

<div id="addTalukModal" uk-modal>
</div>

<?php
add_assets('footer', array(  
    '<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>',
    // '<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>',
    // '<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>',
    '<script src="https://getuikit.com/assets/uikit/dist/js/uikit.js"></script>',
    '<script src="https://getuikit.com/assets/uikit/dist/js/uikit-icons.js"></script>',
    // '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>',
    '<script src="'. base_url('assets/js/masteritem.js') .'"></script>'
));