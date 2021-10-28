<?php
	if(Core\Helper::isAdmin() == true):
?>

<section class="add_car_section">

	<div class="admin_panel">
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/add_car">Додавання автомобіля</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/buy_car_requests">Заявки про купівлю авто</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/sale_car_requests">Заявки про продаж авто</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/purchase_car_requests">Заявки про викуп авто</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/exchange_car_requests">Заявки про обмін авто</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/rolling_car_requests">Заявки про прокат авто</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/loan_car_requests">Заявки на авто в кредит</a>
	</div>

	<form class="add_car_form hide_this" action="" method="POST" enctype='multipart/form-data'>
		<input type="hidden" name="action" value="add_car">
		
		<div class="add_car_block">
			<div>
				<div>
					<span>Назва автомобіля</span>
					<input id="brand_input" type="text" name="brand" placeholder="Марка"/>
					<input id="model_input" type="text" name="model" placeholder="Модель"/>
				</div>
				
				<div>
					<span>Загальні характеристики</span>
					<select name='car_state'>
						<option value="used_car">Вживане</option>
						<option value="new_car">Нове</option>
					</select>
					<input id="year_input" type="text" name="year" placeholder="Рік"/>
					<input id="run_input" type="text" name="run" placeholder="Пробіг, тис. км"/>
					<input id="color_input" type="text" name="color" placeholder="Колір"/>
					<input id="price_input" type="text" name="price" placeholder="Ціна"/>
				</div>
	
			</div>
			
			<div>
				<div>
					<span>Технічні характеристики</span>
					
					<select name='car_type'>
						<option value="легкові">Легкова</option>
						<option value="вантажівки">Вантажівки</option>
						<option value="причепи">Причепи</option>
						<option value="спецтехніка">Спецтехніка</option>
					</select>
					
					<select name='body_type'>
						<option value="null">Тип кузова</option>
						<option value="універсал">Універсал</option>
						<option value="седан">Седан</option>
						<option value="хетчбек">Хетчбек</option>
						<option value="мінівен">Мінівен</option>
						<option value="кросовер">Кросовер</option>
						<option value="купе">Купе</option>
						<option value="кабріолет">Кабріолет</option>
						<option value="евакуатор">Евакуатор</option>
						<option value="вантажівка">Вантажівка</option>
						<option value="мікроавтобус">Мікроавтобус</option>
						<option value="легковий фургон">Легковий фургон</option>
					</select>
					
					<select name='fuel_type'>
						<option value="0">Тип палива</option>
						<option value="бензин">Бензин</option>
						<option value="дизель">Дизель</option>
						<option value="газ">Газ</option>
						<option value="бензин/газ">Бензин/газ</option>
						<option value="гібрид">Гібрид</option>
						<option value="електро">Електро</option>
					</select>
					
					<select name='transmission'>
						<option value="0">Коробка передач</option>
						<option value="механіка">Механіка</option>
						<option value="автомат">Автомат</option>
						<option value="типтронік">Типторнік</option>
						<option value="робот">Робот</option>
						<option value="варіатор">Варіатор</option>
					</select>
					
					<select name='drive'>
						<option value="0">Привід</option>
						<option value="задній">Задній</option>
						<option value="передній">Передній</option>
						<option value="повний">Повний</option>
					</select>
					
					<input id="volume_input" type="text" name="volume" placeholder="Об'єм"/>
					<input id="number_of_seats_input" type="text" name="number_of_seats" placeholder="Кількість місць"/>
					<input id="number_of_doors_input" type="text" name="number_of_doors" placeholder="Кількість дверей"/>
					
				</div>
				
			</div>

			<div class="car_description_block">
				<div>
					<span>Опис</span>
					<textarea id="description_input" type="text" name="description" placeholder="Опис"></textarea>
				</div>
				<div class="upload_car_img">					
					<input id="file-input" multiple type="file" name="files[]" hidden />
					<label for="file-input">Зображення<i class="fas fa-arrow-up"></i></label>					
					<button id="save_edit" type="button">Додати</button>
				</div>
			</div>	
			
		</div>		
		
	</form>

</section>

<script src="<?php echo $this->getBP(); ?>/js/car_save_validation.js?v=<?php echo filectime($this->getBP() . "js/car_save_validation.js") ?>"></script>

<?php else: 

	Core\Helper::redirect('/index/index');

?>

<?php endif; ?>	