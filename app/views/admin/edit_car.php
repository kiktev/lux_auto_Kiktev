<?php
	if(Core\Helper::isAdmin() == true):
?>

<?php

	$car = $this->get('car_info');

	$array_count = 0;
						
	$full_path  = $this->getBP() . 'data/car_img' . '/' . $car['id'];
	
	$array = scandir($full_path);

	unset($array[0]);
	unset($array[1]);

	$array = array_values($array);
	
	$array_count = count($array);
	
?>

<section class="edit_main_section">

<section class="car_views_section">

	<h1 class="edit_car_section_h1">Редагування інформації про авто</h1>

	<div id="carInfo_slide" class="carInfo_slide_block">
	
		<?php foreach ($array as $key=>$value) {
				
		?>
		
		<div class="carInfo_slide fade" style="background-image: url(<?="/$full_path/" . $value . '?' . filectime("$full_path/" . $value) ?>)">
		  
			<div class="carInfo_prev_next">
				<a class="carInfo_prev" onclick="plusSlides(-1)"><i class="fas fa-angle-left"></i></a>
				<a class="carInfo_next" onclick="plusSlides(1)"><i class="fas fa-angle-right"></i></a>
			</div>

			<div class="edit_img">

				<form class="rename_img_form" action="" method="POST">
					<input type="hidden" name="action" value="rename_img"/>
					<input type="hidden" name="path" value="<?="$full_path/" . $value?>"/>
					<button type="submit" data-car_id="<?= $car['id'] ?>" id="renameImg" ><i class="fas fa-chevron-up"></i></i></button>
				</form>

				<form class="delete_img_form" action="" method="POST">
					<input type="hidden" name="action" value="delete_img"/>
					<input type="hidden" name="path" value="<?="$full_path/" . $value?>"/>
					<button type="submit" data-car_id="<?= $car['id'] ?>" id="deleteImg" ><i class="far fa-trash-alt"></i></button>
				</form>

			</div>
			
		</div>
		
		<?php } ?>

	</div>

</section>

<section class="edit_car_section">

	<form class="add_car_form" action="" method="POST" enctype='multipart/form-data'>
		<input type="hidden" name="action" value="edit_car">
		
		<div class="add_car_block">
			<div>
				<div>
					<span>Назва автомобіля</span>

					<input id="brand_input" autocomplete="off" type="text" value="<?= $car['brand'] ?>" name="brand" placeholder="Марка"/>
					<input id="model_input" autocomplete="off" type="text" value="<?= $car['model'] ?>" name="model" placeholder="Модель"/>
					
				</div>
				
				<div>
					<span>Загальні характеристики</span>

					<select name='car_state'>
						<option <?php echo $car['car_state'] == 'used_car' ? 'selected' : '';?> value="used_car">Вживане</option>
						<option <?php echo $car['car_state'] == 'new_car' ? 'selected' : '';?> value="new_car">Нове</option>
					</select>

					<input id="year_input" type="text" value="<?= $car['year'] ?>" name="year" placeholder="Рік"/>
					<input id="run_input" type="text" value="<?= $car['run'] ?>" name="run" placeholder="Пробіг, тис. км"/>
					<input id="color_input" type="text" value="<?= $car['color'] ?>" name="color" placeholder="Колір"/>
					<input id="price_input" type="text" value="<?= $car['price'] ?>" name="price" placeholder="Ціна"/>

				</div>
	
			</div>

			<div>
				<div>
					<span>Технічні характеристики</span>
					
					<select name='car_type'>
						<option <?php echo $car['car_type'] == 'легкові' ? 'selected' : '';?> value="легкові">Легкова</option>
						<option <?php echo $car['car_type'] == 'вантажівки' ? 'selected' : '';?> value="вантажівки">Вантажівки</option>
						<option <?php echo $car['car_type'] == 'причепи' ? 'selected' : '';?> value="причепи">Причепи</option>
						<option <?php echo $car['car_type'] == 'спецтехніка' ? 'selected' : '';?> value="спецтехніка">Спецтехніка</option>
					</select>
					
					<select name='body_type'>
						<option <?php echo $car['body_type'] == 'універсал' ? 'selected' : '';?> value="універсал">Універсал</option>
						<option <?php echo $car['body_type'] == 'седан' ? 'selected' : '';?> value="седан">Седан</option>
						<option <?php echo $car['body_type'] == 'хетчбек' ? 'selected' : '';?> value="хетчбек">Хетчбек</option>
						<option <?php echo $car['body_type'] == 'мінівен' ? 'selected' : '';?> value="мінівен">Мінівен</option>
						<option <?php echo $car['body_type'] == 'кросовер' ? 'selected' : '';?> value="кросовер">Кросовер</option>
						<option <?php echo $car['body_type'] == 'купе' ? 'selected' : '';?> value="купе">Купе</option>
						<option <?php echo $car['body_type'] == 'кабріолет' ? 'selected' : '';?> value="кабріолет">Кабріолет</option>
						<option <?php echo $car['body_type'] == 'евакуатор' ? 'selected' : '';?> value="евакуатор">Евакуатор</option>
						<option <?php echo $car['body_type'] == 'вантажівка' ? 'selected' : '';?> value="вантажівка">Вантажівка</option>
						<option <?php echo $car['body_type'] == 'мікроавтобус' ? 'selected' : '';?> value="мікроавтобус">Мікроавтобус</option>
						<option <?php echo $car['body_type'] == 'легковий фургон' ? 'selected' : '';?> value="легковий фургон">Легковий фургон</option>
					</select>
					
					<select name='fuel_type'>
						<option <?php echo $car['fuel_type'] == 'бензин' ? 'selected' : '';?> value="бензин">Бензин</option>
						<option <?php echo $car['fuel_type'] == 'дизель' ? 'selected' : '';?> value="дизель">Дизель</option>
						<option <?php echo $car['fuel_type'] == 'газ' ? 'selected' : '';?> value="газ">Газ</option>
						<option <?php echo $car['fuel_type'] == 'бензин/газ' ? 'selected' : '';?> value="бензин/газ">Бензин/газ</option>
						<option <?php echo $car['fuel_type'] == 'гібрид' ? 'selected' : '';?> value="гібрид">Гібрид</option>
						<option <?php echo $car['fuel_type'] == 'електро' ? 'selected' : '';?> value="електро">Електро</option>
					</select>
					
					<select name='transmission'>
						<option <?php echo $car['transmission'] == 'механіка' ? 'selected' : '';?> value="механіка">Механіка</option>
						<option <?php echo $car['transmission'] == 'автомат' ? 'selected' : '';?> value="автомат">Автомат</option>
						<option <?php echo $car['transmission'] == 'типтронік' ? 'selected' : '';?> value="типтронік">Типторнік</option>
						<option <?php echo $car['transmission'] == 'робот' ? 'selected' : '';?> value="робот">Робот</option>
						<option <?php echo $car['transmission'] == 'варіатор' ? 'selected' : '';?> value="варіатор">Варіатор</option>
					</select>
					
					<select name='drive'>
						<option <?php echo $car['drive'] == 'задній' ? 'selected' : '';?> value="задній">Задній</option>
						<option <?php echo $car['drive'] == 'передній' ? 'selected' : '';?> value="передній">Передній</option>
						<option <?php echo $car['drive'] == 'повний' ? 'selected' : '';?> value="повний">Повний</option>
					</select>
					
					<input id="volume_input" type="text" value="<?= $car['volume'] ?>" name="volume" placeholder="Об'єм"/>
					<input id="number_of_seats_input" type="text" value="<?= $car['number_of_seats'] ?>" name="number_of_seats" placeholder="Кількість місць"/>
					<input id="number_of_doors_input" type="text" value="<?= $car['number_of_doors'] ?>" name="number_of_doors" placeholder="Кількість дверей"/>
					

				</div>
				
			</div>

			<div class="car_description_block">
				<div>
					<span>Опис</span>

					<textarea id="description_input" type="text" name="description" placeholder="Опис"><?= $car['description'] ?></textarea>
				</div>

				<div class="upload_car_img">
								
					<input id="file-input" multiple type="file" name="files[]" hidden />
					<label for="file-input">Зображення<i class="fas fa-arrow-up"></i></label>

					<button id="save_edit" type="submit">Зберегти зміни</button>

				</div>
				
			</div>

		</div>		
		
	</form>

</section>
</section>

<script src="<?php echo $this->getBP(); ?>/js/car_edit.js?v=<?php echo filectime($this->getBP() . "js/car_edit.js") ?>"></script>

<script src="<?php echo $this->getBP(); ?>/js/car_save_validation.js?v=<?php echo filectime($this->getBP() . "js/car_save_validation.js") ?>"></script>

<?php else: 

	Core\Helper::redirect('/index/index');

?>

<?php endif; ?>	