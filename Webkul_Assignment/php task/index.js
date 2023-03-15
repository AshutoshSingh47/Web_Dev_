$(document).ready(function(){
    $("#image-form").on("submit",function(e){
        // let formData=$("#image-form");
        let form = new FormData(this);

        $.ajax({
            url:"index.php",
            type:"POST",
            data: form,
            contentType:false,
            processData:false,
            success:function(data){
                $("#image-box").html(data);
                console.log("uploaded");
            }
        });
    });
})