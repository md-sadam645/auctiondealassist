$(document).ready(function(){
     //add by details fetting
   $(".property-view-btn").click(function(){
    
        var id = $(".add-by").attr("id");
        var token = $(".add-by").attr("token");

        $.ajax({
            type: 'GET',
            url: '/user_information/'+id,
            data: {
                token : token
            },
            success: function(response){
                console.log(response);
            }
        });
    });
});