$(window).on("ready", queryFormContent());

// $("#productType").change( queryFormContent());

// $(document).ready(function(){
//     console.log("DOM Ready");
//     $("select").on("change", function(){
//         console.log("change");
//         $( ".ajax-form" ).html( $("#productType").val() );
//     });
//       });


function queryFormContent(){ 
    console.log("change");
    $( ".ajax-form" ).html( $("#productType").val() );
        // $.ajax({
        //     type : 'POST',
        //     url : 'getAddProductForm/',
        //     dataType : 'html',
        //     data: {
        //         selectorChosen : $('#productType').val()
        //     },
        //     success : function(result){
        //         $( ".ajax-form" ).html( $('#productType').val() );
        //         // $( ".ajax-form" ).html( result );
        //     },
        //     error : function() {
        //         $( ".ajax-form" ).html( $('#productType').val() );
        //     }
        // }); 
        return false;
}

$(document).ready(function(){
    console.log("DOM Ready");
    $("select").on("change", queryFormContent());
      });