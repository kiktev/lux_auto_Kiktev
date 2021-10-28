

/**        VALIDATION         *********************************************************************************************** */

$(document).ready(function($) { 
  $("#brand_input").keyup();
	$("#model_input").keyup();
	$("#year_input").keyup();
	$("#run_input").keyup();
	$("#color_input").keyup();
	$("#price_input").keyup();
	$("#volume_input").keyup();
	$("#number_of_seats_input").keyup();
	$("#number_of_doors_input").keyup();
	$("#description_input").keyup();
});


$(document).mouseup(function (e){
	var brand_input = $("#brand_input");
	if (!brand_input.is(e.target)
	    && brand_input.has(e.target).length === 0) { 
			brand_input.css("border","1px solid #999"); 
	}
});

$(document).mouseup(function (e){
	var model_input = $("#model_input");
	if (!model_input.is(e.target)
	    && model_input.has(e.target).length === 0) { 
			model_input.css("border","1px solid #999"); 
	}
});

$(document).mouseup(function (e){
	var year_input = $("#year_input");
	if (!year_input.is(e.target)
	    && year_input.has(e.target).length === 0) { 
			year_input.css("border","1px solid #999");
	}
});

$(document).mouseup(function (e){
	var run_input = $("#run_input");
	if (!run_input.is(e.target)
	    && run_input.has(e.target).length === 0) { 
			run_input.css("border","1px solid #999");
	}
});

$(document).mouseup(function (e){
	var color_input = $("#color_input");
	if (!color_input.is(e.target)
	    && color_input.has(e.target).length === 0) { 
			color_input.css("border","1px solid #999");
	}
});

$(document).mouseup(function (e){
	var price_input = $("#price_input");
	if (!price_input.is(e.target)
	    && price_input.has(e.target).length === 0) { 
			price_input.css("border","1px solid #999");  
	}
});

$(document).mouseup(function (e){
	var volume_input = $("#volume_input");
	if (!volume_input.is(e.target)
	    && volume_input.has(e.target).length === 0) { 
			volume_input.css("border","1px solid #999");
	}
});

$(document).mouseup(function (e){
	var number_of_seats_input = $("#number_of_seats_input");
	if (!number_of_seats_input.is(e.target)
	    && number_of_seats_input.has(e.target).length === 0) { 
			number_of_seats_input.css("border","1px solid #999");
	}
});

$(document).mouseup(function (e){
	var number_of_doors_input = $("#number_of_doors_input");
	if (!number_of_doors_input.is(e.target)
	    && number_of_doors_input.has(e.target).length === 0) { 
			number_of_doors_input.css("border","1px solid #999"); 
	}
});


$(document).mouseup(function (e){
	var description_input = $("#description_input");
	if (!description_input.is(e.target)
	    && description_input.has(e.target).length === 0) { 
			description_input.css("border","1px solid #999");
	}
});

var brand_input = document.getElementById("brand_input");
var model_input = document.getElementById("model_input");
var year_input = document.getElementById("year_input");
var run_input = document.getElementById("run_input");
var color_input = document.getElementById("color_input");
var number_of_seats_input = document.getElementById("number_of_seats_input");
var number_of_doors_input = document.getElementById("number_of_doors_input");
var description_input = document.getElementById("description_input");

var brand_check = false;
var model_check = false;
var year_check = false;
var run_check = false;
var color_check = false;
var price_check = false;
var volume_check = false;
var number_of_seats_check = false;
var number_of_doors_check = false;
var description_check = false;

$("#brand_input").keyup(function(){
			
	var brand_input_val = $("#brand_input").val();
	
	if(brand_input_val.length > 0) {
		brand_check = true;		
		$("#brand_input").css("border","1px solid #999"); 
	}else{
		brand_check = false;	
	}
	
});

$("#model_input").keyup(function(){
			
	var model_input_val = $("#model_input").val();
	
	if(model_input_val.length > 0) {
		model_check = true;
		$("#model_input").css("border","1px solid #999"); 
	
	}else{
		model_check = false;
	}
	
});

$("#year_input").keyup(function(){
			
	var year_input_val = $("#year_input").val();
	
	if(year_input_val.length > 0) {
		year_check = true;
		$("#year_input").css("border","1px solid #999"); 
	}else{
		year_check = false;	
	}
	
});

$("#run_input").keyup(function(){
			
	var run_input_val = $("#run_input").val();
	
	if(run_input_val.length > 0) {
		run_check = true;	
		$("#run_input").css("border","1px solid #999"); 
		
	}else{
		run_check = false;	
		 
	}
	
});

$("#color_input").keyup(function(){
			
	var color_input_val = $("#color_input").val();
	
	if(color_input_val.length > 0) {
		color_check = true;	
		$("#color_input").css("border","1px solid #999"); 
	}else{
		color_check = false;	

	}
	
});


$("#price_input").keyup(function(){
			
	var price_input_val = $("#price_input").val();
	
	if(price_input_val.length > 0) {
		price_check = true;		
		$("#price_input").css("border","1px solid #999"); 
	}else{
		price_check = false;
		 		
	}
	
});

$("#volume_input").keyup(function(){
			
	var volume_input_val = $("#volume_input").val();
	
	if(volume_input_val.length > 0) {
		volume_check = true;
		$("#volume_input").css("border","1px solid #999"); 
	}else{
		volume_check = false;	
	}
	
});

$("#number_of_seats_input").keyup(function(){
			
	var number_of_seats_input_val = $("#number_of_seats_input").val();
	
	if(number_of_seats_input_val.length > 0) {
		number_of_seats_check = true;
		$("#number_of_seats_input").css("border","1px solid #999"); 
	}else{
		number_of_seats_check = false;
		 	
	}
	
});

$("#number_of_doors_input").keyup(function(){
			
	var number_of_doors_input_val = $("#number_of_doors_input").val();
	
	if(number_of_doors_input_val.length > 0) {
		number_of_doors_check = true;	
		$("#number_of_doors_input").css("border","1px solid #999"); 
	}else{
		number_of_doors_check = false;
		
	}
	
});

$("#description_input").keyup(function(){
			
	var description_input_val = $("#description_input").val();
	
	if(description_input_val.length > 0) {
		description_check = true;	
		$("#description_input").css("border","1px solid #999"); 
			
	}else{
		description_check = false;	
		 
	}
	
});

$('#save_edit').click(function() {

		let rate = 0;

		if(brand_check == false){
			brand_input.style["border"] = "1px solid red";
			rate++;
		}

		if(model_check == false){
			model_input.style["border"] = "1px solid red";
			rate++;
		}

		if(year_check == false){
			year_input.style["border"] = "1px solid red";
			rate++;
		}

		if(run_check == false){
			run_input.style["border"] = "1px solid red";
			rate++;
		}

		if(color_check == false){
			color_input.style["border"] = "1px solid red";
			rate++;
		}

		if(price_check == false){
			price_input.style["border"] = "1px solid red";
			rate++;
		}

		if(volume_check == false){
			volume_input.style["border"] = "1px solid red";
			rate++;
		}

		if(number_of_doors_check == false){
			number_of_doors_input.style["border"] = "1px solid red";
			rate++;
		}

		if(number_of_seats_check == false){
			number_of_seats_input.style["border"] = "1px solid red";
			rate++;
		}

		if(description_check == false){
			description_input.style["border"] = "1px solid red";
			rate++;
		}

		if(rate>0){
			return false;
		}else{
			$('.add_car_form').submit();
		}
		
});

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