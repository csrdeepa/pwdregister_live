var base_url = $('#base').val();

$(document).on('submit','#register_form',function(e){
    e.preventDefault();
    // $('#preloader').fadeIn('fast');

    var helpfromtrust1 = new Array();
    $("#helpfromtrust input[type=checkbox]:checked").each(function () {
        helpfromtrust1.push(this.value);
    });
    var helpfromtrust = "";
    if (helpfromtrust1.length > 0) {
        helpfromtrust = helpfromtrust1.join(",");
    }

    var hobbies1 = new Array();
    $("#hobbies input[type=checkbox]:checked").each(function () {
        hobbies1.push(this.value);
    });
    var hobbies = "";
    if (hobbies1.length > 0) {
        hobbies = hobbies1.join(",");
    }

    var faname = [];
    var fagender = [];
    var faage = [];
    var farelationship = [];
    var fabusiness = [];

    $('.faname').each(function () {
        faname.push($(this).val());
    });
    $('.fagender').each(function () {
        fagender.push($(this).val());
    });
    $('.faage').each(function () {
        faage.push($(this).val());
    });
    $('.farelationship').each(function () {
        farelationship.push($(this).val());
    });
    $('.fabusiness').each(function () {
        fabusiness.push($(this).val());
    });
    var detdata = [];
    for (let i = 0; i < faname.length; i++) {
        if(faname[i] != ""){
            detdata[i] = {
                "faname": faname[i],
                "fagender": fagender[i],
                "faage": faage[i],
                "farelationship": farelationship[i],
                "fabusiness": fabusiness[i]
            }
        }
    }
    var age = $('#age span').text();

    let form = $(this)[0];
    let data = new FormData(form);

    data.append("age", age);
 
    data.append("helpfromtrustdata", helpfromtrust);
    data.append("hobbiesdata", hobbies);    
    data.append("detdata", JSON.stringify(detdata));
    var regid=$("#registerid").val();
    data.append("id",regid);
    
    if (!regid) {
        data.append("type", 1);        
    } else {
        data.append("type", 2);        
    }

    //  for (var [key, value] of data.entries()) { 
    //     console.log(key, value);
    // }
    var pdfurl=base_url +"users/viewpdf"; 
    $.ajax({
        url: base_url+ "users/savedataajax",
        type: "POST",
        enctype: 'multipart/form-data',
        processData: false,  // Important!
        contentType: false,
        cache: false,
        data: data,
        dataType:'JSON',
        beforeSend: function(){
            $('#preloader').show();
        },
        success: function(response){
            handleresponse("success", response.message);
            console.log("regid :", response.regid);
            if(response.regid){            
            if(confirm("Click ok to view PDF")){
                 window.location=pdfurl+"/"+response.data;
                }
           else{
                window.location=base_url+"users/dashboard"
            }
            }
        },
        error: function (xhr, exception) {
            handleerror(xhr.responseText);
        },
        complete: function(){
            $('#preloader').hide();
        }
        
    });
});

$(document).ready(function () {
    $("#dftype").change(function () {

        var id = $(this).val();
        // console.log(id);
        if (id != '') {
            $.ajax({
                url: "getdftypestate",
                method: "POST",
                data: { id: id, model:"displayvalById" },
                // dataType: 'JSON',
                success: function (result) {
                //    console.log("data", result);
                    if (result=='null'){
                        $('#dftype1').removeClass('dispblock').addClass('dispnone');
                        $('#dftype2').removeClass('dispblock').addClass('dispnone');  
                    }
                    else{
                        $('#dftype1').addClass('dispblock').removeClass('dispnone');
                        $('#dftype2').addClass('dispblock').removeClass('dispnone');
                    }
                } 
            });
        }
    });
});

 

function fill_perengzip(selectObject) {
    var value = selectObject.value;  
    $("#pertamilzip").val(value);
    if(value)
       { $("#pertamilzip").addClass("lblclass");
        $("#perengzip").addClass("lblclass");}
    else
       { $("#pertamilzip").removeClass("lblclass");
        $("#perengzip").addClass("lblclass");}
}
function fill_pertamilzip(selectObject) {
    var value = selectObject.value;  
    $("#perengzip").val(value);
    if(value)
       { $("#pertamilzip").addClass("lblclass");
        $("#perengzip").addClass("lblclass");}
    else
       { $("#pertamilzip").removeClass("lblclass");
        $("#perengzip").addClass("lblclass");}
}

function fill_tempengzip(selectObject) {
    var value = selectObject.value;  
    $("#temptamilzip").val(value);
    if(value)
       { $("#temptamilzip").addClass("lblclass");
        $("#tempengzip").addClass("lblclass");}
    else
       { $("#temptamilzip").removeClass("lblclass");
        $("#tempengzip").addClass("lblclass");}
}
function fill_temptamilzip(selectObject) {
    var value = selectObject.value;  
    $("#tempengzip").val(value);
    if(value)
       { $("#temptamilzip").addClass("lblclass");
        $("#tempengzip").addClass("lblclass");}
    else
       { $("#temptamilzip").removeClass("lblclass");
        $("#tempengzip").addClass("lblclass");}
}