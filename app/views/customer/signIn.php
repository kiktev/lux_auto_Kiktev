<section class="section_customer">
	<span class="customer_head">Авторизація</span>

	<form class="signIn" action="" method="POST">

		<input type="hidden" name="action" value="signIn"/>
		<span class="customer_form_head">Заповніть форму авторизації</span>
		
		<div class="customer_form_column">
			<div class="customer_form_right_margin">
				<span>Email*</span>
				<input autocomplete="off" id="signIn_email" name="email" type="text" placeholder="<?= $this->get('email'); ?>" />
				<span id="signIn_email_warning">Обов'язкове поле</span>
			</div>
		</div>
		<div class="customer_form_column">
			<div class="customer_form_right_margin">
				<span>Пароль*</span>
				<input autocomplete="off" id="signIn_password" name="password" type="text" placeholder="<?= $this->get('password'); ?>" />
				<span id="signIn_password_warning">Обов'язкове поле</span>
			</div>
		</div>
		<div class="customer_buttons">
			<button id="signIn_submit" type="button">Авторизуватись</button>
			<a href="<?php echo $this->getBP();?>/customer/signUp">Зареєструватись</a>
		</div>
		<a class="custom_password_reload" href="<?php echo $this->getBP();?>/customer/remPassword">Забули пароль?</a>
	</form>
<section>
<script src="<?php echo $this->getBP(); ?>/js/customer.js?v=<?php echo filectime($this->getBP() . "js/customer.js") ?>"></script>