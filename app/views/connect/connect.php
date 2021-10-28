<section class="connect_section">
	<span class="connect_section_head">Зв'яжіться з нами</span>
	<form class="connect_form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="hidden" name="action" value="connect" />
		<span class="connect_form_head">Заповніть форму зворотнього зв'язку</span>
		
		<div class="connect_form_column">
			<div class="connection_form_right_margin">
				<span>Ім'я*</span>
				<input autocomplete="off" id="connect_name" name="name" type="text" placeholder="<?= $this->get('name'); ?>" />
				<span id="connect_name_warning">Обов'язкове поле</span>
			</div>
			<div>
				<span>Прізвище*</span>
				<input autocomplete="off" id="connect_surname" name="surname" type="text" placeholder="<?= $this->get('surname'); ?>" />
				<span id="connect_surname_warning">Обов'язкове поле</span>
			</div>
		</div>

		<div class="connect_form_column">
			<div class="connection_form_right_margin">
				<span>Телефон*</span>
				<input autocomplete="off" id="connect_telephone" name="telephone" value="+380" type="text" placeholder="<?= $this->get('telephone'); ?>" />
				<span id="connect_telephone_warning">Обов'язкове поле</span>
			</div>
			<div>
				<span>Email*</span>
				<input autocomplete="off" id="connect_email" name="email" type="text" placeholder="<?= $this->get('email'); ?>" />
				<span id="connect_email_warning">Обов'язкове поле</span>
			</div>
		</div>
		<span class="connect_form_message_head">Текст повідомлення*</span>
		<textarea id="connect_message" type="text" name="message" placeholder="<?= $this->get('message'); ?>"></textarea>
		<span id="connect_message_warning">Обов'язкове поле</span>
		<button id="connect_submit" type="button">Надіслати</button>
	</form>
</section>
<script src="<?php echo $this->getBP(); ?>/js/connect.js?v=<?php echo filectime($this->getBP() . "js/connect.js") ?>"></script>