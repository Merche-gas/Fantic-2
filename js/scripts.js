$(document).ready(function(){
    $(".main > span").click(function(){
        let seleccion = $(this).attr("data-menu");
        //console.log(seleccion);

        $(".main>span, .submenu>div").removeClass("activo");

        $(this).addClass("activo");
        $("#"+seleccion).addClass("activo animate__fadeIn")
        $(".submenu").addClass("activo");
    });
  
    $(".cerrar").click(function() {
        $(".submenu, .main>span").removeClass("activo")
        $(".submenu").removeClass("animate__fadeIn")
    });

    $(".hamburguesa").click(function(){
        $(".lateral").addClass("activo animate__slideInLeft");
    });

    $(".aspa").click(function(){
        $(".lateral").removeClass("activo animate__slideInLeft");
    });


    $(".lateral > span").click(function(){
        let seleccion = $(this).attr("data-choose");

        if ($(this).children("ul").hasClass("activo")){
            $(".lateral > span >ul").removeClass("activo");
        }
        else{
            $(".lateral > span >ul").removeClass("activo");
        console.log(seleccion);
        $("#"+seleccion).slideToggle();
        }
        
        // $(".lateral > span >ul").removeClass("activo");
        // console.log(seleccion);
        // $("#"+seleccion).addClass("activo");
    });
        // sevendayseasy

        $(".fuera").click(function(){
            let seleccion = $(this).attr("data-bici");
            //console.log(seleccion);
    
            $(".fuera, .colbic1roja, .colbic1").removeClass("activo");
    
            $(this).addClass("activo");
            $("#"+seleccion).addClass("activo")
        });

        $(".grid >div").click(function(){

            $(".grid >div").removeClass("activo");
            $(this).addClass("activo");
        });


});
