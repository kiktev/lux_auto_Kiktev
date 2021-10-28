<?php
	$cars = $this->get('car_list');
	$all_years = $this->get('all_years');
	$all_brands = $this->get('all_brands');
	$all_models = $this->get('all_models');
	
	$user = Core\Helper::getCustomer();
	
	$is_admin = Core\Helper::isAdmin();
?>

<section class="index_section">

		<div class="index_head">
			<span class="main_name">Оголошення про продаж авто</span>


<?php
	if($is_admin == true):
?>
			<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/add_car"><i class="fas fa-users-cog"></i></a>

<?php endif; ?>	
		</div>

</section>
		
<section class="car_section">
	<form class="sort_form" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" name="action" value="filter"/>
		<div class="form_block">
			<span class="form_name" >Підбір автомобіля</span>
			<div class="checkbox-btn-group">
				<label>
					<input type="radio" value="all" name="car_state" checked>
					<span>Всі</span>
				</label>
				<label>
					<input class="car_state_used" id="used_car" type="radio" value="used_car" name="car_state">
					<span>Вживані</span>
				</label>
				<label>
					<input class="car_state_new" id="new_car" type="radio" value="new_car" name="car_state">
					<span>Нові</span>
				</label>
			</div>
			
			<select name='car_type' >
				<option value="легкові">Легкові</option>
				<option value="вантажівки">Вантажівки</option>
				<option value="причепи">Причепи</option>
				<option value="спецтехніка">Спецтехніка</option>
			</select>
			
			<!--search select START-->
			
			<ul class="cust_select">

				<input class="hidden_input" type="hidden" name="brand" value="all"/>
				
				<li data-option="all" id="custom_select_main" class="option main"><input value="" onkeyup="select_filterFunction()" placeholder="Пошук.." class="hide_item input_select"  type="text"/>
					<span class="unhide_item">Марка</span>
					<i class="fas fa-angle-down unhide_item"></i>
					<i class="fas fa-angle-up hide_item"></i>
				</li>
						
				<?php foreach($all_brands as $brand_array){
						foreach($brand_array as $brand_val){?>
							<li class="option" data-option="<?=$brand_val; ?>"><?=$brand_val;?><i class="fas fa-angle-down hide_item"></i></li>
				<?php }}?>
				
				
			</ul>
			<!--
			<ul class="cust_select">
			
				<input class="hidden_input" type="hidden" name="model" value="all"/>
				
				<li data-option="all" class="option main"><input value="" onkeyup="select_filterFunction()" placeholder="Пошук.." class="hide_item input_select"  type="text"/>
					<span class="unhide_item">Модель</span>
					<i class="fas fa-angle-down unhide_item"></i>
					<i class="fas fa-angle-up hide_item"></i>
				</li>
		
				<?php foreach($all_models as $model_array){
						foreach($model_array as $model_val){?>
							<li class="option" data-option="<?=$model_val; ?>"><?=$model_val;?></li>
				<?php }}?>
							
			</ul>	

		-->
						
			<!--search select END-->
			
			<select name='body_type'>
				<option value="all">Тип кузова</option>
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
				<option value="all">Тип палива</option>
				<option value="бензин">Бензин</option>
				<option value="дизель">Дизель</option>
				<option value="газ">Газ</option>
				<option value="бензин/газ">Бензин/газ</option>
				<option value="гібрид">Гібрид</option>
				<option value="електро">Електро</option>
			</select>
			
			<select name='transmission'>
				<option value="all">Коробка передач</option>
				<option value="механіка">Механіка</option>
				<option value="автомат">Автомат</option>
				<option value="типтронік">Типторнік</option>
				<option value="робот">Робот</option>
				<option value="варіатор">Варіатор</option>
			</select>
			
			<select name='drive'>
				<option value="all">Привід</option>
				<option value="задній">Задній</option>
				<option value="передній">Передній</option>
				<option value="повний">Повний</option>
			</select>
			

			<div class="form_year">
				<span>Рік</span>		
				<select name='min_year'>
					<option value="<?=$this->get('min_year');?>">від</option>
					<?php foreach($all_years as $year_array){
							foreach($year_array as $year_val){?>
								<option value="<?= $year_val; ?>"><?=$year_val;?></option>
					<?php }}?>
				</select>		
				<select name='max_year'>
					<option value="<?=$this->get('max_year');?>">до</option>
					<?php foreach($all_years as $year_array){
							foreach($year_array as $year_val){?>
						<option value="<?= $year_val; ?>"><?=$year_val;?></option>
					<?php }}?>
				</select>	
			</div>
			
			<div class="form_price">
				<span>Ціна, <i class="fas fa-dollar-sign"></i></span>			
				<input type="text" name="min_price"  value="0" placeholder="від" />
				<input type="text" name="max_price" value="<?=number_format($this->get('max_price'), 0, '', ' ');?>"  placeholder="до" />
			</div>
			
			<div class="form_run">
				<span>Пробіг</span>			
				<input type="text" name="min_run" value="0" placeholder="від" />
				<input type="text" name="max_run" value="<?=number_format($this->get('max_run'), 0, '', ' ');?>" placeholder="до" />
			</div>
			
			<button type="submit">Пошук</button>
		</div>

		
	</form>
	
	<div class="car_list">
		<div class="car_list_sort_view">
			<form class="car_list_sort" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
				<span>Сортування: </span>
				<select name='sort'>
					<option <?php echo $this->get('selected_item') === 'add_time_DESC' ? 'selected' : '';?> value="add_time_DESC">cпочатку нові пропозиції</option>
					<option <?php echo $this->get('selected_item') === 'price_ASC' ? 'selected' : '';?> value="price_ASC">cпочатку дешевші</option>
					<option <?php echo $this->get('selected_item') === 'price_DESC' ? 'selected' : '';?> value="price_DESC">cпочатку дорожчі</option>
				</select>	
				<button type="submit"><i class="fas fa-check"></i></button>
			</form>
			<!---
			<div class="car_list_view">
				<span><i class="fas fa-th"></i></i><span>
				<span><i class="fas fa-th-list"></i><span>
			</div>
			-->
		</div>
		<?php
			$slide_num = 0;
			$first_slide = 0;
		?>
		<div class='grid_blocks'>
			<?php 
			
			foreach($cars as $key=>$car){ 
		
				$array_count = 0;
				
				$full_path  = '';
				
				$full_path  .=   $this->getBP() . 'data/car_img' . '/' . $car['id'];
				
				
				$array = scandir($full_path);
				
				unset($array[0]);
				unset($array[1]);
				
				$array = array_values($array);
			
				$array_count += count($array);
				
			?>
							
			<div class="grid_block">
				
				<div class="slideshow-container">
					
			
					<div class="mySlides fade" >
					  <div class="car_img" style="background-image: url(<?= '/' . $full_path .'/' . $array[0] . '?' . filectime("$full_path/" . $array[0]) ?>)">			
					  </div>
					</div>
					
					
					<div class="car_info">
						<div>
							<span class="car_name"><?=$car['brand'] . " " . $car['model'];?></span>
							<span class="car_year"><?=$car['year']?></span>
						</div>	
						<span class="car_run"><i class="fas fa-tachometer-alt"></i><?= $car['run'] ?> тис. км</span>	
						<div>
							<span class="car_body_type"><i class="fas fa-car"></i><?= $car['body_type'] ?></span>
							<span class="car_fuel_type"><i class="fas fa-gas-pump"></i><?= $car['fuel_type'] ?></span>
						</div>								
						<div>
							<span class="car_drive"><img src="<?php echo $this->getBP(); ?>/images/index/wheel_drive.png"></img><?= $car['drive'] ?></span>				
							<span class="car_transmission"><img src="<?php echo $this->getBP(); ?>/images/index/gearbox.png"></img><?= $car['transmission'] ?></span>
						</div>
						<span class="car_price_uah"><i class="fas fa-hryvnia"></i><?= number_format(round($car['price'] * DOLLARS), 0, '', ' '); ?></span>
						<span class="car_price_dol"><i class="fas fa-dollar-sign"></i><?= number_format($car['price'], 0, '', ' '); ?></span>
						
						<div class="toCarInfo">
							
							<?= \Core\Url::getLink("/carInfo/carInfo", 'Деталі', array('id'=>$car['id'])); ?>

							

							<?php
								if($is_admin == true):
							?>

							<div>

								<?= \Core\Url::getLink("/admin/edit_car", '<i class="far fa-edit"></i>', array('id'=>$car['id'])); ?>
									
							</div>

							<div>

								<?= \Core\Url::getLink("/admin/car_delete", '<i class="far fa-trash-alt"></i>', array('id'=>$car['id'])); ?>
									
							</div>

							<?php else: ?>


							<form class="cart_form" method="POST">
								<input type="hidden" name="action" value="cart_submit" />
								<input type="hidden" name="id" value="<?= $car['id']; ?>" />
								

								
									<button type="button" data-car-id="<?= $car['id']; ?>" class="cart_submit"><i class="fas fa-cart-plus"></i></button>
								
								
							</form>

							<?php endif; ?>

						</div>
					</div>
							
				</div>
			</div>
			
			<?php 
			
				$first_slide += $array_count;
				}
			?>
					
		</div>
		
		<!-- Вивід автомобілів в наявності -->
		<div class="show_more">Показати ще..</div>
	</div>
	
</section>

<script src="<?php echo $this->getBP(); ?>/js/index.js?v=<?php echo filectime($this->getBP() . "js/index.js") ?>"></script>
<script src="<?php echo $this->getBP(); ?>/js/custom_select.js?v=<?php echo filectime($this->getBP() . "js/custom_select.js") ?>"></script>