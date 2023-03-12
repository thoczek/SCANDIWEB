
$(function(){
    console.log('DOM Ready');
    queryFormContent();
    $('#productType').on('change', queryFormContent);
    $('#save-button').on('click', addProduct);
      }
);

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
    var parameters;
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
    return false;
}

