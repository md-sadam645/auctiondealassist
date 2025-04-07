
$(document).ready(function(){
    //agent mobile and password validation
    $(".agent-btn").attr("disabled","disabled");

    $(".agent-mobile,.agent_pass").on("input",function(){
        if($(".agent-mobile").val().length == 10 && $(".agent_pass").val().length >= 8)
        {
            $(".agent-btn").removeAttr("disabled");
        }
        else
        {
            $(".agent-btn").attr("disabled","disabled"); 
        }
    });

    //update agent mobile and password validation
    $(".update-agent-mobile").on("input",function(){
        if($(".update-agent-mobile").val().length == 10)
        {
            $(".agent-btn").removeAttr("disabled");
        }
        else
        {
            $(".agent-btn").attr("disabled","disabled"); 
        }
    });

    if($(".update-agent-mobile").val().length == 10)
    {
        $(".agent-btn").removeAttr("disabled");
    }
    else
    {
        $(".agent-btn").attr("disabled","disabled"); 
    }



});
