/* ************************************************************************************************* */

$('#signIn_email').click(function() {
	if ( $('#signIn_email_warning').css('display') == 'none' || $('#signIn_email_warning').css("visibility") == "hidden"){
    		$('#signIn_email_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var signIn_email = $("#signIn_email");
	if (!signIn_email.is(e.target) // если клик был не по нашему блоку
	    && signIn_email.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#signIn_email_warning').hide(100); // скрываем его
	}
});


$('#signIn_password').click(function() {
	if ( $('#signIn_password_warning').css('display') == 'none' || $('#signIn_password_warning').css("visibility") == "hidden"){
    		$('#signIn_password_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var signIn_password = $("#signIn_password");
	if (!signIn_password.is(e.target) // если клик был не по нашему блоку
	    && signIn_password.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#signIn_password_warning').hide(100); // скрываем его
	}
});

/* ******************************************************************************************************** */

var signIn_email = document.getElementById("signIn_email");
var signIn_email_warning = document.getElementById("signIn_email");
var signIn_password = document.getElementById("signIn_password");
var signIn_email_warning = document.getElementById("signIn_email_warning");

var signIn_email_check = false;
var signIn_password_check = false;

$("#signIn_email").keyup(function(){
	
	var reg = /\S+@\S+\.\S+/;
			
	var signIn_email_val = $("#signIn_email").val();
	
	if(signIn_email_val.length > 0) {
		
		var email_result = reg.test(signIn_email_val);
		
		if (email_result == true){
			
			signIn_email_warning.textContent="Електронна адреса ваказана вірно";
			signIn_email_warning.style.color = "green";
			signIn_email_check = true;	

		}else{
			signIn_email_warning.textContent="Вкажіть вірну електронну адресу";
			signIn_email_warning.style.color = "red";
			signIn_email_check = false;			
		}
	}else{
		signIn_email_warning.textContent="Обов'язкове поле";
		signIn_email_warning.style.color = "red";
		signIn_email_check = false;	
	}
	
});

$("#signIn_password").keyup(function(){
			
	var signIn_password_val = $("#signIn_password").val();
	
	if(signIn_password_val.length > 0) {
		$('#signIn_password_warning').hide(100);
		signIn_password_check = true;	
	}else{
		$('#signIn_password_warning').show(100);
		signIn_password_warning.textContent="Обов'язкове поле";
		signIn_password_check = false;	
	}
	
});

$('#signIn_submit').click(function() {
	if(signIn_email_check == true && signIn_password_check == true){
		$('.signIn').submit();
	}else{
		$("#signIn_email_warning").show(100);
		$("#signIn_password_warning").show(100);
	}
});




/* ***************************************************************************************************** */

$('#signUp_name').click(function() {
	if ( $('#signUp_name_warning').css('display') == 'none' || $('#signUp_name_warning').css("visibility") == "hidden"){
    		$('#signUp_name_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var signUp_name = $("#signUp_name");
	if (!signUp_name.is(e.target) // если клик был не по нашему блоку
	    && signUp_name.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#signUp_name_warning').hide(100); // скрываем его
	}
});


$('#signUp_surname').click(function() {
	if ( $('#signUp_surname_warning').css('display') == 'none' || $('#signUp_surname_warning').css("visibility") == "hidden"){
    		$('#signUp_surname_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var signUp_surname = $("#signUp_surname");
	if (!signUp_surname.is(e.target) // если клик был не по нашему блоку
	    && signUp_surname.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#signUp_surname_warning').hide(100); // скрываем его
	}
});



$('#signUp_email').click(function() {
	if ( $('#signUp_email_warning').css('display') == 'none' || $('#signUp_email_warning').css("visibility") == "hidden"){
    		$('#signUp_email_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var signUp_email = $("#signUp_email");
	if (!signUp_email.is(e.target) // если клик был не по нашему блоку
	    && signUp_email.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#signUp_email_warning').hide(100); // скрываем его
	}
});


$('#signUp_password').click(function() {
	if ( $('#signUp_password_warning').css('display') == 'none' || $('#signUp_password_warning').css("visibility") == "hidden"){
    		$('#signUp_password_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var signUp_password = $("#signUp_password");
	if (!signUp_password.is(e.target) // если клик был не по нашему блоку
	    && signUp_password.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#signUp_password_warning').hide(100); // скрываем его
	}
});

/* ********************************************************************************************************** */


var signUp_email = document.getElementById("signUp_email");
var signUp_email_warning = document.getElementById("signUp_email_warning");

var signUp_password = document.getElementById("signUp_password");
var signUp_password_warning = document.getElementById("signUp_password_warning");

var signUp_name = document.getElementById("signUp_name");
var signUp_name_warning = document.getElementById("signUp_name_warning");

var signUp_surname = document.getElementById("signUp_surname");
var signUp_surname = document.getElementById("signUp_surname_warning");

var signUp_email_check = false;
var signUp_password_check = false;
var signUp_name_check = false;
var signUp_surname_check = false;

$("#signUp_email").keyup(function(){
	
	var reg = /\S+@\S+\.\S+/;
			
	var signUp_email_val = $("#signUp_email").val();
	
	if(signUp_email_val.length > 0) {
		
		var email_result = reg.test(signUp_email_val);
		
		if (email_result == true){
			
			signUp_email_warning.textContent="Електронна адреса ваказана вірно";
			signUp_email_warning.style.color = "green";
			signUp_email_check = true;	

		}else{
			signUp_email_warning.textContent="Вкажіть вірну електронну адресу";
			signUp_email_warning.style.color = "red";
			signUp_email_check = false;			
		}
	}else{
		signUp_email_warning.textContent="Обов'язкове поле";
		signUp_email_warning.style.color = "red";
		signUp_email_check = false;	
	}
	
});

$("#signUp_password").keyup(function(){
			
	var pass_reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

	var signUp_password_val = $("#signUp_password").val();
	
	if(signUp_password_val.length > 0) {

		var password_result = pass_reg.test(signUp_password_val);

		if(password_result == true){
			signUp_password_warning.textContent="Пароль вказано вірно";
			signUp_password_warning.style.color = "green";
			signUp_password_check = true;	
		}else{
			signUp_password_warning.textContent="Пароль вказано не вірно";
			signUp_password_warning.style.color = "red";
			signUp_password_check = false;	
		}

	}else{
		$('#signUp_password_warning').show(100);
		signUp_password_warning.textContent="Обов'язкове поле";
		signUp_password_warning.style.color = "red";
		signUp_password_check = false;	
	}
	
});

$("#signUp_name").keyup(function(){
			
	var signUp_name_val = $("#signUp_name").val();
	
	if(signUp_name_val.length > 0) {
		signUp_name_warning.textContent="Ім'я' вказано вірно";
		signUp_name_warning.style.color = "green";
		signUp_name_check = true;	
	}else{
		signUp_name_warning.textContent="Обов'язкове поле";
		signUp_name_warning.style.color = "red";
		signUp_name_check = false;	
	}
	
});

$("#signUp_surname").keyup(function(){
			
	var signUp_surname_val = $("#signUp_surname").val();
	
	if(signUp_surname_val.length > 0) {
		signUp_surname_warning.textContent="Прізвище вказано вірно";
		signUp_surname_warning.style.color = "green";
		signUp_surname_check = true;	
	}else{
		signUp_surname_warning.textContent="Обов'язкове поле";
		signUp_surname_warning.style.color = "red";
		signUp_surname_check = false;	
	}
	
});

$('#signIn_submit').click(function() {
	if(signIn_email_check == true && signIn_password_check == true){
		$('.signIn').submit();
	}
});


$('#signUp_submit').click(function() {
	if(signUp_email_check == true && signUp_password_check == true && signUp_name_check == true && signUp_surname_check == true){
		$('.signUp').submit();
	}else{
		$("#signUp_name_warning").show(100);
		$("#signUp_surname_warning").show(100);
		$("#signUp_email_warning").show(100);
		$("#signUp_password_warning").show(100);
	}
});
