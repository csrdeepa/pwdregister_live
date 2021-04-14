$(document).ready(function(){
    listTaluk();
});
function listTaluk(){
    $.ajax({
        type  : 'POST',
        url   : 'taluk/list_view',
        success : function(response){
            $('#talukListing').DataTable().destroy();
            $('#listRecords').html(response);
            $('#talukListing').DataTable({
                
            });	
        }

    });
}

//create a new Taluk record
$(document).on('click', '.modal_taluk', function () {
    var id=$(this).attr("id");
      $.ajax({
        type: 'post',
        url: 'taluk/get_modal',
        data: {id:id},
        success: function (response) {
            $("#addTalukModal").html(response);
            UIkit.modal('#addTalukModal').show();
        }
      });  
}); 

    // // update taluk record
    // $('#editTalukForm').on('submit',function(){	
    //     var form = $("#saveTalukForm");	
    //     $.ajax({
    //         type : "POST",
    //         url  : "taluk/update",
    //         dataType : "JSON",
    //         data : form.serialize(),
    //         success: function(data){
    //             listTaluk();
    //         }
    //     });
    // });


// save new taluk record
$(document).on('click', '#form_sub', function () {
    var form = $("#saveTalukForm");
    $.ajax({
        type: "POST",
        url:  "taluk/list_save",
        data: form.serialize(),
        success: function(data){
        UIkit.modal('#addTalukModal').hide();
        listTaluk();
        }
    });
    return false;
});


// delete taluk record
$(document).on('click', '.deleteRecord', function () {
    var tId = $(this).data('id'); 
    UIkit.modal.confirm('Are you sure do you want to delete').then(function (){
    $.ajax({
        type : "POST",
        url  : "taluk/list_delete",
        data : {id:tId},
        success: function(data){
            $("#"+tId).remove();
            listTaluk();
        }
    });
    });
});

/********************** */
$(document).ready( function () {
    $('#talukListing').DataTable();
} );

$(document).ready(function () {
    fetchitemdropdown("#tstate", "fetch_district_eng", "#district");
    fetchitemdropdown("#tstate", "fetch_district", "#tdistrict");  

    fetchitemdropdown("#state", "fetch_district_eng", "#district");
    fetchitemdropdown("#district", "fetch_taluk_eng", "#taluk");

    fetchitemdropdown("#state", "fetch_district", "#tdistrict");
    fetchitemdropdown("#district", "fetch_taluk", "#ttaluk");  
  
});

var base_url = $('#base').val();
function fetchitemdropdown(selectid, model, selectfetchid) {
    // $(selectid).change(function () {
        var id = $(selectid).val();
        if (id != '') {
            $.ajax({
                url: base_url+"/users/fetch_dropdown",
                method: "POST",
                data: { id: id, model:model },
                success: function (data) {
                    $(selectfetchid).html(data);

                }
            });
        }
        else {
            $(selectfetchid).html('<option value=""> -------- </option>');
        }
    // });
}

$(document).ready(function () {
    
});

function fillstate(selectObject) {
    var value = selectObject.value;  
    fetchitemdropdown("#state", "fetch_district_eng", "#district");
    fetchitemdropdown("#state", "fetch_district", "#tdistrict");    
    $("#tstate").val(value);
    if(value)
       { $("#tstate").addClass("lblclass");
        $("#state").addClass("lblclass");}
    else
       { $("#tstate").removeClass("lblclass");
        $("#state").removeClass("lblclass");}
    // console.log(value);
}
function filldistrict(selectObject) {
    var value = selectObject.value;  
    $("#tdistrict").val(value);
    if(value)
        {$("#tdistrict").addClass("lblclass");
        $("#district").addClass("lblclass");}
        else{
            $("#tdistrict").removeClass("lblclass");
            $("#district").removeClass("lblclass");
        }
    // console.log(value);
}

function tfillstate(selectObject) {
    var value = selectObject.value; 
    fetchitemdropdown("#tstate", "fetch_district_eng", "#district");
    fetchitemdropdown("#tstate", "fetch_district", "#tdistrict");     
    $("#state").val(value);
    if(value)
        {
        $("#state").addClass("lblclass");
        $("#tstate").addClass("lblclass");
    }
    else
       { $("#state").removeClass("lblclass");
        $("#tstate").removeClass("lblclass");}
    // console.log(value);
}
function tfilldistrict(selectObject) {
    var value = selectObject.value;  
    $("#district").val(value);
    if(value)
        {$("#tdistrict").addClass("lblclass");
        $("#district").addClass("lblclass");}
        else{
            $("#tdistrict").removeClass("lblclass");
            $("#district").removeClass("lblclass");
        }
    // console.log(value);
}

