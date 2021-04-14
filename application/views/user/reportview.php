<?php
add_assets('header', array(    
    '<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />',
    '<script src="'. base_url('assets/css/dt.css') .'"></script>'
));
?>

<section class="showcase">
    <div class="container reportmaster">
 <h3>Report </h3>
        <div class="row">
            <div class="col-lg-12"><span id="success-msg"></div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <input type="text" class="small form-control global_filter" id="global_filter"
                                placeholder="Keyword..">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control column_filter" id="name_filter"
                                data-custom_column="1" placeholder="Name">
                        </div>

                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control column_filter" id="email_filter"
                                data-custom_column="2" placeholder="Email">
                        </div>

                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control column_filter" id="phone_filter"
                                data-custom_column="3" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control column_filter" id="aadhar_filter"
                                data-custom_column="3" placeholder="Aadhar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="report-datatable" class="table table-bordered table-hover small">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Aadhar</th>
                        <th scope="col">Udidno</th>
                        <th scope="col">Photo</th>
                        <!--<th scope="col">Action</th>-->
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Aadhar</th>
                        <th scope="col">Udidno</th>
                        <th scope="col">Photo</th>
                        <!--<th scope="col">Action</th>-->
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    </div>
</section>

<?php
 add_assets('footer', array(  
    '<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>',
    '<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>',
    '<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>',
    '<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>',
    '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>',
    '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>',
    '<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>',
    '<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>',
    '<script src="'. base_url('assets/js/dtreport.js') .'"></script>'
));