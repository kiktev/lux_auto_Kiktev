<?php 

$user = $this->get('user');

?>
<section class="profile_section">
	<span class="profile_head">Сторінка вашого профілю</span>
	<form action="" method="POST" class="profile_form">
		<input type="hidden" name="action" value="save"/>
		<span class="profile_form_head">Персональна інформація</span>
			
			<div class="profile_form_right_margin">
				<span>Ім'я*</span>
				<input autocomplete="off" id="profile_name" value="<?= $user['name'] ?>" name="name" type="text" placeholder="<?= $this->get('name'); ?>" />
				<span id="profile_name_warning">Обов'язкове поле</span>
			</div>
			<div>
				<span>Прізвище*</span>
				<input autocomplete="off"  id="profile_surname" value="<?= $user['surname'] ?>" name="surname" type="text" placeholder="<?= $this->get('surname'); ?>" />
				<span id="profile_surname_warning">Обов'язкове поле</span>
			</div>
		

		
			<div class="profile_form_right_margin">
				<span>Email*</span>
				<input autocomplete="off" id="profile_email" value="<?= $user['email'] ?>" name="email" type="text" placeholder="<?= $this->get('email'); ?>" />
				<span id="profile_email_warning">Обов'язкове поле</span>
			</div>


			<div class="profile_form_right_margin">
				<span>Номер телефону*</span>
				<input autocomplete="off" id="profile_telephone" value="<?= $user['telephone'] ?>" name="telephone" type="text" placeholder="<?= $this->get('telephone'); ?>" />
				<span id="profile_telephone_warning">Обов'язкове поле</span>
			</div>

			<div>
				<span>Пароль*</span>
				<input autocomplete="off" id="profile_password" name="password" type="text" placeholder="<?= $this->get('password'); ?>" />
				<span id="profile_password_warning">Обов'язкове поле</span>
			</div>
			<div>
				<span>Новий пароль*</span>
				<input autocomplete="off" id="profile_newpassword" name="newpassword" type="text" placeholder="<?= $this->get('newpassword'); ?>" />
				<span id="profile_newpassword_warning">Не обов'язкове поле</span>
			</div>
		
			<div class="profile_buttons">
				<button id="save_submit" type="button">Зберегти зміни</button>
				<button id="delete_submit" data-id="<?= $user['id'] ?>" class="delete_submit" type="button">Видалити</button>
			</div>	

			<a href="<?php echo $this->getBP();?>/customer/logout">Вихід</a>
		
	</form>
</section>

<script src="<?php echo $this->getBP(); ?>/js/profile.js?v=<?php echo filectime($this->getBP() . "js/profile.js") ?>"></script>