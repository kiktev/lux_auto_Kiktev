<?php
	$cars = $this->get('cartList');
?>

<section class="cart_section">
	<h1 class="cart_h1">Корзина користувача</h1>


				<div class="cart_list">

			
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
							
							<?php foreach ($array as $key=>$value) {
								
									$visible_slide = 0;
										if ($key == 0) {
											$visible_slide = 1;
										}
								
							?>
									
							<div class="mySlides fade" data-visible_slide="<?=$visible_slide?>">
							  <div class="car_img" style="background-image: url(<?= '/' . $full_path .'/' . $value . '?' . filectime("$full_path/" . $value) ?>)">
								<div class="prev_next">
									<a class="prev" data-slide_num="<?=$slide_num?>" data-slide_count="<?=$array_count?>" data-first_slide="<?=$first_slide?>"><i class="fas fa-angle-left"></i></a>
									<a class="next" data-slide_num="<?=$slide_num?>" data-slide_count="<?=$array_count?>" data-first_slide="<?=$first_slide?>"><i class="fas fa-angle-right"></i></a> 
								</div>		
							  </div>
							</div>
							<?php 
							
								$slide_num++;
							}	
							?>
							
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
									<form class="cart_form" method="POST">
										<input type="hidden" name="action" value="cart_remove" />
										<input type="hidden" name="id" value="<?= $car['id']; ?>" />
										<button type="button" class="cart_remove"><i class="far fa-trash-alt"></i></button>
									</form>
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
				
			</div>

</section>

<script src="<?php echo $this->getBP(); ?>/js/index.js?v=<?php echo filectime($this->getBP() . "js/index.js") ?>"></script>
<script src="<?php echo $this->getBP(); ?>/js/cart.js?v=<?php echo filectime($this->getBP() . "js/cart.js") ?>"></script>