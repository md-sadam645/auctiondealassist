$(document).ready(function(){
    $("#pass-change-btn").attr("disabled","disabled");

    $("#currentPassword,#newPassword,#confirmPassword").on("input",function(){
        // alert(this.value.length);
       if(this.value.length >= 8)
       {
            $(".length-val").removeClass("text-danger");
            $(".length-val").addClass("text-success");

            $("#confirmPassword").on("input",function(){
                if($("#newPassword").val() == $(this).val() && this.value.length >= 8)
                {
                    $(".not-match-pass").addClass("d-none");
                    $(".match-pass").removeClass("d-none");

                    $("#pass-change-btn").removeAttr("disabled");
                    
                }
                else
                {
                    $(".match-pass").addClass("d-none");
                    $(".not-match-pass").removeClass("d-none");
                    $("#pass-change-btn").attr("disabled","disabled");
                }
            });

            $("#newPassword").on("input",function(){
                if($("#confirmPassword").val() == $(this).val() && this.value.length >= 8)
                {
                    $(".not-match-pass").addClass("d-none");
                    $(".match-pass").removeClass("d-none");

                    $("#pass-change-btn").removeAttr("disabled");
                    
                }
                else
                {
                    $(".match-pass").addClass("d-none");
                    $(".not-match-pass").removeClass("d-none");
                    $("#pass-change-btn").attr("disabled","disabled");
                }
            });
       }
       else 
       {
            $(".length-val").addClass("text-danger");
            $("#pass-change-btn").attr("disabled","disabled");
       }
    });


    //user account password validation
    $(".user-account-pass").each(function(){
        $(this).click(function(){
            var div = this.parentElement;
            var type = $(div).children('input').attr("type");
            var i = $(this).children('i').attr("class");

            if(i == "ti ti-eye-off" && type == "password")
            {
                $(this).children('i').removeClass(" ti-eye-off");
                $(this).children('i').addClass(" ti-eye");
                $(div).children('input').removeAttr("type");
                $(div).children('input').attr("type","text");
            }

            if(i == "ti ti-eye" && type == "text")
            {
                $(this).children('i').addClass("ti-eye-off");
                $(this).children('i').removeClass(" ti-eye");
                $(div).children('input').removeAttr("password");
                $(div).children('input').attr("type","password");
            }
        });
    });

});