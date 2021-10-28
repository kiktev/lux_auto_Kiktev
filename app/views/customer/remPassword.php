<section class="rem_section">
	<span class="rem_head">Відновлення паролю</span>

	<form id="rem_form_hash" method="POST">
		<input type="hidden" name="action" value="getHash" />
		<span class="rem_form_head">Форма відновлення паролю</span>
		<div class="rem_form_div">
			<span>Email*</span>
			<input autocomplete="off" name="email" id="rem_email" placeholder="<?= $this->get('email');?>"></input>
			<span id="rem_email_warning">Обов'язкове поле</span>
			<button id="rem_getHash" type="button">Отримати код</button>
		</div>

	</form>

	<form class="rem_form_password" method="POST">
		<input type="hidden" name="action" value="setPassword" />
		<div class="rem_form_div">
			<span>Код з електронної пошти*</span>
			<input autocomplete="off" name="hash" id="rem_hash" placeholder="<?= $this->get('hash');?>"></input>
			<span id="rem_hash_warning">Обов'язкове поле</span>
		</div>
		<div class="rem_form_div">
			<span>Новий пароль*</span>
			<input autocomplete="off" name="newpassword" id="rem_newpassword" placeholder="<?= $this->get('newpassword');?>"></input>
			<span id="rem_newpassword_warning">Обов'язкове поле</span>
		</div>
		<button id="rem_setPassword" type="button">Відновити</button>
	</form>
</section>

<script src="<?php echo $this->getBP(); ?>/js/remPassword.js?v=<?php echo filectime($this->getBP() . "js/remPassword.js") ?>"></script>