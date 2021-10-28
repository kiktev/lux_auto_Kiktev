

$('.show_more').click(function(){
	$(this).hide(50);
	$(`.car_section .grid_block`).show(100);
	
});

if($('.grid_blocks .grid_block').length > 9){
		$('.show_more').show();
}

$('.cart_submit').click(function() {
	
	var form = $(this).parent();

    $.ajax({
        url: '/index/index',
        type: 'POST',                        
        data: form.serialize(), 
        success: function(data) {
        	
        },
    });

	$(this).parent().hide(50);    
   		
});

function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

if(getCookie('cart') != undefined){

	var cart_array = JSON.parse(decodeURIComponent(getCookie('cart')));

	var elements = $('.cart_submit[data-car-id|="138"]');
	    
	for (var i in cart_array) {
	   $(`.cart_submit[data-car-id|="${cart_array[i]}"]`).hide();
	}

}

function get(name){
   if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
      return decodeURIComponent(name[1]);
}

var car_state = get("car_state");

if(car_state == "new_car"){
	$('.car_state_new').prop('checked', true);;
}

if(car_state == "used_car"){
	$('.car_state_used').prop('checked', true);;
}


