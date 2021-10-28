var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("carInfo_slide");
  
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
 
  slides[slideIndex-1].style.display = "block";  
  
}

/*

$('#deleteImg').click(function() {
	
	var form = $(this).parent();
	var id = $(this).data('car_id');

    $.ajax({
        url: '/admin/edit_car?id=`${id}`',
        type: 'POST',                        
        data: form.serialize(), 
        success: function(data) {
        		form.parent().hide();
        },

    });
      		
});

*/