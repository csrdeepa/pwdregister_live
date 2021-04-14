var base_url = $('#base').val();
jQuery(document).ready(function () {
    jQuery('#render-datatable').dataTable({
        "searching": true,
        "paging": true,
        "processing": false,
        "serverSide": true,
        "order": [],
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "getAllUsers",
            "type": "POST",
            "data": function ( data ) {
                data.fullname = $('#name_filter').val();
                data.email = $('#email_filter').val();
                data.phone = $('#phone_filter').val();
                data.aadhar = $('#aadhar_filter').val();
            }
        },
 /*     dom: 'lBfrtip',
        buttons: [{
                extend: 'excel',
                text: '<i class="far fa-file-excel" aria-hidden="true"></i> Excel Export',
                filename: 'udidlist',
                title: '',
                exportOptions: {
                    modifier: {
                        search: 'applied',
                        order: 'applied',
                        page: 'current'
                    },
                    columns: [1, 2, 3, 4, 5, 6]
                }
            },
            {
                extend: 'csv',
                text: '<i class="far fa-csv"></i> Export CSV',
                filename: 'udidlist',
                title: '',
                exportOptions: {
                    modifier: {
                        search: 'applied',
                        order: 'applied',
                        page: 'current'
                    },
                    columns: [1, 2, 3, 4, 5, 6]
                }
            },
            {
                extend: 'pdf',
                text: '<i class="far fa-file-pdf" aria-hidden="true"></i> PDF',
                filename: 'udidlist',
                title: '',
                exportOptions: {
                    modifier: {
                        search: 'applied',
                        order: 'applied',
                        page: 'current'
                    },
                    columns: [1, 2, 3, 4, 5, 6]
                }
            },
         ], */
 
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "columns": [
            {
                "bVisible": false, "aTargets": [0]
            },
            null,
            null,
            null,
            null,
            null,
            null,

            null,
        ],
        "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            $(nRow).attr('id', aData[0]);
        }
    });

    // define method global search
    function filterGlobal(v) {
        jQuery('#render-datatable').DataTable().search(
                v,
                false,
                false
                ).draw();
    }
    
    // filter keyword
    jQuery('.dashboard input.global_filter').on('keyup click', function () {
        var v = jQuery(this).val();    
        filterGlobal(v);
    });
    jQuery('.dashboard input.column_filter').on('keyup click', function () {
        jQuery('#render-datatable').DataTable().ajax.reload();
    });

    
});

// Delete Record

$(document).on('click', '.delete-em-details', function () {
    var id = $(this).data('getdeid'); 
    if(confirm('Are you sure to remove this record ?' +id ))
    {
        $.ajax({
        type: 'POST',
        data : {id:id},
        url: base_url+'/users/delete',
        dataType:'JSON',
        beforeSend: function(){
            $('#preloader').show();
        },
        success: function(response){
            $("#"+id).remove();
            // alert("Record removed successfully");  
            $('#render-datatable').DataTable().ajax.reload();
            handleresponse("success", response.message);
        },
        error: function (xhr, exception) {
            handleerror(xhr.responseText);
        },
        complete: function(){
            $('#preloader').hide();
        }
        });
    }
});