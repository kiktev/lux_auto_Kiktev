
$(".mySlides:not([data-visible_slide='1'])").hide();
$(".mySlides[data-visible_slide='1']").show();
var slides = document.getElementsByClassName("mySlides");

$('.next').click(function() {
    
    var first_slide =  $(this).data('first_slide');
    var count = $(this).data('slide_count');
    var tohide = $(this).data('slide_num'); 
    var toshow = tohide + 1;
    
    if (toshow == first_slide + count) {
        slides[tohide].setAttribute('data-visible_slide', '0');
        slides[first_slide].setAttribute('data-visible_slide', '1');
        $(".mySlides:not([data-visible_slide='1'])").hide();
        $(".mySlides[data-visible_slide='1']").show();      
    }else{
        slides[tohide].setAttribute('data-visible_slide', '0');
        slides[toshow].setAttribute('data-visible_slide', '1');
        $(".mySlides:not([data-visible_slide='1'])").hide();
        $(".mySlides[data-visible_slide='1']").show();
    }
});
$('.prev').click(function() {
        
    var first_slide =  $(this).data('first_slide');
    var count = $(this).data('slide_count');
    var last_slide = first_slide + count - 1;
    var tohide = $(this).data('slide_num'); 
    var toshow = tohide - 1;
    
    if (toshow == first_slide - 1) {
        slides[tohide].setAttribute('data-visible_slide', '0');
        slides[last_slide].setAttribute('data-visible_slide', '1');
        $(".mySlides:not([data-visible_slide='1'])").hide();
        $(".mySlides[data-visible_slide='1']").show();      
    }else{
        slides[tohide].setAttribute('data-visible_slide', '0');
        slides[toshow].setAttribute('data-visible_slide', '1');
        $(".mySlides:not([data-visible_slide='1'])").hide();
        $(".mySlides[data-visible_slide='1']").show();
    }
    
});

$('.dot').click(function() {
        
    var tohide = $(this).data('slide_num'); 
    var toshow = $(this).data('show_slide');
    
    slides[tohide].setAttribute('data-visible_slide', '0');
    slides[toshow].setAttribute('data-visible_slide', '1');
    $(".mySlides:not([data-visible_slide='1'])").hide();
    $(".mySlides[data-visible_slide='1']").show();
    
});


var show_count = $('.grid_blocks').data('cars_count');

show_count ++;

$('.show_more').click(function(){
    show_count -= 10;
    if(show_count >= 0){
            $(`.car_section .grid_block:nth-child(n+${show_count})`).show(100);
    }
});

if($('.grid_blocks .grid_block').length > 10){
        $('.show_more').show();
}


$('.cart_remove').click(function() {
	
	var form = $(this).parent();

    $.ajax({
        url: '/cart/cart/',
        type: 'POST',                        
        data: form.serialize(), 
        success: function(data) {
        	
        },
    });

	$(this).parent().parent().parent().parent().parent().hide(0);    
   		
});

