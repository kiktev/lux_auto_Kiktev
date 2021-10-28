<?php 

	$car = $this->get('car_info');
	
	function customStrtoupper($string) {

		$char = mb_strtoupper(substr($string,0,2), "utf-8"); // это первый символ

		$string[0] = $char[0];
		$string[1] = $char[1];

		return $string;
	}

	$body_type = $car['body_type'];

	$body_type = customStrtoupper($car['body_type']);
	
	$this->set('request_name','');
	$this->set('request_phone','');
	$this->set('request_email','');

	if(Core\Helper::getCustomer() == true){
		$this->set('request_name', Core\Helper::getCustomer()['name']);
		$this->set('request_phone', Core\Helper::getCustomer()['telephone']);
		$this->set('request_email', Core\Helper::getCustomer()['email']);
	}

?>

<form class="request_form buy_form" method="post">
	<div class="request_form_name">
		<span><i class="fas fa-info"></i>Заявка про покупку</span>
		<i class="fas fa-times request_form_close_icon"></i>
	</div>

	<div class="request_form_input">
		<input type="hidden" name="action" value="request"/>
		<input type="hidden" name="car_id" value="<?php echo $car['id']?>"/>
		<div>
			<span>Ім'я</span>
			<input class="buy_request_form_name" name="name" value="<?= $this->get('request_name')?>" type="text" placeholder="Ім'я"/>
		</div>
		<div>
			<span>Телефон</span>
			<input class="buy_request_form_phone" name="phone" value="<?= $this->get('request_phone')?>" type="text" placeholder="Телефон"/>
		</div>
		<div>
			<span>Email</span>
			<input class="buy_request_form_email" name="email" value="<?= $this->get('request_email')?>" type="text" placeholder="Email, не обов'язково"/>
		</div>
		<div>
			<button id="buy_submit" type="submit">Надіслати</button>
		</div>
	</div>
	<div class="request_form_manager">
		<span>Залиште Ваші контактні дані для зв'язку з фахівцем з відділу продажів. Менеджер зв'яжеться з Вами найближчим часом. Дякуємо за заявку!</span>
	</div>
	
</form>

<form class="request_form loan_form" method="post">
	<div class="request_form_name">
		<span><i class="fas fa-info"></i>Заявка про кредит</span>
		<i class="fas fa-times request_form_close_icon"></i>
	</div>
	<div class="request_form_input">
		<input type="hidden" name="action" value="loan_request"/>
		<input type="hidden" name="car_id" value="<?php echo $car['id']?>"/>
		<div>
			<span>Ім'я</span>
			<input class="loan_request_form_name" name="name" value="<?= $this->get('request_name')?>" type="text" placeholder="Ім'я"/>
		</div>
		<div>
			<span>Телефон</span>
			<input class="loan_request_form_phone" name="phone" value="<?= $this->get('request_phone')?>" type="text" placeholder="Телефон"/>
		</div>
		<div>
			<span>Email</span>
			<input class="loan_request_form_email" name="email" value="<?= $this->get('request_email')?>" type="text" placeholder="Email, не обов'язково"/>
		</div>
		<div>
			<button id="loan_submit" type="button">Надіслати</button>
		</div>
	</div>
	<div class="request_form_manager">
		<span>Залиште Ваші контактні дані для зв'язку з фахівцем з відділу продажів. Менеджер зв'яжеться з Вами найближчим часом. Дякуємо за заявку!</span>
	</div>
	
</form>


<form class="request_form exchange_form" method="post">
	<div class="request_form_name">
		<span><i class="fas fa-info"></i>Заявка про обмін</span>
		<i class="fas fa-times request_form_close_icon"></i>
	</div>
	<div class="request_form_input">
		<input type="hidden" name="action" value="exchange_request"/>
		<input type="hidden" name="car_id" value="<?php echo $car['id']?>"/>
		<div>
			<span>Ім'я</span>
			<input class="exchange_request_form_name" name="name" value="<?= $this->get('request_name')?>" type="text" placeholder="Ім'я"/>
		</div>
		<div>
			<span>Телефон</span>
			<input class="exchange_request_form_phone" name="phone" value="<?= $this->get('request_phone')?>" type="text" placeholder="Телефон"/>
		</div>
		<div>
			<span>Email</span>
			<input class="exchange_request_form_email" name="email" value="<?= $this->get('request_email')?>" type="text" placeholder="Email, не обов'язково"/>
		</div>
		<div>
			<button id="exchange_submit" type="button">Надіслати</button>
		</div>
	</div>
	<div class="request_form_manager">
		<span>Залиште Ваші контактні дані для зв'язку з фахівцем з відділу продажів. Менеджер зв'яжеться з Вами найближчим часом. Дякуємо за заявку!</span>
	</div>
	
</form>

<form class="request_form rolling_form" method="post">
	<div class="request_form_name">
		<span><i class="fas fa-info"></i>Заявка про прокат</span>
		<i class="fas fa-times request_form_close_icon rolling_form_icon"></i>
	</div>
	<div class="request_form_input">
		<input type="hidden" name="action" value="rolling_request"/>
		<input type="hidden" name="car_id" value="<?php echo $car['id']?>"/>
		<div>
			<span>Ім'я</span>
			<input class="rolling_request_form_name" name="name" value="<?= $this->get('request_name')?>" type="text" placeholder="Ім'я"/>
		</div>
		<div>
			<span>Телефон</span>
			<input class="rolling_request_form_phone" name="phone" value="<?= $this->get('request_phone')?>" type="text" placeholder="Телефон"/>
		</div>
		<div>
			<span>Email</span>
			<input class="rolling_request_form_email" name="email" value="<?= $this->get('request_email')?>" type="text" placeholder="Email, не обов'язково"/>
		</div>
		<div>
			<button id="rolling_submit" type="button">Надіслати</button>
		</div>
	</div>
	<div class="request_form_manager">
		<span>Залиште Ваші контактні дані для зв'язку з фахівцем з відділу продажів. Менеджер зв'яжеться з Вами найближчим часом. Дякуємо за заявку!</span>
	</div>
	
</form>

<section class="carInfo_section">
	<div class="carInfo_string">
		<div class="carInfo_name">
			<?php echo $car['brand'] . " " . $car['model']?><span><?php echo ", " . $car['transmission'] ?></span>
		</div>


		<div class="carInfo_price">
			<?= number_format($car['price'], 0, '', ' ') . " "?><i class="fas fa-dollar-sign"></i>
		</div>
		
		<div class="buy_request">Купити</div>

	</div>
	<div class="carInfo_block">
		<?php
			
			$array_count = 0;
			
			$full_path  = $this->getBP() . 'data/car_img' . '/' . $car['id'];
			
			$array = scandir($full_path);
					
			unset($array[0]);
			unset($array[1]);
	
			$array = array_values($array);
			
			$array_count = count($array);
			
		?>
		<div class="carInfo_slide_block">
		
			<?php foreach ($array as $key=>$value) {
					
			?>
			
			<div class="carInfo_slide fade" style="background-image: url(<?="/$full_path/" . $value . '?' . filectime("$full_path/" . $value) ?>)">
			  
				<div class="carInfo_prev_next">
					<a class="carInfo_prev" onclick="plusSlides(-1)"><i class="fas fa-angle-left"></i></a>
					<a class="carInfo_next" onclick="plusSlides(1)"><i class="fas fa-angle-right"></i></a>
				</div>
				
				<div class="carInfo_dot_block">
					<?php for($i=1;$i<=$array_count;$i++){?>
						<span class="carInfo_dot" onclick="currentSlide(<?=$i?>)"></span> 
					<?php } ?>
				</div>
			
			</div>
			
			<?php } ?>
		</div>		
	
		
		
		<div class="carInfo_right_block">

			<span class="description_info">Характеристики авто</span>

			<div class="description_info_params_main">
				<span><?php echo $body_type  . " " ?></span>
				<i class="fas fa-circle"></i>
				<span><?php echo $car['year'] . " рік" ?></span>
				<i class="fas fa-circle"></i>
				<span><?php echo $car['number_of_doors'] . " дверей" ?></span>
				<i class="fas fa-circle"></i>
				<span><?php echo $car['number_of_seats'] . " місць" ?></span>
				
			</div>


			<div class="description_info_double">
				<div class="description_info_name">
					<span>Пробіг</span>
				</div>

				<div class="description_info_params">
					<span><?php echo $car['run'] . " тис. км"?></span>
				</div>
			</div>

			<div class="description_info_double">
				<div class="description_info_name">	
					<span>Двигун</span>
				</div>

				<div class="description_info_params">
					<span><?php echo $car['volume'] . " л." ?></span>
					<i class="fas fa-circle"></i>
					<span><?php echo $car['fuel_type'] ?></span>
				</div>
			</div>

		

			<div class="description_info_double">
				<div class="description_info_name">
					<span>Трансмісія</span>
				</div>

				<div class="description_info_params">
					<span><?php echo $car['transmission'] ?></span>
					<i class="fas fa-circle"></i>
					<span><?php echo $car['drive'] . " привід"?></span>
				</div>
			</div>

			<div class="description_info_double">
				<div class="description_info_name">
					<span>Колір</span>
				</div>

				<div class="description_info_params">
					<span><?php echo $car['color'] ?></span>
				</div>
			</div>

			<span class="description_info">Опис авто</span>
			<span><?php echo $car['description'] ?></span>

		</div>
		
	</div>

	<div class="offers">
		<span>Доступні пропозиції:</span>
		<div class="offers_div">
			<div class="exchange_request">Обмін</div>
			<div class="loan_request">Кредит</div>
			<div class="rolling_request">Прокат</div>
		</div>
	</div>

</section>

<script src="<?php echo $this->getBP(); ?>/js/carInfo.js?v=<?php echo filectime($this->getBP() . "js/carInfo.js") ?>"></script>
