
$('#connect_email').click(function() {
	if ( $('#connect_email_warning').css('display') == 'none' || $('#connect_email_warning').css("visibility") == "hidden"){
    		$('#connect_email_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var connect_email = $("#connect_email");
	if (!connect_email.is(e.target) // если клик был не по нашему блоку
	    && connect_email.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#connect_email_warning').hide(100); // скрываем его
	}
});

$('#connect_name').click(function() {
	if ( $('#connect_name_warning').css('display') == 'none' || $('#connect_name_warning').css("visibility") == "hidden"){
    		$('#connect_name_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var connect_name = $("#connect_name");
	if (!connect_name.is(e.target) // если клик был не по нашему блоку
	    && connect_name.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#connect_name_warning').hide(100); // скрываем его
	}
});

$('#connect_surname').click(function() {
	if ( $('#connect_surname_warning').css('display') == 'none' || $('#connect_surname_warning').css("visibility") == "hidden"){
    		$('#connect_surname_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var connect_surname = $("#connect_surname");
	if (!connect_surname.is(e.target) // если клик был не по нашему блоку
	    && connect_surname.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#connect_surname_warning').hide(100); // скрываем его
	}
});

$('#connect_telephone').click(function() {
	if ( $('#connect_telephone_warning').css('display') == 'none' || $('#connect_telephone_warning').css("visibility") == "hidden"){
    		$('#connect_telephone_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var connect_telephone = $("#connect_telephone");
	if (!connect_telephone.is(e.target) // если клик был не по нашему блоку
	    && connect_telephone.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#connect_telephone_warning').hide(100); // скрываем его
	}
});


$('#connect_message').click(function() {
	if ( $('#connect_message_warning').css('display') == 'none' || $('#connect_message_warning').css("visibility") == "hidden"){
    		$('#connect_message_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var connect_message = $("#connect_message");
	if (!connect_message.is(e.target) // если клик был не по нашему блоку
	    && connect_message.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#connect_message_warning').hide(100); // скрываем его
	}
});

/* ************************************************************************************************************* */

var connect_email = document.getElementById("connect_email");
var connect_email_warning = document.getElementById("connect_email_warning");

var connect_telephone = document.getElementById("connect_telephone");
var connect_telephone_warning = document.getElementById("connect_telephone_warning");

var connect_name = document.getElementById("connect_name");
var connect_name_warning = document.getElementById("connect_name_warning");

var connect_surname = document.getElementById("connect_surname");
var connect_surname = document.getElementById("connect_surname_warning");

var connect_message = document.getElementById("connect_message");
var connect_message = document.getElementById("connect_surname_message");

var connect_email_check = false;
var connect_telephone_check = false;
var connect_name_check = false;
var connect_surname_check = false;
var connect_message_check = false;

$("#connect_email").keyup(function(){
	
	var reg = /\S+@\S+\.\S+/;
			
	var connect_email_val = $("#connect_email").val();
	
	if(connect_email_val.length > 0) {
		
		var email_result = reg.test(connect_email_val);
		
		if (email_result == true){
			
			connect_email_warning.textContent="Електронна адреса ваказана вірно";
			connect_email_warning.style.color = "green";
			connect_email_check = true;	

		}else{
			connect_email_warning.textContent="Вкажіть вірну електронну адресу";
			connect_email_warning.style.color = "red";
			connect_email_check = false;			
		}
	}else{
		connect_email_warning.textContent="Обов'язкове поле";
		connect_email_warning.style.color = "red";
		connect_email_check = false;	
	}
	
});

$("#connect_telephone").keyup(function(){
	
	var tel_reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
			
	var connect_telephone_val = $("#connect_telephone").val();
	
	if(connect_telephone_val.length > 0) {
		
		var telephone_result = tel_reg.test(connect_telephone_val);
		
		if (telephone_result == true){
			
			connect_telephone_warning.textContent="Номер телефону ваказано вірно";
			connect_telephone_warning.style.color = "green";
			connect_telephone_check = true;	

		}else{
			connect_telephone_warning.textContent="Номер телефону ваказано не вірно";
			connect_telephone_warning.style.color = "red";
			connect_telephone_check = false;			
		}
	}else{
		connect_telephone_warning.textContent="Обов'язкове поле";
		connect_telephone_warning.style.color = "red";
		connect_telephone_check = false;	
	}
	
});

$("#connect_name").keyup(function(){
			
	var connect_name_val = $("#connect_name").val();
	
	if(connect_name_val.length > 0) {
		connect_name_warning.textContent="Ім'я' вказано вірно";
		connect_name_warning.style.color = "green";
		connect_name_check = true;	
	}else{
		connect_name_warning.textContent="Обов'язкове поле";
		connect_name_warning.style.color = "red";
		connect_name_check = false;	
	}
	
});

$("#connect_surname").keyup(function(){
			
	var connect_surname_val = $("#connect_surname").val();
	
	if(connect_surname_val.length > 0) {
		connect_surname_warning.textContent="Прізвище вказано вірно";
		connect_surname_warning.style.color = "green";
		connect_surname_check = true;	
	}else{
		connect_surname_warning.textContent="Обов'язкове поле";
		connect_surname_warning.style.color = "red";
		connect_surname_check = false;	
	}
	
});

$("#connect_message").keyup(function(){
			
	var connect_message_val = $("#connect_message").val();
	
	if(connect_message_val.length > 0) {
		 $("#connect_message_warning").hide(100);
		connect_message_check = true;	
	}else{
		$("#connect_message_warning").show(100);
		connect_message_warning.textContent="Обов'язкове поле";
		connect_message_warning.style.color = "red";
		connect_message_check = false;	
	}
	
});


$('#connect_submit').click(function() {
	if(connect_email_check == true && connect_name_check == true && connect_surname_check == true && connect_message_check == true){
		$('.connect_form').submit();
	}else{
		$("#connect_name_warning").show(100);
		$("#connect_surname_warning").show(100);
		$("#connect_email_warning").show(100);
		$("#connect_telephone_warning").show(100);
		$("#connect_message_warning").show(100);
	}
});

