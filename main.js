$(function(){
    
    var i = 0;
    
    setInterval(function(){
        switch(i % 4){
            case 0:
                $("#slider>div").animate({
                    left: "-100%"
                }, 2000);
            break;
            case 1:
                $("#slider>div").animate({
                    left: "-200%"
                }, 2000);
            break;
            case 2:
                $("#slider>div").animate({
                    left: "-300%"
                }, 2000);
            break;
            case 3:
                $("#slider>div").animate({
                    left: "0"
                }, 2000);
            break;
        }
        
        i++;
        
    },5000);
})