<header>

	<nav>

		<input type="checkbox" id="checkbox-menu">
			<ul class="menu">
				<li class="flex-width li_logo_menu"><a class="logo_menu" href="<?php echo $this->getBP();?>/index/index"><img src="<?php echo $this->getBP(); ?>/images/logo.png"></img></a></li>
				<li class="unhidden_li"><a href="<?php echo $this->getBP();?>/info/info">Про нас</a></li>
				<li class="unhidden_li"><a href="<?php echo $this->getBP();?>/index/index?car_state=new_car">Нові авто</a></li>
				<li class="unhidden_li"><a href="<?php echo $this->getBP();?>/index/index?car_state=used_car">Вживані авто</a></li>
				<li class="flex-width unhidden_li"><a href="<?php echo $this->getBP();?>/connect/connect">Зв'язатись</a></li>

<?php
	if(Core\Helper::getCustomer() != true):
?>
				<li class="unhidden_li"><a href="<?php echo $this->getBP();?>/customer/signIn"><i class="far fa-user"></i></a></li>
				<li class="hidden_li"><a href="<?php echo $this->getBP();?>/customer/signIn">Профіль</a></li>
<?php else: ?>
				<li class="unhidden_li"><a href="<?php echo $this->getBP();?>/customer/profile"><i class="far fa-user"></i></a></li>
				<li class="hidden_li"><a href="<?php echo $this->getBP();?>/customer/profile">Профіль</a></li>
<?php endif; ?>	

				<li class="unhidden_li"><a href="<?php echo $this->getBP();?>/cart/cart"><i class="fas fa-shopping-cart"></i></a></li>		
				
	
				
				<li class="hidden_li"><a href="<?php echo $this->getBP();?>/cart/cart">Корзина</a></li>

				<li>

					<div id="side" onclick="myFunction(this)" onclick="return false">
					  <div class="bar1"></div>
					  <div class="bar2"></div>
					  <div class="bar3"></div>
					</div>

				</li>
				
			</ul>

			<div id="side_menu">
				<a href="<?php echo $this->getBP();?>/info/info">Про нас</a>
				<a href="<?php echo $this->getBP();?>/connect/connect">Зв'язатись</a>
				<a href="#contacts">Контакти</a>

				<?php
					if(Core\Helper::getCustomer() != true):
				?>

				<a href="<?php echo $this->getBP();?>/customer/signIn">Профіль</a>

				<?php else: ?>

				<a href="<?php echo $this->getBP();?>/customer/profile">Профіль</a>

				<?php endif; ?>	

				<a class="sale_request">Продаж</a>
				<a href="<?php echo $this->getBP();?>/cart/cart">Корзина</a>
				<a href="<?php echo $this->getBP();?>/info/loan_car"></i>Кредит</a>
				<a href="<?php echo $this->getBP();?>/info/exchange_car"></i>Обмін</a>
				
				<a class="purchase_request">Викуп</a>
				
			</div>

	</nav>

</header>

<section class="second_header">
	<ul class="second_menu">
		<li class="right_li_margin sale_request"><a><i class="fas fa-coins"></i>Продаж</a></li>
		<li><a><i class="fas fa-comments-dollar"></i>Комісія</a></li>
		<li class="purchase_request"><a><i class="fas fa-donate"></i>Викуп</a></li>
		<li><a href="<?php echo $this->getBP();?>/info/exchange_car"><i class="fas fa-sync"></i>Обмін</a></li>
		<li><a href="<?php echo $this->getBP();?>/info/loan_car"><i class="fas fa-credit-card"></i>Кредит</a></li>
		
		<li class="left_li_margin"><a><i class="fas fa-hourglass-half"></i>Прокат</a></li>
		
	</ul>
</section>
