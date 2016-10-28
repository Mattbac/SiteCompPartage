$(function(){
    
    function move(param){
        console.log(param);
        switch(param % 4){
            case 0:
                $("#moveSlider").animate({
                    left: "-100%"
                }, 2000);
            break;
            case 1:
                $("#moveSlider").animate({
                    left: "-200%"
                }, 2000);
            break;
            case 2:
                $("#moveSlider").animate({
                    left: "-300%"
                }, 2000);
            break;
            case 3:
                $("#moveSlider").animate({
                    left: "0"
                }, 2000);
            break;
        }    
    }
    
    var i = 0;
    
    setInterval(function(){
        move(i);
        i++;
    },5000);
    
    $("#buttonSlider>a").click(function(){
        i = (this.id);
        move(i);
    })
})