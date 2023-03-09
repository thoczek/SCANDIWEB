jQuery(window).on("load", queryProductList());

$(document).ready(function(){
    $('#submit').click(queryProductList());
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
                $( "div.prl-body-grid" ).html( result );
            },
            error : function() {
                $( "div.prl-body-grid" ).html( "AJAX Error" );
            }
        }); 
        return false;
}