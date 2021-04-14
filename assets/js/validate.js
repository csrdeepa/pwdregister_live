$("#register_form").validate({
  rules: {
    
          efirstname: "required",        
          phone: {
          "required":true,
          "minlength":10,
          "maxlength":10,
          },
          aadhar: {
            "required":true,
            "minlength":12,
            "maxlength":12,
            },
           email: {
              "email" : true,
            },
            phone2: {
              "minlength":10,
              "maxlength":10,
              },
              gardiancontact1: {
              "minlength":10,
              "maxlength":10,
              },
              gardiancontact2: {
              "minlength":10,
              "maxlength":10,
              },                              
  },
  errorElement : 'span',
  errorClass: 'errorTxt error',
  errorPlacement: function(error, element) {
    error.insertAfter(element.parent().find('.aftererror'));
},
  messages: {
    
    efirstname: {
      required: "Please enter your firstname</p>",
     },
    phone: {
      required: "Please enter your phone number",
      minlength: "Invalid Phone number",
      maxlength: "Invalid Phone number",      
    },
    aadhar: {
      required: "Please enter your Aadhar number",
      minlength: "Invalid Aadhar number",
      maxlength: "Invalid Aadhar number",
      remote:"Aadhar Number already exists."
    },
    email: {
      email : "Invalid email",
    },
    phone2: {
      minlength: "Invalid Phone number",
      maxlength: "Invalid Phone number",
    },    
    gardiancontact1: {
      minlength: "Invalid Phone number",
      maxlength: "Invalid Phone number",
    },
    gardiancontact2: {
      minlength: "Invalid Phone number",
      maxlength: "Invalid Phone number",
    },
  }, 

});

// for numeric
$('.propdecimal6').inputmask("numeric", {
  // radixPoint: ".",
  "digits": 6,
  "autoGroup": true,
  // prefix: '', //No Space, this will truncate the first character
  "rightAlign": false,
  "mask": "999999"
  
});
$('.propdecimal10').inputmask("numeric", {
  "digits": 10,
  "autoGroup": true,
  "rightAlign": false,
  "mask": "9999999999"
});
$('.propdecimal12').inputmask("numeric", {
  "digits": 12,
  "autoGroup": true,
  "rightAlign": false,
  "mask": "999999999999"
});