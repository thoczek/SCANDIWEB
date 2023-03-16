//*********************************************************/
// Display form on page load and bind events
//*********************************************************/
$(function(){
    console.log("DOM Ready");
    queryProductList();
    $("#delete-product-btn").on("click",deleteProducts);
    }
);

//*********************************************************/
//Dispaly product list on page
//*********************************************************/
function queryProductList(){ 
        console.log("Query product list");
        $.ajax({
            type : 'POST',
            url : 'getProductList/',
            dataType : 'html',
            data: {},
            success : function(result){
                $( "div.body-wrapper" ).html( result );
            },
            error : function() {
                $( "div.body-wrapper" ).html( "Error fetching data please reload page" );
            }
        }); 
        return false;
}
//*********************************************************/
//Delete selected products
//*********************************************************/
function deleteProducts(){ 
    var formData = $('#formDelete').serializeArray();
    console.log("Delete");
    console.log(formData);
    $.ajax({
        type : 'POST',
        url : 'deleteProducts/',
        dataType : 'html',
        data: formData,
        success : function(result){
            $( ".footer-wrapper" ).html( result );
        },
        error : function() {
            $( "div.body-wrapper" ).html( "Error fetching data please reload page" );
        }
    }); 
    setTimeout(function(){
        queryProductList();
    }, 50); 
    
    return false;
}