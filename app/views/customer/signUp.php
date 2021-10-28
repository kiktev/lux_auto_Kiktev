<section class="section_customer">

	<span class="customer_head">Створення нового профілю</span>

	<form class="signUp" action="" method="POST">

		<input type="hidden" name="action" value="signUp"/>
		<span class="customer_form_head">Заповніть форму реєстрації</span>
		
		<div class="customer_form_column">
			<div class="customer_form_right_margin">
				<span>Ім'я*</span>
				<input autocomplete="off" id="signUp_name" name="name" type="text" placeholder="<?= $this->get('name'); ?>" />
				<span id="signUp_name_warning">Обов'язкове поле</span>
			</div>
			<div>
				<span>Прізвище*</span>
				<input autocomplete="off" id="signUp_surname" name="surname" type="text" placeholder="<?= $this->get('surname'); ?>" />
				<span id="signUp_surname_warning">Обов'язкове поле</span>
			</div>
		</div>

		<div class="customer_form_column">
			<div class="customer_form_right_margin">
				<span>Email*</span>
				<input autocomplete="off" id="signUp_email" name="email" type="text" placeholder="<?= $this->get('email'); ?>" />
				<span id="signUp_email_warning">Обов'язкове поле</span>
			</div>
			<div>
				<span>Пароль*</span>
				<input autocomplete="off" id="signUp_password" name="password" type="text" placeholder="<?= $this->get('password'); ?>" />
				<span id="signUp_password_warning">Обов'язкове поле</span>
			</div>
		</div>
		<div class="customer_buttons">
			<button id="signUp_submit" type="button">Зареєструватись</button>
			<a href="<?php echo $this->getBP();?>/customer/signIn">Вже зареєстровані?</a>
		</div>
	</form>

</section>
<script src="<?php echo $this->getBP(); ?>/js/customer.js?v=<?php echo filectime($this->getBP() . "js/customer.js") ?>"></script>