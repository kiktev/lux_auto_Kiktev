/* ************************************************************************************************************************* */

$('#rem_email').click(function() {
	if ( $('#rem_email_warning').css('display') == 'none' || $('#rem_email_warning').css("visibility") == "hidden"){
    		$('#rem_email_warning').show(100);
    		$('#rem_getHash').slideDown(50);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var rem_email = $("#rem_email");
	var rem_getHash =  $('#rem_getHash');
	if (!rem_email.is(e.target)
		&& !rem_getHash.is(e.target)
		&& rem_getHash.has(e.target).length === 0
	    && rem_email.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#rem_email_warning').hide(100); // скрываем его
		$('#rem_getHash').hide();
	}
});


$('#rem_newpassword').click(function() {
	if ( $('#rem_newpassword_warning').css('display') == 'none' || $('#rem_newpassword_warning').css("visibility") == "hidden"){
    		$('#rem_newpassword_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var rem_newpassword = $("#rem_newpassword");
	if (!rem_newpassword.is(e.target) // если клик был не по нашему блоку
	    && rem_newpassword.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#rem_newpassword_warning').hide(100); // скрываем его
	}
});

$('#rem_hash').click(function() {
	if ( $('#rem_hash_warning').css('display') == 'none' || $('#rem_hash_warning').css("visibility") == "hidden"){
    		$('#rem_hash_warning').show(100);
	}
});

$(document).mouseup(function (e){ // событие клика по веб-документу
	var rem_hash = $("#rem_hash");
	if (!rem_hash.is(e.target) // если клик был не по нашему блоку
	    && rem_hash.has(e.target).length === 0) { // и не по его дочерним элементам
		$('#rem_hash_warning').hide(100); // скрываем его
	}
});


/* ************************************************************************************************************************* */

var rem_email = document.getElementById("rem_email");
var rem_email_warning = document.getElementById("rem_email");
var rem_password = document.getElementById("rem_password");
var rem_email_warning = document.getElementById("rem_email_warning");

var rem_hash_check = false;
var rem_email_check = false;
var rem_newpassword_check = false;

$("#rem_email").keyup(function(){
	
	var reg = /\S+@\S+\.\S+/;
			
	var rem_email_val = $("#rem_email").val();
	
	if(rem_email_val.length > 0) {
		
		var email_result = reg.test(rem_email_val);
		
		if (email_result == true){
			
			rem_email_warning.textContent="Електронна адреса ваказана вірно";
			rem_email_warning.style.color = "green";
			rem_email_check = true;	

		}else{
			rem_email_warning.textContent="Вкажіть вірну електронну адресу";
			rem_email_warning.style.color = "red";
			rem_email_check = false;			
		}
	}else{
		rem_email_warning.textContent="Обов'язкове поле";
		rem_email_warning.style.color = "red";
		rem_email_check = false;	
	}
	
});

$("#rem_newpassword").keyup(function(){
			
	var pass_reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

	var rem_newpassword_val = $("#rem_newpassword").val();
	
	if(rem_newpassword_val.length > 0) {

		var password_result = pass_reg.test(rem_newpassword_val);

		if(password_result == true){
			rem_newpassword_warning.textContent="Пароль вказано вірно";
			rem_newpassword_warning.style.color = "green";
			rem_newpassword_check = true;	
		}else{
			rem_newpassword_warning.textContent="Пароль вказано не вірно";
			rem_newpassword_warning.style.color = "red";
			rem_newpassword_check = false;	
		}

	}else{
		$('#signUp_password_warning').show(100);
		rem_newpassword_warning.textContent="Обов'язкове поле";
		rem_newpassword_warning.style.color = "red";
		rem_newpassword_check = false;	
	}
	
});

$("#rem_hash").keyup(function(){
			
	var rem_hash_val = $("#rem_hash").val();
	
	if(rem_hash_val.length > 0) {
		$('#rem_hash_warning').hide(100);
		rem_hash_check = true;	
	}else{
		$('#rem_hash_warning').show(100);
		rem_hash_warning.textContent="Обов'язкове поле";
		rem_hash_check = false;	
	}
	
});


$('#rem_setPassword').click(function() {
	if(rem_newpassword_check == true && rem_hash_check == true && rem_email_check == true){
		$('.rem_form_password').submit();
	}else{
		$("#rem_newpassword_warning").show(100);
		$("#rem_hash_warning").show(100);
		$('#rem_getHash').show();
		$('#rem_email_warning').show(100);
	}
});

var submit = true;

$('#rem_getHash').click(function() {

	var form = $("#rem_form_hash");

	if(rem_email_check == true && submit == true){	
		submit = false;
		document.getElementById('rem_getHash').style.opacity = "0.5"
        $.ajax({
            url: '/customer/remPassword',
            type: 'POST',                        
            data: form.serialize(), 
            success: function(data) {
            	console.log(data);
            	setTimeout(function()
			    {
			        submit = true;
			       document.getElementById('rem_getHash').style.opacity = "1"
			    }
		        , 10000);
            },
        });
   		 
	}else{
		$("#rem_email_warning").show(100);

	}
});
