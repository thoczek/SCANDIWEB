// Display form on page load
jQuery(window).on("ready", queryProductList());

//Display form on selector change
$(document).ready(function(){
    $('#submit').on('click',queryProductList());
      });

function queryProductList(){ 
        $.ajax({
            type : 'POST',
            url : 'getProductList/',
            dataType : 'html',
            data: {
                email : $('#email').val()
            },
            success : function(result){
                $( "div.body-wrapper" ).html( result );
            },
            error : function() {
                $( "div.body-wrapper" ).html( "Error fetching data please reload page" );
            }
        }); 
        return false;
}