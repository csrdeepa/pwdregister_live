// Same as above address
function setBillingAddress(){
  if ($("#filladdress").is(":checked")) {
      
    $('#ttstreet_addres').val($('#tpstreet_addres').val());
    $('#ttstreet_addres').attr('disabled', 'disabled');
      
    $('#ttstreet_landmark').val($('#tpstreet_landmark').val());
    $('#ttstreet_landmark').attr('disabled', 'disabled');
      
    $('#ttvartno').val($('#tpvartno').val());
    $('#ttvartno').attr('disabled', 'disabled');
      
    $('#ttvillage').val($('#tpvillage').val());
    $('#ttvillage').attr('disabled', 'disabled');
      
    $('#ttpost').val($('#tppost').val());
    $('#ttpost').attr('disabled', 'disabled');   
      
    $('#temptamilzip').val($('#pertamilzip').val());
    $('#temptamilzip').attr('disabled', 'disabled'); 

    $('#temptamilstate').val($('#pertamilstate').val());
    $('#temptamilstate').attr('disabled', 'disabled');  
    $("#temptamilstate").trigger("change");
    

    // $('#temptamildistrict').val($('#pertamildistrict').val());
    // $('#temptamildistrict').attr('disabled', 'disabled');  
    // $("#temptamildistrict").trigger("change");
    
    // $('#temptamiltaluk').val($('#pertamiltaluk').val());
    // $('#temptamiltaluk').attr('disabled', 'disabled');  
    // $("#temptamiltaluk").trigger("change");

    
    //
      
    $('#etstreet_addres').val($('#epstreet_addres').val());
    $('#etstreet_addres').attr('disabled', 'disabled');
      
    $('#etaddress_landmark').val($('#epstreet_landmark').val());
    $('#etaddress_landmark').attr('disabled', 'disabled');
      
    $('#etvartno').val($('#epvartno').val());
    $('#etvartno').attr('disabled', 'disabled');
      
    $('#etvillage').val($('#epvillage').val());
    $('#etvillage').attr('disabled', 'disabled');
      
    $('#etpost').val($('#eppost').val());
    $('#etpost').attr('disabled', 'disabled');   
     
    $('#tempengzip').val($('#perengzip').val());
    $('#tempengzip').attr('disabled', 'disabled');  

    $('#tempengstate').val($('#perengstate').val());
    // $('#tempengstate').attr('disabled', 'disabled');  
    $("#tempengstate").trigger("change");
 
    $perengdistrict =  $('#perengdistrict').val(); 
    // jQuery('#tempengdistrict').val($('#perengdistrict').val());   
    // $('#tempengdistrict').attr('disabled', 'disabled');  
    // jQuery("#tempengdistrict").trigger("change");

    // $('#tempengtaluk').val($('#perengtaluk').val());
    // $('#tempengtaluk').attr('disabled', 'disabled');  
    // $("#tempengtaluk").trigger("change"); 

  } else {
    $('#ttstreet_addres').removeAttr('disabled');
    $('#ttstreet_landmark').removeAttr('disabled');
    $('#ttvartno').removeAttr('disabled');   
    $('#ttvillage').removeAttr('disabled');     
    $('#ttpost').removeAttr('disabled'); 
    $('#temptamilzip').removeAttr('disabled');     
    $('#temptamilstate').removeAttr('disabled');  
    // $('#temptamildistrict').removeAttr('disabled');     
    // $('#temptamiltaluk').removeAttr('disabled');     
    //
    $('#etstreet_addres').removeAttr('disabled');
    $('#etaddress_landmark').removeAttr('disabled');
    $('#etvartno').removeAttr('disabled');   
    $('#etvillage').removeAttr('disabled');     
    $('#etpost').removeAttr('disabled');   
    $('#tempengzip').removeAttr('disabled');       
    $('#tempengstate').removeAttr('disabled');
    // $('#tempengdistrict').removeAttr('disabled');        
    // $('#tempengtaluk').removeAttr('disabled');
  }
}

$('#filladdress').click(function(){
  // setBillingAddress();
})
 