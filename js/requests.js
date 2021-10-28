$('.sale_request').click(function() {
	//alert($(this).attr("value"));
	$('.sale_form').toggle(300);		
	$('.sale_form').css('box-shadow', '0 0 0 100vmax rgba(0,0,0,.3)');
	$('.sale_form').css('display', 'flex');	 
	$('.sale_form a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});

$('.buy_request').click(function() {
	//alert($(this).attr("value"));
	$('.buy_form').toggle(300);		
	$('.buy_form').css('box-shadow', '0 0 0 100vmax rgba(0,0,0,.3)');
	$('.buy_form').css('display', 'flex');	 
	$('.buy_form a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});

$('.purchase_request').click(function() {
	//alert($(this).attr("value"));
	$('.purchase_form').toggle(300);		
	$('.purchase_form').css('box-shadow', '0 0 0 100vmax rgba(0,0,0,.3)');
	$('.purchase_form').css('display', 'flex');	 
	$('.purchase_form a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});

$('.rolling_request').click(function() {
	//alert($(this).attr("value"));
	$('.rolling_form').toggle(300);		
	$('.rolling_form').css('box-shadow', '0 0 0 100vmax rgba(0,0,0,.3)');
	$('.rolling_form').css('display', 'flex');	 
	$('.rolling_form a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});


$('.loan_request').click(function() {
	//alert($(this).attr("value"));
	$('.loan_form').toggle(300);		
	$('.loan_form').css('box-shadow', '0 0 0 100vmax rgba(0,0,0,.3)');
	$('.loan_form').css('display', 'flex');	 
	$('.loan_form a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});


$('.exchange_request').click(function() {
	//alert($(this).attr("value"));
	$('.exchange_form').toggle(300);		
	$('.exchange_form').css('box-shadow', '0 0 0 100vmax rgba(0,0,0,.3)');
	$('.exchange_form').css('display', 'flex');	 
	$('.exchange_form a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});

$('.request_form_close_icon').click(function() {
	$('.request_form').hide(300);	   
	$('.request_form a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	$('.request_form').css('display', 'none');
	});
});


$(document).ready(function($) { 
  	$(".sale_request_form_name").keyup();
	$(".sale_request_form_phone").keyup();
	$(".sale_request_form_email").keyup();
});

var sale_request_email_check = true;
var sale_request_name_check = false;
var sale_request_telefone_check = false;

$(".sale_request_form_name").keyup(function(){
			
	var request_name_val = $(".sale_request_form_name").val();
	
	if(request_name_val.length > 0) {
		sale_request_name_check = true;	
		$(".sale_request_form_name").css('border-bottom','1px solid #999');
	}else{
		sale_request_name_check = false;	
	}
	
});


$(".sale_request_form_phone").keyup(function(){
	
	var tel_reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
			
	var request_telephone_val = $(".sale_request_form_phone").val();
	
	if(request_telephone_val.length > 0) {
		
		var telephone_result = tel_reg.test(request_telephone_val);
		
		if (telephone_result == true){
			
			sale_request_telephone_check = true;	
			$(".sale_request_form_phone").css('border-bottom','1px solid #999');

		}else{
			sale_request_telephone_check = false;			
		}
	}else{
		sale_request_telephone_check = false;	
	}
	
});

$(".sale_request_form_email").keyup(function(){
	
	var reg = /\S+@\S+\.\S+/;
			
	var request_email_val = $(".sale_request_form_email").val();
	
	if(request_email_val.length > 0) {
		
		var email_result = reg.test(request_email_val);
		
		if (email_result == true){
			
			sale_request_email_check = true;
			$(".sale_request_form_email").css('border-bottom','1px solid #999');

		}else{
			sale_request_email_check = false;			
		}
	}else{
		sale_request_email_check = true;	
	}
	
});

$('#sale_submit').click(function() {

	if(sale_request_name_check != true){
		$(".sale_request_form_name").css('border-bottom','1px solid red');
		return false;
	}


	if(sale_request_telephone_check != true){
		$(".sale_request_form_phone").css('border-bottom','1px solid red');
		return false;
	}

	if(sale_request_email_check != true){
		$(".sale_request_form_email").css('border-bottom','1px solid red');
		return false;
	}

	$('.sale_form').submit();

});

$(document).ready(function($) { 
  	$(".purchase_request_form_name").keyup();
	$(".purchase_request_form_phone").keyup();
	$(".purchase_request_form_email").keyup();
});

var purchase_request_email_check = true;
var purchase_request_name_check = false;
var purchase_request_telefone_check = false;

$(".purchase_request_form_name").keyup(function(){
			
	var request_name_val = $(".purchase_request_form_name").val();
	
	if(request_name_val.length > 0) {
		purchase_request_name_check = true;	
		$(".purchase_request_form_name").css('border-bottom','1px solid #999');
	}else{
		purchase_request_name_check = false;	
	}
	
});


$(".purchase_request_form_phone").keyup(function(){
	
	var tel_reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
			
	var request_telephone_val = $(".purchase_request_form_phone").val();
	
	if(request_telephone_val.length > 0) {
		
		var telephone_result = tel_reg.test(request_telephone_val);
		
		if (telephone_result == true){
			
			purchase_request_telephone_check = true;	
			$(".purchase_request_form_phone").css('border-bottom','1px solid #999');

		}else{
			purchase_request_telephone_check = false;			
		}
	}else{
		purchase_request_telephone_check = false;	
	}
	
});

$(".purchase_request_form_email").keyup(function(){
	
	var reg = /\S+@\S+\.\S+/;
			
	var request_email_val = $(".purchase_request_form_email").val();
	
	if(request_email_val.length > 0) {
		
		var email_result = reg.test(request_email_val);
		
		if (email_result == true){
			
			purchase_request_email_check = true;
			$(".purchase_request_form_email").css('border-bottom','1px solid #999');

		}else{
			purchase_request_email_check = false;			
		}
	}else{
		purchase_request_email_check = true;	
	}
	
});

$('#purchase_submit').click(function() {

	if(purchase_request_name_check != true){
		$(".purchase_request_form_name").css('border-bottom','1px solid red');
		return false;
	}

	if(purchase_request_telephone_check != true){
		$(".purchase_request_form_phone").css('border-bottom','1px solid red');
		return false;
	}

	if(purchase_request_email_check != true){
		$(".purchase_request_form_email").css('border-bottom','1px solid red');
		return false;
	}
	
	$('.purchase_form').submit();

});



$(document).ready(function($) { 
  	$(".rolling_request_form_name").keyup();
	$(".rolling_request_form_phone").keyup();
	$(".rolling_request_form_email").keyup();
});

var rolling_request_email_check = true;
var rolling_request_name_check = false;
var rolling_request_telefone_check = false;

$(".rolling_request_form_name").keyup(function(){
			
	var request_name_val = $(".rolling_request_form_name").val();
	
	if(request_name_val.length > 0) {
		rolling_request_name_check = true;	
		$(".rolling_request_form_name").css('border-bottom','1px solid #999');
	}else{
		rolling_request_name_check = false;	
	}
	
});

$(".rolling_request_form_phone").keyup(function(){
	
	var tel_reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
			
	var request_telephone_val = $(".rolling_request_form_phone").val();
	
	if(request_telephone_val.length > 0) {
		
		var telephone_result = tel_reg.test(request_telephone_val);
		
		if (telephone_result == true){
			
			rolling_request_telephone_check = true;	
			$(".rolling_request_form_phone").css('border-bottom','1px solid #999');

		}else{
			rolling_request_telephone_check = false;			
		}
	}else{
		rolling_request_telephone_check = false;	
	}
	
});

$(".rolling_request_form_email").keyup(function(){
	
	var reg = /\S+@\S+\.\S+/;
			
	var request_email_val = $(".rolling_request_form_email").val();
	
	if(request_email_val.length > 0) {
		
		var email_result = reg.test(request_email_val);
		
		if (email_result == true){
			
			rolling_request_email_check = true;
			$(".rolling_request_form_email").css('border-bottom','1px solid #999');

		}else{
			rolling_request_email_check = false;			
		}
	}else{
		rolling_request_email_check = true;	
	}
	
});

$('#rolling_submit').click(function() {

	if(rolling_request_name_check != true){
		$(".rolling_request_form_name").css('border-bottom','1px solid red');
		return false;
	}

	if(rolling_request_telephone_check != true){
		$(".rolling_request_form_phone").css('border-bottom','1px solid red');
		return false;
	}

	if(rolling_request_email_check != true){
		$(".rolling_request_form_email").css('border-bottom','1px solid red');
		return false;
	}
	
	$('.rolling_form').submit();

});

$(document).ready(function($) { 
  	$(".exchange_request_form_name").keyup();
	$(".exchange_request_form_phone").keyup();
	$(".exchange_request_form_email").keyup();
});

var exchange_request_email_check = true;
var exchange_request_name_check = false;
var exchange_request_telefone_check = false;

$(".exchange_request_form_name").keyup(function(){
			
	var request_name_val = $(".exchange_request_form_name").val();
	
	if(request_name_val.length > 0) {
		exchange_request_name_check = true;	
		$(".exchange_request_form_name").css('border-bottom','1px solid #999');
	}else{
		exchange_request_name_check = false;	
	}
	
});

$(".exchange_request_form_phone").keyup(function(){
	
	var tel_reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
			
	var request_telephone_val = $(".exchange_request_form_phone").val();
	
	if(request_telephone_val.length > 0) {
		
		var telephone_result = tel_reg.test(request_telephone_val);
		
		if (telephone_result == true){
			
			exchange_request_telephone_check = true;	
			$(".exchange_request_form_phone").css('border-bottom','1px solid #999');

		}else{
			exchange_request_telephone_check = false;			
		}
	}else{
		exchange_request_telephone_check = false;	
	}
	
});

$(".exchange_request_form_email").keyup(function(){
	
	var reg = /\S+@\S+\.\S+/;
			
	var request_email_val = $(".exchange_request_form_email").val();
	
	if(request_email_val.length > 0) {
		
		var email_result = reg.test(request_email_val);
		
		if (email_result == true){
			
			exchange_request_email_check = true;
			$(".exchange_request_form_email").css('border-bottom','1px solid #999');

		}else{
			exchange_request_email_check = false;			
		}
	}else{
		exchange_request_email_check = true;	
	}
	
});

$('#exchange_submit').click(function() {

	if(exchange_request_name_check != true){
		$(".exchange_request_form_name").css('border-bottom','1px solid red');
		return false;
	}

	if(exchange_request_telephone_check != true){
		$(".exchange_request_form_phone").css('border-bottom','1px solid red');
		return false;
	}

	if(exchange_request_email_check != true){
		$(".exchange_request_form_email").css('border-bottom','1px solid red');
		return false;
	}
	
	$('.exchange_form').submit();

});

$(document).ready(function($) { 
  	$(".loan_request_form_name").keyup();
	$(".loan_request_form_phone").keyup();
	$(".loan_request_form_email").keyup();
});

var loan_request_email_check = true;
var loan_request_name_check = false;
var loan_request_telefone_check = false;

$(".loan_request_form_name").keyup(function(){
			
	var request_name_val = $(".loan_request_form_name").val();
	
	if(request_name_val.length > 0) {
		loan_request_name_check = true;	
		$(".loan_request_form_name").css('border-bottom','1px solid #999');
	}else{
		loan_request_name_check = false;	
	}
	
});

$(".loan_request_form_phone").keyup(function(){
	
	var tel_reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
			
	var request_telephone_val = $(".loan_request_form_phone").val();
	
	if(request_telephone_val.length > 0) {
		
		var telephone_result = tel_reg.test(request_telephone_val);
		
		if (telephone_result == true){
			
			loan_request_telephone_check = true;	
			$(".loan_request_form_phone").css('border-bottom','1px solid #999');

		}else{
			loan_request_telephone_check = false;			
		}
	}else{
		loan_request_telephone_check = false;	
	}
	
});

$(".loan_request_form_email").keyup(function(){
	
	var reg = /\S+@\S+\.\S+/;
			
	var request_email_val = $(".loan_request_form_email").val();
	
	if(request_email_val.length > 0) {
		
		var email_result = reg.test(request_email_val);
		
		if (email_result == true){
			
			loan_request_email_check = true;
			$(".loan_request_form_email").css('border-bottom','1px solid #999');

		}else{
			loan_request_email_check = false;			
		}
	}else{
		loan_request_email_check = true;	
	}
	
});

$('#loan_submit').click(function() {

	if(loan_request_name_check != true){
		$(".loan_request_form_name").css('border-bottom','1px solid red');
		return false;
	}

	if(loan_request_telephone_check != true){
		$(".loan_request_form_phone").css('border-bottom','1px solid red');
		return false;
	}

	if(loan_request_email_check != true){
		$(".loan_request_form_email").css('border-bottom','1px solid red');
		return false;
	}
	
	$('.loan_form').submit();

});


$(document).ready(function($) { 
  	$(".buy_request_form_name").keyup();
	$(".buy_request_form_phone").keyup();
	$(".buy_request_form_email").keyup();
});

var buy_request_email_check = true;
var buy_request_name_check = false;
var buy_request_telefone_check = false;

$(".buy_request_form_name").keyup(function(){
			
	var request_name_val = $(".buy_request_form_name").val();
	
	if(request_name_val.length > 0) {
		buy_request_name_check = true;	
		$(".buy_request_form_name").css('border-bottom','1px solid #999');
	}else{
		buy_request_name_check = false;	
	}
	
});

$(".buy_request_form_phone").keyup(function(){
	
	var tel_reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
			
	var request_telephone_val = $(".buy_request_form_phone").val();
	
	if(request_telephone_val.length > 0) {
		
		var telephone_result = tel_reg.test(request_telephone_val);
		
		if (telephone_result == true){
			
			buy_request_telephone_check = true;	
			$(".buy_request_form_phone").css('border-bottom','1px solid #999');

		}else{
			buy_request_telephone_check = false;			
		}
	}else{
		buy_request_telephone_check = false;	
	}
	
});

$(".buy_request_form_email").keyup(function(){
	
	var reg = /\S+@\S+\.\S+/;
			
	var request_email_val = $(".buy_request_form_email").val();
	
	if(request_email_val.length > 0) {
		
		var email_result = reg.test(request_email_val);
		
		if (email_result == true){
			
			buy_request_email_check = true;
			$(".buy_request_form_email").css('border-bottom','1px solid #999');

		}else{
			buy_request_email_check = false;			
		}
	}else{
		buy_request_email_check = true;	
	}
	
});

$('#buy_submit').click(function() {

	if(buy_request_name_check != true){
		$(".buy_request_form_name").css('border-bottom','1px solid red');
		return false;
	}

	if(buy_request_telephone_check != true){
		$(".buy_request_form_phone").css('border-bottom','1px solid red');
		return false;
	}

	if(buy_request_email_check != true){
		$(".buy_request_form_email").css('border-bottom','1px solid red');
		return false;
	}
	
	$('.buy_form').submit();

});