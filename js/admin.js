$('.admin_add_car').click(function() {
	$('.hide_this').toggle(300);
	$('.hide_this').css('display', 'none');	 
	$('.add_car_form').css('display', 'flex');	
	$('.add_car_form a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});
$('.admin_buy_cars').click(function() {
	$('.hide_this').toggle(300);
	$('.hide_this').css('display', 'none');	 		
	$('.user_admin_buy_cars_block').css('display', 'flex');	
	$('.user_admin_buy_cars_block a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});
$('.admin_profile').click(function() {
	$('.hide_this').toggle(300);
	$('.hide_this').css('display', 'none');	 		
	$('.admin_profile_block').css('display', 'flex');	
	$('.admin_profile_block a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});
$('.admin_sale_cars').click(function() {
	$('.hide_this').toggle(300);
	$('.hide_this').css('display', 'none');	 		
	$('.admin_sale_cars_block').css('display', 'flex');	
	$('.admin_sale_cars_block a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});
$('.admin_sale_purchase_car').click(function() {
	$('.hide_this').toggle(300);
	$('.hide_this').css('display', 'none');	 		
	$('.admin_sale_purchase_car_block').css('display', 'flex');	
	$('.admin_sale_purchase_car_block a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});
$('.admin_sale_exchange_car').click(function() {
	$('.hide_this').toggle(300);
	$('.hide_this').css('display', 'none');	 		
	$('.admin_sale_exchange_car_block').css('display', 'flex');	
	$('.admin_sale_exchange_car_block a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});
$('.admin_sale_commission_car').click(function() {
	$('.hide_this').toggle(300);
	$('.hide_this').css('display', 'none');	 		
	$('.admin_sale_commission_car_block').css('display', 'flex');	
	$('.admin_sale_commission_car_block a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});

$('.admin_sale_loan_car').click(function() {
	$('.hide_this').toggle(300);
	$('.hide_this').css('display', 'none');	 		
	$('.admin_sale_loan_car_block').css('display', 'flex');	
	$('.admin_sale_loan_car_block a:eq(0)').fadeIn(250, function(){
	$(this).next().fadeIn(250, arguments.callee);
	});
});





