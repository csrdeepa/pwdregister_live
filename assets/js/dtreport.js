var base_url = $('#base').val();
jQuery(document).ready(function () {
    jQuery('#report-datatable').dataTable({
        "searching": true,
        "paging": true,
        "processing": false,
        "serverSide": true,
        "order": [],
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "report/rpt_getAllUsers",
            "type": "POST",
            "data": function ( data ) {
                data.fullname = $('#name_filter').val();
                data.email = $('#email_filter').val();
                data.phone = $('#phone_filter').val();
                data.aadhar = $('#aadhar_filter').val();
            }
        },
        dom: 'lBfrtip',
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
        ],
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

            //null, //Action Column
            
        ],
        "fnCreatedRow": function( nRow, aData, iDataIndex ) {
            $(nRow).attr('id', aData[0]);
        }
    });

    // define method global search
    function filterGlobal(v) {
        jQuery('#report-datatable').DataTable().search(
                v,
                false,
                false
                ).draw();
    }
    
    // filter keyword
    jQuery('input.global_filter').on('keyup click', function () {
        var v = jQuery(this).val();    
        filterGlobal(v);
    });
    jQuery('input.column_filter').on('keyup click', function () {
        jQuery('#report-datatable').DataTable().ajax.reload();
    });

    
});
 