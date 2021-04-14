$(document).ready(function () {
    fetchdropdown("#perengstate", "fetch_district_eng", "#perengdistrict");
    fetchdropdown("#perengstate", "fetch_district", "#pertamildistrict"); 
    
    fetchdropdown("#pertamilstate", "fetch_district_eng", "#perengdistrict");
    fetchdropdown("#pertamilstate", "fetch_district", "#pertamildistrict");     

    fetchdropdown("#perengdistrict", "fetch_taluk_eng", "#perengtaluk");
    fetchdropdown("#perengdistrict", "fetch_taluk", "#pertamiltaluk"); 
    
    fetchdropdown("#pertamildistrict", "fetch_taluk_eng", "#perengtaluk");
    fetchdropdown("#pertamildistrict", "fetch_taluk", "#pertamiltaluk");  
    /**** */ 
    fetchdropdown("#tempengstate", "fetch_district_eng", "#tempengdistrict");
    fetchdropdown("#tempengstate", "fetch_district", "#temptamildistrict"); 
    
    fetchdropdown("#temptamilstate", "fetch_district_eng", "#tempengdistrict");
    fetchdropdown("#temptamilstate", "fetch_district", "#temptamildistrict");     

    fetchdropdown("#tempengdistrict", "fetch_taluk_eng", "#tempengtaluk");
    fetchdropdown("#tempengdistrict", "fetch_taluk", "#temptamiltaluk"); 
    
    fetchdropdown("#temptamildistrict", "fetch_taluk_eng", "#tempengtaluk");
    fetchdropdown("#temptamildistrict", "fetch_taluk", "#temptamiltaluk"); 
});

function fillstate_perengstate(selectObject) {
    var value = selectObject.value;  
    fetchdropdown("#perengstate", "fetch_district_eng", "#perengdistrict");
    fetchdropdown("#perengstate", "fetch_district", "#pertamildistrict");     
    $("#pertamilstate").val(value);
    if(value)
       { $("#pertamilstate").addClass("lblclass");
        $("#perengstate").addClass("lblclass");}
    else
       { $("#pertamilstate").removeClass("lblclass");
        $("#perengstate").addClass("lblclass");}
    // console.log(value);
}
function fillstate_pertamilstate(selectObject) {
    var value = selectObject.value;  
    fetchdropdown("#pertamilstate", "fetch_district_eng", "#perengdistrict");
    fetchdropdown("#pertamilstate", "fetch_district", "#pertamildistrict");    
    $("#perengstate").val(value);
    if(value)
       { $("#pertamilstate").addClass("lblclass");
        $("#perengstate").addClass("lblclass");}
    else
       { $("#pertamilstate").removeClass("lblclass");
        $("#perengstate").addClass("lblclass");}
    // console.log(value);
}

function filldistrict_perengdistrict(selectObject) {
    var value = selectObject.value;  
    fetchdropdown("#perengdistrict", "fetch_taluk_eng", "#perengtaluk");
    fetchdropdown("#perengdistrict", "fetch_taluk", "#pertamiltaluk");     
    $("#pertamildistrict").val(value);
    if(value)
       { $("#pertamildistrict").addClass("lblclass");
        $("#perengdistrict").addClass("lblclass");}
    else
       { $("#pertamildistrict").removeClass("lblclass");
        $("#perengdistrict").addClass("lblclass");}
    // console.log(value);
}
function filldistrict_pertamildistrict(selectObject) {
    var value = selectObject.value;  
    fetchdropdown("#pertamildistrict", "fetch_taluk_eng", "#perengtaluk");
    fetchdropdown("#pertamildistrict", "fetch_taluk", "#pertamiltaluk");    
    $("#perengdistrict").val(value);
    if(value)
       { $("#pertamildistrict").addClass("lblclass");
        $("#perengdistrict").addClass("lblclass");}
    else
       { $("#pertamildistrict").removeClass("lblclass");
        $("#perengdistrict").addClass("lblclass");}
    // console.log(value);
}

function filltaluk_perengtaluk(selectObject) {
    var value = selectObject.value;  
    $("#pertamiltaluk").val(value);
    if(value)
       { $("#pertamiltaluk").addClass("lblclass");
        $("#perengtaluk").addClass("lblclass");}
    else
       { $("#pertamiltaluk").removeClass("lblclass");
        $("#perengtaluk").addClass("lblclass");}
    // console.log(value);
}
function filltaluk_pertamiltaluk(selectObject) {
    var value = selectObject.value;  
    $("#perengtaluk").val(value);
    if(value)
       { $("#pertamiltaluk").addClass("lblclass");
        $("#perengtaluk").addClass("lblclass");}
    else
       { $("#pertamiltaluk").removeClass("lblclass");
        $("#perengtaluk").addClass("lblclass");}
    // console.log(value);
}

/*** */

function fillstate_tempengstate(selectObject) {
    var value = selectObject.value;  
    fetchdropdown("#tempengstate", "fetch_district_eng", "#tempengdistrict");
    fetchdropdown("#tempengstate", "fetch_district", "#temptamildistrict");     
    $("#temptamilstate").val(value);
    if(value)
       { $("#temptamilstate").addClass("lblclass");
        $("#tempengstate").addClass("lblclass");}
    else
       { $("#temptamilstate").removeClass("lblclass");
        $("#tempengstate").addClass("lblclass");}
    // console.log(value);
}
function fillstate_temptamilstate(selectObject) {
    var value = selectObject.value;  
    fetchdropdown("#temptamilstate", "fetch_district_eng", "#tempengdistrict");
    fetchdropdown("#temptamilstate", "fetch_district", "#temptamildistrict");    
    $("#tempengstate").val(value);
    if(value)
       { $("#temptamilstate").addClass("lblclass");
        $("#tempengstate").addClass("lblclass");}
    else
       { $("#temptamilstate").removeClass("lblclass");
        $("#tempengstate").addClass("lblclass");}
    // console.log(value);
}

function filldistrict_tempengdistrict(selectObject) {
    var value = selectObject.value;  
    fetchdropdown("#tempengdistrict", "fetch_taluk_eng", "#tempengtaluk");
    fetchdropdown("#tempengdistrict", "fetch_taluk", "#temptamiltaluk");     
    $("#temptamildistrict").val(value);
    if(value)
       { $("#temptamildistrict").addClass("lblclass");
        $("#tempengdistrict").addClass("lblclass");}
    else
       { $("#temptamildistrict").removeClass("lblclass");
        $("#tempengdistrict").addClass("lblclass");}
    // console.log(value);
}
function filldistrict_temptamildistrict(selectObject) {
    var value = selectObject.value;  
    fetchdropdown("#temptamildistrict", "fetch_taluk_eng", "#tempengtaluk");
    fetchdropdown("#temptamildistrict", "fetch_taluk", "#temptamiltaluk");    
    $("#tempengdistrict").val(value);
    if(value)
       { $("#temptamildistrict").addClass("lblclass");
        $("#tempengdistrict").addClass("lblclass");}
    else
       { $("#temptamildistrict").removeClass("lblclass");
        $("#tempengdistrict").addClass("lblclass");}
    // console.log(value);
}

function filltaluk_tempengtaluk(selectObject) {
    var value = selectObject.value;  
    $("#temptamiltaluk").val(value);
    if(value)
       { $("#temptamiltaluk").addClass("lblclass");
        $("#tempengtaluk").addClass("lblclass");}
    else
       { $("#temptamiltaluk").removeClass("lblclass");
        $("#tempengtaluk").addClass("lblclass");}
    // console.log(value);
}
function filltaluk_temptamiltaluk(selectObject) {
    var value = selectObject.value;  
    $("#tempengtaluk").val(value);
    if(value)
       { $("#temptamiltaluk").addClass("lblclass");
        $("#tempengtaluk").addClass("lblclass");}
    else
       { $("#temptamiltaluk").removeClass("lblclass");
        $("#tempengtaluk").addClass("lblclass");}
    // console.log(value);
}
function fetchdropdown(selectid, model, selectfetchid) {
    // $(selectid).change(function () {
        var id = $(selectid).val();
        if (id != '') {
            $.ajax({
                url: "fetch_dropdown",
                method: "POST",
                data: { id: id, model:model },
                success: function (data) {
                    $(selectfetchid).html(data);
                }
            });
        }
        else {
            $(selectfetchid).html('<option value=""> --- </option>');
        }
    // });
}



$(document).ready(function () {
    // $('#country').change(function () {
    //     var country_id = $('#country').val();
    //     if (country_id != '') {
    //         $.ajax({
    //             url: "fetch_state",
    //             method: "POST",
    //             data: { country_id: country_id },
    //             success: function (data) {
    //                 $('#state').html(data);
    //                 $('#city').html('<option value="">Select City</option>');
    //             }
    //         });
    //     }
    //     else {
    //         $('#state').html('<option value="">Select State</option>');
    //         $('#city').html('<option value="">Select City</option>');
    //     }
    // });

    // $('#state').change(function () {
    //     var state_id = $('#state').val();
    //     if (state_id != '') {
    //         $.ajax({
    //             url: "fetch_city",
    //             method: "POST",
    //             data: { state_id: state_id },
    //             success: function (data) {
    //                 $('#city').html(data);
    //             }
    //         });
    //     }
    //     else {
    //         $('#city').html('<option value="">Select City</option>');
    //     }
    // });
});

