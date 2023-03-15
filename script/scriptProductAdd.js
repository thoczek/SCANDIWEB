
$(function(){
    console.log('DOM Ready');
    queryFormContent();
    $('#productType').on('change', queryFormContent);
    $('#product_form').on('submit', addProduct);
    $('#sku').on('change', checkSkuUnique);
      }
);

function checkSkuUnique(){
    console.log('check SKU');
    $.ajax({
        type : 'POST',
        url : 'checkSkuUnique/',
        dataType : 'json',
        data: {
            sku:$('#sku').val()
        },
        success : function(result){
            if(result==1)
            {
                $( '#info-message' ).html( "Sku is not unique" );
                $('#save-button').prop('disabled', true);
                return;
            }
            $( '#info-message' ).html( "" );
            $('#save-button').prop('disabled', false);
        },
        error : function() {
            $( '#info-message' ).html( 'Error sku check' )
        }
    }); 
    return false;
}
function queryFormContent(){ 
    console.log('change');
    $.ajax({
        type : 'POST',
        url : 'form/',
        dataType : 'html',
        data: {
            productType:$('#productType').val()
        },
        success : function(result){
            //$( '.ajax-form' ).html( $('#productType').val() );
            $( '.ajax-form' ).html( result );
        },
        error : function() {
            
            $( '.ajax-form' ).html( $('#productType').val() );
        }
    }); 
    return false;
}

function addProduct(){
    console.log("submit");
    //onsubmit="event.preventDefault();"
    //$( '.ajax-form' ).html( $('#sku').val() );
    var parameters;
    if($('#info-message').val() != "Sku is not unique")
    {
        if($('#productType').val()=='DVD'){
            parameters=$('#size').val();
        }
        if($('#productType').val()=='Furniture'){
            parameters=$('#height').val()+'x'+$('#width').val()+'x'+$('#lenght').val();
        }
        if($('#productType').val()=='Book'){
            parameters=$('#weight').val();
        }
        $.ajax({
            type : 'POST',
            url : 'add/',
            dataType : 'html',
            data: {
                sku:$('#sku').val(),
                name:$('#name').val(),
                price:$('#price').val(),
                productType:$('#productType').val(),
                parameters:parameters
            },
            success : function(result){
                //$('.footer-wrapper').html(result);
                console.log('Data saved');
                window.location = "../";
            },
            error : function(result) {
                console.log('Error saving data');
            }
        }); 
    }
    return false;
}

