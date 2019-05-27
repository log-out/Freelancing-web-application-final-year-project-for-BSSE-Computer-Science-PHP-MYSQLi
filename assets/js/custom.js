window.onload = function () {
	document.getElementById('step-2').style.display = 'none';
	document.getElementById('step-3').style.display = 'none';
}
function form_step_1() {
	if (document.getElementById('next')){
		//* == Display Next Form ==*/
		document.getElementById('step-2').style.display = 'block';
		document.getElementById('step-1').style.display = 'none';
		document.getElementById('step-3').style.display = 'none';
		/*== Top Header Remove Class == */
		document.getElementById('stp-1').classList.remove('active');
		document.getElementById('stp-2').classList.add('active');

}
		
}

function form_step_2() {
	if (document.getElementById('next')){
		document.getElementById('step-3').style.display = 'block';
		document.getElementById('step-2').style.display = 'none';
		document.getElementById('step-1').style.display = 'none';
		document.getElementById('stp-2').classList.remove('active');
		document.getElementById('stp-3').classList.add('active');
}
}



//onblur function
function requiredField(input) {
    if (input.value.length < 1) {
      //red border
        input.style.borderColor = "#e74c3c";
      
    } else if (input.type == "email") {
      console.log("this is an email type");
      
        if (input.value.indexOf("@") != -1 && input.value.indexOf(".") != -1) {
          //green border
          input.style.borderColor = "#2ecc71";
        } else {
          //red border
          input.style.borderColor = "#e74c3c";
        }
      
    } else {
      //green border
        input.style.borderColor = "#2ecc71";
    }
}


//great artical on how to pull the broswer's errors and then display these fields when the end user tries submitting the form https://www.tjvantoll.com/2012/08/05/html5-form-validation-showing-all-error-messages/

var createAllErrors = function() {
        var form = $( this ),
            errorList = $( "ul.errorMessages", form );

        var showAllErrorMessages = function() {
            errorList.empty();

            // Find all invalid fields within the form.
            var invalidFields = form.find( ":invalid" ).each( function( index, node ) {

                // Find the field's corresponding label
                var label = $( "label[for=" + node.id + "] "),
                    // Opera incorrectly does not fill the validationMessage property.
                    message = node.validationMessage || 'Invalid value.';

                errorList
                    .show()
                    .append( "<li><span>" + label.html() + "</span> " + message + "</li>" );
            });
        };

        // Support Safari
        form.on( "submit", function( event ) {
            if ( this.checkValidity && !this.checkValidity() ) {
                $( this ).find( ":invalid" ).first().focus();
                event.preventDefault();
            }
        });

        $( "input[type=submit], button:not([type=button])", form )
            .on( "click", showAllErrorMessages);

        $( "input", form ).on( "keypress", function( event ) {
            var type = $( this ).attr( "type" );
            if ( /date|email|month|number|search|tel|text|time|url|week/.test ( type )
              && event.keyCode == 13 ) {
                showAllErrorMessages();
            }
        });
    };
    
    $( "form" ).each( createAllErrors );


    /*=== Skills === */
    $(function(){

  $('#tags input').on('focusout', function(){    
    var txt= this.value.replace(/[^a-zA-Z0-9\+\-\.\#]/g,''); // allowed characters list
    if(txt) $(this).before('<span class="tag">'+ txt +'</span>');
    this.value="";
    this.focus();
  }).on('keyup',function( e ){
    // comma|enter (add more keyCodes delimited with | pipe)
    if(/(188|13)/.test(e.which)) $(this).focusout();
  });
  
  $('#tags').on('click','.tag',function(){
     if( confirm("Really delete this tag?") ) $(this).remove(); 
  });

});
