// Display form on page load
$(function(){
    console.log("DOM Ready");
    queryProductList()
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