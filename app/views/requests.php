<?php
	
	$this->set('request_name','');
	$this->set('request_phone','');
	$this->set('request_email','');

	if(Core\Helper::getCustomer() == true){
		$this->set('request_name', Core\Helper::getCustomer()['name']);
		$this->set('request_phone', Core\Helper::getCustomer()['telephone']);
		$this->set('request_email', Core\Helper::getCustomer()['email']);
	}
?>
<form class="request_form sale_form" method="post">
	<div class="request_form_name">
		<span><i class="fas fa-info"></i>Заявка про продаж</span>
		<i class="fas fa-times request_form_close_icon sale_form_icon"></i>
	</div>
	<div class="request_form_input">
		<input type="hidden" name="action" value="sale_request"/>
		<div>
			<span>Ім'я</span>
			<input class="sale_request_form_name" name="name" value="<?= $this->get('request_name')?>" type="text" placeholder="Ім'я"/>
		</div>
		<div>
			<span>Телефон</span>
			<input class="sale_request_form_phone" name="phone" value="<?= $this->get('request_phone')?>" type="text" placeholder="Телефон"/>
		</div>
		<div>
			<span>Email</span>
			<input class="sale_request_form_email" name="email" value="<?= $this->get('request_email')?>" type="text" placeholder="Email, не обов'язково"/>
		</div>
		<div>
			<button id="sale_submit" type="button">Надіслати</button>
		</div>
	</div>
	<div class="request_form_manager">
		<span>Залиште Ваші контактні дані для зв'язку з фахівцем з відділу продажів. Менеджер зв'яжеться з Вами найближчим часом. Дякуємо за заявку!</span>
	</div>
	
</form>

<form class="request_form purchase_form" method="post">
	<div class="request_form_name">
		<span><i class="fas fa-info"></i>Заявка про викуп</span>
		<i class="fas fa-times request_form_close_icon purchase_form_icon"></i>
	</div>
	<div class="request_form_input">
		<input type="hidden" name="action" value="purchase_request"/>
		<div>
			<span>Ім'я</span>
			<input class="purchase_request_form_name" name="name" value="<?= $this->get('request_name')?>" type="text" placeholder="Ім'я"/>
		</div>
		<div>
			<span>Телефон</span>
			<input class="purchase_request_form_phone" name="phone" value="<?= $this->get('request_phone')?>" type="text" placeholder="Телефон"/>
		</div>
		<div>
			<span>Email</span>
			<input class="purchase_request_form_email" name="email" value="<?= $this->get('request_email')?>" type="text" placeholder="Email, не обов'язково"/>
		</div>
		<div>
			<button id="purchase_submit" type="submit">Надіслати</button>
		</div>
	</div>
	<div class="request_form_manager">
		<span>Залиште Ваші контактні дані для зв'язку з фахівцем з відділу продажів. Менеджер зв'яжеться з Вами найближчим часом. Дякуємо за заявку!</span>
	</div>
	
</form>
