var base_url = $('#base').val();

$(document).ready(function(){
    listNadalumandram();
});
function listNadalumandram(){
    $.ajax({
        type  : 'POST',
        url   : 'nadalumandram/list_view',
        success : function(response){
            $('#nadalumandramListing').DataTable().destroy();
            $('#listNadalumandram').html(response);
            $('#nadalumandramListing').DataTable({
                
            });	
        }

    });
}

//create a new Nadalumandram record
$(document).on('click', '.modal_nadalumandram', function () {
    var id=$(this).attr("id");
      $.ajax({
        type: 'post',
        url: 'nadalumandram/get_modal',
        data: {id:id},
        success: function (response) {
            $("#addNadalumandramModal").html(response);
            UIkit.modal('#addNadalumandramModal').show();
        }
      });  
}); 

    // // update nadalumandram record
    // $('#editNadalumandramForm').on('submit',function(){	
    //     var form = $("#saveNadalumandramForm");	
    //     $.ajax({
    //         type : "POST",
    //         url  : "nadalumandram/update",
    //         dataType : "JSON",
    //         data : form.serialize(),
    //         success: function(data){
    //             listNadalumandram();
    //         }
    //     });
    // });


// save new nadalumandram record
$(document).on('click', '#form_sub', function () {
    var form = $("#saveNadalumandramForm");
    $.ajax({
        type: "POST",
        url:  "nadalumandram/list_save",
        data: form.serialize(),
        success: function(data){
        UIkit.modal('#addNadalumandramModal').hide();
        listNadalumandram();
        }
    });
    return false;
});


// delete nadalumandram record
$(document).on('click', '.deleteRecord', function () {
    var tId = $(this).data('id'); 
    UIkit.modal.confirm('Are you sure do you want to delete').then(function (){
    $.ajax({
        type : "POST",
        url  : "nadalumandram/list_delete",
        data : {id:tId},
        success: function(data){
            $("#"+tId).remove();
            listNadalumandram();
        }
    });
    });
});

/********************** */
$(document).ready( function () {
    $('#nadalumandramListing').DataTable();
} );
 