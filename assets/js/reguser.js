$(document).ready(function (value, ui) {
    var age = "";
    $("#dob").on("change", function () {
        // alert("hi");
        var today = new Date();
        var dob = new Date($('#dob').val());
        var dayDiff = Math.ceil(today - dob) / (1000 * 60 * 60 * 24 * 365);
        var age = parseInt(dayDiff);
        $('#age span').html(age);
    });
});

 //Image Show
 function readURLbin(input) {
  if (input.files && input.files[0]) {
     var reader = new FileReader();
     reader.onload = function (e) {
        $('#img_view').attr('src', e.target.result);
     };
     reader.readAsDataURL(input.files[0]);
  }
}

function readimgpath(input) {
  if (input.files && input.files[0]) {
     var reader = new FileReader();
     reader.onload = function (e) {
        $('#img_view1').attr('src', e.target.result);
     };
     reader.readAsDataURL(input.files[0]);
  }
}

function FillBilling(f) {
   if ($("#filladdress").is(":checked")) 
     $(".tempaddress").hide();
   else
     $(".tempaddress").show();
  }
   
  //having Membership
  $(document).on('click','.membershipradio',function(){
   if($("#havingmembershipyes").prop("checked")){
       $('#havingmembershipdiv').show();
   }
   else{
       $('#havingmembershipdiv').hide();
   }
 });
 
 //MembershipFees Paid
 $(document).on('click','.membershipfeeradio',function(){
   if($("#membershipfeespaidyes").prop("checked")){
       $('#membershipfeespaiddiv').show();
   }
   else{
       $('#membershipfeespaiddiv').hide();
   }
 });

