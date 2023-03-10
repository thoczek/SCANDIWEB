
$(function(){
    console.log("DOM Ready");
    queryFormContent();
    $("#productType").on("change", queryFormContent);
      }
);

function queryFormContent(){ 
    console.log("change");
            $.ajax({
            type : 'POST',
            url : 'form/',
            dataType : 'html',
            data: {
                productType:$('#productType').val()
            },
            success : function(result){
                $( ".ajax-form" ).html( $('#productType').val() );
                $( ".ajax-form" ).html( result );
            },
            error : function() {
                $( ".ajax-form" ).html( $('#productType').val() );
            }
        }); 
        return false;
}

