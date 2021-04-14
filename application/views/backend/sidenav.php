<!-- https://www.materialpalette.com/icons -->
<!-- https://materializecss.com/icons.html -->
<div id="mySidebar" class="sidebar" onmouseover="toggleSidebar()" onmouseout="toggleSidebar()">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a class="profile" href="#">
        <span class="material-icons" >
            <img  class="rounded-circle"  src="<?php echo base_url(); ?>assets/images/placeholder-profile.png" width="50px" height="50px"/>
        </span>
        <span class="icon-text">User Profile</span> 
    </a><br>        
    <a href="<?php echo base_url(); ?>./users/dashboard"><span><i class="material-icons" >people_outline</i><span class="icon-text">User List</span></a>
    <a href="<?php echo base_url(); ?>./taluk"><span><i class="material-icons" >all_out</i><span class="icon-text">Taluk Master</span></a>
    <a href="<?php echo base_url(); ?>./sattamandram"><span><i class="material-icons" >all_out</i><span class="icon-text">Assembly</span></a>
    <a href="<?php echo base_url(); ?>./nadalumandram"><span><i class="material-icons" >all_out</i><span class="icon-text">Parliment</span></a>
    <a href="<?php echo base_url(); ?>./report"><span><i class="material-icons" >insert_chart</i><span class="icon-text">Report</span></a>
</div>

<div class="content">