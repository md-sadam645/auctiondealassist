$(document).ready(function(){
    //admin login
   $("#formAuthentication").submit(function(event)
   {
      event.preventDefault(); 

      $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                "content"
            ),
            },
        });
      
      data = new FormData();

      $.ajax({
        type: 'POST',
        url: '/user_authentication',
        data: data,
        processData: false,
        contentType: false,
        success: function(response){
            console.log(response);
        }
        });

    });


});

 