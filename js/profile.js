
/* ***************************************************************************************************** */
$(document).ready(function($) { 
  	$("#profile_name").keyup();
	$("#profile_surname").keyup();
	$("#profile_email").keyup();
	$("#profile_password").keyup();
	$("#profile_newpassword").keyup();
	$("#profile_telephone").keyup();
});

$('#profile_name').click(function() {
	if ( $('#profile_name_warning').css('display') == 'none' || $('#profile_name_warning').css("visibility") == "hidden"){
    		$('#profile_name_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var profile_name = $("#profile_name");
	if (!profile_name.is(e.target) // если клик был не по нашему блоку
	    && profile_name.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#profile_name_warning').hide(100); // скрываем его
	}
});


$('#profile_surname').click(function() {
	if ( $('#profile_surname_warning').css('display') == 'none' || $('#profile_surname_warning').css("visibility") == "hidden"){
    		$('#profile_surname_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var profile_surname = $("#signUp_surname");
	if (!profile_surname.is(e.target) // если клик был не по нашему блоку
	    && profile_surname.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#profile_surname_warning').hide(100); // скрываем его
	}
});



$('#profile_email').click(function() {
	if ( $('#profile_email_warning').css('display') == 'none' || $('#profile_email_warning').css("visibility") == "hidden"){
    		$('#profile_email_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var profile_email = $("#profile_email");
	if (!profile_email.is(e.target) // если клик был не по нашему блоку
	    && profile_email.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#profile_email_warning').hide(100); // скрываем его
	}
});


$('#profile_password').click(function() {
	if ( $('#profile_password_warning').css('display') == 'none' || $('#profile_password_warning').css("visibility") == "hidden"){
    		$('#profile_password_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var profile_password = $("#profile_password");
	if (!profile_password.is(e.target) // если клик был не по нашему блоку
	    && profile_password.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#profile_password_warning').hide(100); // скрываем его
	}
});

$('#profile_newpassword').click(function() {
	if ( $('#profile_newpassword_warning').css('display') == 'none' || $('#profile_newpassword_warning').css("visibility") == "hidden"){
    		$('#profile_newpassword_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var profile_newpassword = $("#profile_newpassword");
	if (!profile_newpassword.is(e.target) // если клик был не по нашему блоку
	    && profile_newpassword.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#profile_newpassword_warning').hide(100); // скрываем его
	}
});

$('#profile_telephone').click(function() {
	if ( $('#profile_telephone_warning').css('display') == 'none' || $('#profile_telephone_warning').css("visibility") == "hidden"){
    		$('#profile_telephone_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var profile_telephone = $("#profile_telephone");
	if (!profile_telephone.is(e.target) // если клик был не по нашему блоку
	    && profile_telephone.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#profile_telephone_warning').hide(100); // скрываем его
	}
});
/* ********************************************************************************************************** */


var profile_email = document.getElementById("profile_email");
var profile_email_warning = document.getElementById("profile_email_warning");

var profile_password = document.getElementById("profile_password");
var profile_password_warning = document.getElementById("profile_password_warning");

var profile_newpassword = document.getElementById("profile_newpassword");
var profile_newpassword_warning = document.getElementById("profile_newpassword_warning");

var profile_name = document.getElementById("profile_name");
var profile_name_warning = document.getElementById("profile_name_warning");

var profile_surname = document.getElementById("profile_surname");
var profile_surname = document.getElementById("profile_surname_warning");

var profile_telephone = document.getElementById("profile_telephone");
var profile_telephone_warning = document.getElementById("profile_telephone_warning");


var profile_email_check = false;
var profile_password_check = false;
var profile_newpassword_check = true;
var profile_name_check = false;
var profile_surname_check = false;
var profile_telefone_check = true;

$("#profile_email").keyup(function(){
	
	var reg = /\S+@\S+\.\S+/;
			
	var profile_email_val = $("#profile_email").val();
	
	if(profile_email_val.length > 0) {
		
		var email_result = reg.test(profile_email_val);
		
		if (email_result == true){
			
			profile_email_warning.textContent="Електронна адреса ваказана вірно";
			profile_email_warning.style.color = "green";
			profile_email_check = true;	

		}else{
			profile_email_warning.textContent="Вкажіть вірну електронну адресу";
			profile_email_warning.style.color = "red";
			profile_email_check = false;			
		}
	}else{
		profile_email_warning.textContent="Обов'язкове поле";
		profile_email_warning.style.color = "red";
		profile_email_check = false;	
	}
	
});

$("#profile_password").keyup(function(){
			
	var pass_reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

	var profile_password_val = $("#profile_password").val();
	
	if(profile_password_val.length > 0) {

		var password_result = pass_reg.test(profile_password_val);

		if(password_result == true){
			profile_password_warning.textContent="Пароль вказано вірно";
			profile_password_warning.style.color = "green";
			profile_password_check = true;	
		}else{
			profile_password_warning.textContent="Пароль вказано не вірно";
			profile_password_warning.style.color = "red";
			profile_password_check = false;	
		}

	}else{
		$('#profile_password_warning').show(100);
		profile_password_warning.textContent="Обов'язкове поле";
		profile_password_warning.style.color = "red";
		profile_password_check = false;	
	}
	
});


$("#profile_newpassword").keyup(function(){
			
	var pass_reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

	var profile_newpassword_val = $("#profile_newpassword").val();


	if(profile_newpassword_val.length > 0) {

		var newpassword_result = pass_reg.test(profile_newpassword_val);

		if(newpassword_result == true){
			profile_newpassword_warning.textContent="Пароль вказано вірно";
			profile_newpassword_warning.style.color = "green";
			profile_newpassword_check = true;	
		}else{
			profile_newpassword_warning.textContent="Пароль вказано не вірно";
			profile_newpassword_warning.style.color = "red";
			profile_newpassword_check = false;	
		}

	}else{
		$('#profile_newpassword_warning').show(100);
		profile_newpassword_warning.textContent="Не обов'язкове поле";
		profile_newpassword_warning.style.color = "green";
		profile_newpassword_check = true;	
	}

	if(profile_newpassword_val.length == 0){
		profile_newpassword_check = true;	
	}
	
});

$("#profile_name").keyup(function(){
			
	var profile_name_val = $("#profile_name").val();
	
	if(profile_name_val.length > 0) {
		profile_name_warning.textContent="Ім'я' вказано вірно";
		profile_name_warning.style.color = "green";
		profile_name_check = true;	
	}else{
		profile_name_warning.textContent="Обов'язкове поле";
		profile_name_warning.style.color = "red";
		profile_name_check = false;	
	}
	
});

$("#profile_surname").keyup(function(){
			
	var profile_surname_val = $("#profile_surname").val();
	
	if(profile_surname_val.length > 0) {
		profile_surname_warning.textContent="Прізвище вказано вірно";
		profile_surname_warning.style.color = "green";
		profile_surname_check = true;	
	}else{
		profile_surname_warning.textContent="Обов'язкове поле";
		profile_surname_warning.style.color = "red";
		profile_surname_check = false;	
	}
	
});

$("#profile_telephone").keyup(function(){
	
	var tel_reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
			
	var profile_telephone_val = $("#profile_telephone").val();
	
	if(profile_telephone_val.length > 0) {
		
		var telephone_result = tel_reg.test(profile_telephone_val);
		
		if (telephone_result == true){
			
			profile_telephone_warning.textContent="Номер телефону ваказано вірно";
			profile_telephone_warning.style.color = "green";
			profile_telephone_check = true;	

		}else{
			profile_telephone_warning.textContent="Номер телефону ваказано не вірно";
			profile_telephone_warning.style.color = "red";
			profile_telephone_check = false;			
		}
	}else{
		profile_telephone_warning.textContent="Не обов'язкове поле";
		profile_telephone_warning.style.color = "green";
		profile_telephone_check = true;	
	}

	if(profile_telephone_val.length == 0){
		profile_telefone_check = true;
	}
	
});


$('#save_submit').click(function() {
	if(profile_email_check == true && profile_password_check == true && profile_name_check == true && profile_surname_check == true
		 && profile_newpassword_check == true  && profile_telephone_check == true ){
		$('.profile_form').submit();
	}else{
		$("#profile_name_warning").show(100);
		$("#profile_surname_warning").show(100);
		$("#profile_email_warning").show(100);
		$("#profile_password_warning").show(100);
		$("#profile_newpassword_warning").show(100);
		$("#profile_telephone_warning").show(100);
	}
});

$('#delete_submit').click(function() {

	var password = $('#profile_password').val();
	var id = $('#delete_submit').data('id');

	 $.ajax({
        url: '/customer/profile',
        type: 'POST',                        
        data: {
        'action': "delete_customer",
        'password':password,
        'id': id,
      }, 
        success: function(data) {
        	location.reload();
        },

    });

});

