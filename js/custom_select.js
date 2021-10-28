
var this_select;

$(document).ready(function($) { 
  	$("#custom_select_main").keyup();
});


$(".cust_select").click(function(){
	
	this_select = $(this);
		
	$(this).find('li').css('display', 'flex');
	$(this).find('.input_select').val('');	

	$(this).find('input').focus();
	
	$('.option').click(function(){
		
		$(this.parentNode).children('.option').removeClass('main');
		$(this).addClass('main');
		
		$(this.parentNode).children('.option').not('.main').hide(10);
		
		var li_val = $(this).data("option"); 
		
		var this_input = $(this.parentNode).find('.hidden_input');
		this_input.attr('value', li_val);
		$('.option').not('.main').hide(10);
		
	});
}).children().click(function(e) {
	$(this).find('i').toggle(0);
	$(this).find('span').toggle(0); 	
	$(this).find('input').not('.main').toggle(0);

});


function select_filterFunction() {

	var input, filter, ul, li, a, i;
	
	input = $(':focus').val(); 
	
	filter = input.toUpperCase();
  
	select_container = this_select;
	
	li = this_select.find("li");
	   
	for (i = 0; i < li.length; i++) {
		  
		if (li[i].innerText.toUpperCase().indexOf(filter) > -1) {
				li[i].style.display = "flex";	
		} else {
			if(i != 0){	
				
				li[i].style.display = "none";
			}
		}
	}
	
}

