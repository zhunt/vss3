// main.js

var StoryForm = function () {

    return {
        
        //Checkout Form
        initStoryForm: function () {
            // Masking
            /*
            $('#cvv').mask('999', {placeholder:'X'});
            $('#card').mask('9999-9999-9999-9999', {placeholder:'X'});
            $('#year').mask('2099', {placeholder:'X'});
            
            // Add validation method
            $.validator.addMethod("creditcard", function(value, element, param) {
                if( /[^0-9\-]+/.test(value) )
                {
                    return false;
                }
            },
            $.validator.format('Please enter a valid credit card number.'));
            */
            // Validation
            $('#submitNews').validate({
                // Rules for form validation
                rules:
                {
                    name:
                    {
                        required: true,
                    	rangelength: [10, 100],
      					//normalizer: function( value ) { return $.trim( value ); }
                    },
                    body:
                    {
                        required: true,
                       	rangelength: [300, 5000],
                       // normalizer: function( value ) { return $.trim( value ); }
                    },
                    feature_text:
                    {
                        required: false,
                        url: true
                    },
                    author:
                    {
                        required: false,
                        rangelength: [5, 50]    
                    },
                    author_url:
                    {
                        required: false,
                        url: true
                    },                    

                },
                                    
                // Messages for form validation
                messages:
                {
                    name:
                    {
                    	required: 'Please enter a name for the story',
                       	rangelength: "Please enter at least 10 characters, less than 100"
                    },
                    body:
                    {
                        required: 'Please enter some text',
                       rangelength: "Please enter at least 300 characters, less than 5000"
                    },
                    feature_text:
                    {
                    	url: 'please enter one valid URL, e.g. http://www.littletwentieth.com'
                    },
                    author:
                    {
                        rangelength: "Please enter at least 5 characters, less than 50"
                    },                    
                    author_url:
                    {
                        url: 'please enter one valid URL, e.g. http://mywebsite.ca'    
                    }


                },                  
                
                // Do not change code below
                errorPlacement: function(error, element)
                {
                    error.insertAfter(element.parent());
                }
            });
        }

    };

}();

function showStorySubmitButton(){
	$('#submitStoryBtn').show();

	//document.getElementById("submitStoryBtn").disabled = false;

}

    jQuery(document).ready(function() {
        $('#submitStoryBtn').hide();     
       
       StoryForm.initStoryForm();        
          
    });