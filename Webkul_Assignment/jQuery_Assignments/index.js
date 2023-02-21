$(document).ready(function(){
    $("#fire").click(function(){
        console.log("button clicked");
        animateBox();
    });

    function animateBox(){
        $("#box").animate({left:"93%"},4000);
    }
});