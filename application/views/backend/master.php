<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title;?></title>
        <link rel="icon" type="image/ico" href="/favicon.ico"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    <!-- jQuery library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>        <!-- Popper JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>        <!-- Latest compiled JavaScript -->    

        <!-- Jquery validation -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url('assets/css/notify.css');?>" />  
        <!-- Custom fonts for this template -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <style>
            @font-face{
            font-family: "TMSujatha";
            src: url("<?php echo base_url(); ?>assets/fonts/tm-sujatha.ttf") format("truetype");
        }
        </style>

        <?php header_assets(); ?>
    </head>
    <body>
        <?php
            if (isset($this->session->userdata['logged_in'])) {
                $username = ($this->session->userdata['logged_in']['username']);
                $email = ($this->session->userdata['logged_in']['email']);
                $userrole_id = ($this->session->userdata['logged_in']['userrole_id']);
            } else {
                header("location: user/login_form");
            }
        ?>
            <!-- header -->
            <?php echo $header ?>
            <?php // echo $menu ?>
            <?php echo $sidenav ?>
            <!-- body content -->
            <div class="tm-main uk-section uk-section-default"> 
            <input type="hidden" id="base" value="<?php echo base_url(); ?>">   
                <?php echo $page ?>
            <div id="preloader" class="overlay">
                <div class="d-flex justify-content-center" style="margin: auto; align-items: center; height: 100%;">  
                    <div class="spinner-border text-dark " role="status" style="width: 3rem; height: 3rem; z-index: 20; align-items: center; margin: auto;">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
            </div>
            <div class="notify"></div>
            <!-- footer -->
            <?php echo $footer ?>

            <!-- modals -->
    </body>
    
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
    <!-- <script src="< ?php echo base_url(); ?>assets/js/other.js"></script> -->
    <script src="<?php  echo base_url(); ?>assets/js/notify.js"></script>
    
    <?php footer_assets(); ?>
</html>