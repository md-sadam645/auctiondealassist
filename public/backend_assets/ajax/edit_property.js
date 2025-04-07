$(document).ready(function(){
    //checking edit or upload data
    var url = window.location.href;
   
    //  alert(url);
    var split_data = url.split("/")
    // alert(split_data);
    if(url.match(/edit-property/gi))
    {
        //edit data
        var id = split_data[4];
        var token = $("body").attr("token");
        if(id != "")
        {
            $.ajax({
                type : "GET",
                url : "/edit_property",
                data:{
                    token : token,
                    id : id
                },
                success : function(response){
                    $(".property-update-btn").html("Save");
                    console.log(response);
                    response.data.forEach(function(data){
                        var id = data['id'];
                        $("#bank-name").val(data['bank_name']);
                        $("#property-type").val(data['property_type']);
                        $("#area").val(data['area']);
                        $("#possession").val(data['possession']);
                        $("#locality").val(data['locality']);
                        $("#city").val(data['city']);
                        $("#state").val(data['state']);
                        $("#country").val(data['country']);
                        $("#reserve-Price").val(data['reserve_price']);
                        $("#reserve-price-per-Sq-Ft").val(data['reserve_price_per_sq_ft']);
                        $("#emd-amount").val(data['emd_amount']);
                        $("#bid-increment").val(data['bid_increment']);
                        
                        //upload updated data
                        if($(".property-update-btn").html() == "Save")
                        {
                            document.querySelector("#p-image").removeAttribute("required");

                            $(".add-property-form").submit(function(e){
                                e.preventDefault();
                                var id = data['id'];
                                var update_Data =  new FormData(this);
                                update_Data.append("id",id);

                                $.ajax({
                                    type : 'POST',
                                    url : '/update_property',
                                    data : update_Data,
                                    processData : false,
                                    contentType : false,
                                    success : function(response){
                                        console.log(response);
                                        // if(response.data.trim() == "Successfully Upload Property")
                                        // {
                                        //     window.location.href = "/dashboard";
                                        // }
                                    }
                                });
                            });
                        }
                    });
                }
            });
        }
    }
    else
    {
        $(".property-update-btn").html("Submit");
        //upload new data
        if($(".property-update-btn").html() == "Submit")
        {
            document.querySelector("#p-image").setAttribute("required","required");

            $(".add-property-form").submit(function(e){
                e.preventDefault();
                var all_Data =  new FormData(this);
                
                $.ajax({
                    type : 'POST',
                    url : '/newProperty',
                    data : all_Data,
                    processData : false,
                    contentType : false,
                    success : function(response){
                        // console.log(response);
                        if(response.data.trim() == "Successfully Upload Property")
                        {
                            window.location.href = "/dashboard";
                        }
                    }
                });
            });
        }
        
    }
});