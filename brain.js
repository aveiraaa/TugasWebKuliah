function home(){
    $(document).ready(function(){
        $('#utama').load("konten.html")
    });
}

function oop(){
    $(document).ready(function(){
        $('#utama').load("OOP.html")
    });
}

function web(){
    $(document).ready(function(){
        $('#utama').load("PemrogramanWeb.html")
    });
}

function metnum(){
    $(document).ready(function(){
        $('#utama').load("SoftwareNumerik.html")
    });
}


$(document).ready(function() {

    $("#anime").click(function() {
        $("#foto").slideToggle(10000);;
    });

    $("#footer").mouseenter(function() {
        
    $("#bawah").animate({fontSize: '2em'}, "fast");
    $("#foto").animate({opacity: '0.5'}, "fast");    
    });

    $("#footer").mouseleave(function(){
    $("#bawah").animate({fontSize: '32px'}, "fast");
    $("#foto").animate({opacity: '1'}, "fast");  
    });
});