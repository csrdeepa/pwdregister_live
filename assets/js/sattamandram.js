var base_url = $('#base').val();

$(document).ready(function(){
    listSattamandram();
});
function listSattamandram(){
    $.ajax({
        type  : 'POST',
        url   : 'sattamandram/list_view',
        success : function(response){
            $('#sattamandramListing').DataTable().destroy();
            $('#listSattamandram').html(response);
            $('#sattamandramListing').DataTable({
                
            });	
        }

    });
}

//create a new Sattamandram record
$(document).on('click', '.modal_sattamandram', function () {
    var id=$(this).attr("id");
      $.ajax({
        type: 'post',
        url: 'sattamandram/get_modal',
        data: {id:id},
        success: function (response) {
            $("#addSattamandramModal").html(response);
            UIkit.modal('#addSattamandramModal').show();
        }
      });  
}); 

    // // update sattamandram record
    // $('#editSattamandramForm').on('submit',function(){	
    //     var form = $("#saveSattamandramForm");	
    //     $.ajax({
    //         type : "POST",
    //         url  : "sattamandram/update",
    //         dataType : "JSON",
    //         data : form.serialize(),
    //         success: function(data){
    //             listSattamandram();
    //         }
    //     });
    // });


// save new sattamandram record
$(document).on('click', '#form_sub', function () {
    var form = $("#saveSattamandramForm");
    $.ajax({
        type: "POST",
        url:  "sattamandram/list_save",
        data: form.serialize(),
        success: function(data){
        UIkit.modal('#addSattamandramModal').hide();
        listSattamandram();
        }
    });
    return false;
});


// delete sattamandram record
$(document).on('click', '.deleteRecord', function () {
    var tId = $(this).data('id'); 
    UIkit.modal.confirm('Are you sure do you want to delete').then(function (){
    $.ajax({
        type : "POST",
        url  : "sattamandram/list_delete",
        data : {id:tId},
        success: function(data){
            $("#"+tId).remove();
            listSattamandram();
        }
    });
    });
});

/********************** */
$(document).ready( function () {
    $('#sattamandramListing').DataTable();
} );
 