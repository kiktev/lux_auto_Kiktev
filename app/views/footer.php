
<div class="main_hrefs">
	<div class="footer_logo_block">
		<div class="footer_logo">
			<a href="<?php echo $this->getBP();?>/index/index"><img src="<?php echo $this->getBP(); ?>/images/logo.png"></img></a>
		</div>
		
		<div class="footer_maps">
			<span>м.Мукачево, вул. Томаша Масарика 54</span>
			<a href="https://goo.gl/maps/YL36729xpEVSHb2m8"><i class="fas fa-map-marked-alt"></i><span>Маршут проїзду</span></a>
		</div>
		<div class="footer_pay">
			<span>Приймаємо до оплати</span>
			<div>
				<a><i class="fab fa-cc-visa"></i></a>
				<a><i class="fab fa-cc-mastercard"></i></a>
			</div>
		</div>
		<div class="footer_rights">
			<span><i class="far fa-copyright"></i><?= date('Y')?> "LuxAuto". Всі права захищені</span>
		</div>
	</div>
	<div class="main_hrefs_block unhide_main_hrefs">
		<div class="main_hrefs_href">
			<div class="href_header">У нас можна</div>
			<a href="<?php echo $this->getBP();?>/index/index">Придбати авто</a>
			<a class="sale_request">Продати авто</a>
			<a href="<?php echo $this->getBP();?>/info/exchange_car">Обміняти авто</a>
			<a>Взяти авто на прокат</a>
			<a href="<?php echo $this->getBP();?>/info/loan_car">Оформити кредит</a>
		</div>
	</div>
	<div class="main_hrefs_block unhide_main_hrefs">
		<div class="main_hrefs_href">
			<div class="href_header">Клієнтам</div>
			<a href="<?php echo $this->getBP();?>/customer/signIn">Вхід до кабінету</a>
			<a href="<?php echo $this->getBP();?>/connect/connect">Зв'язатись</a>
			<a href="<?php echo $this->getBP();?>/info/info">Довідка</a>	
			<a href="<?php echo $this->getBP();?>/cart/cart">Корзина</a>
			<div class="href_social_header">Ми в соцмережах</div>
			<div class="href_social">
				<a href="https://www.instagram.com/luxauto.mukachevo/"><i class="fab fa-instagram"></i></a>
				<a href="https://www.facebook.com/LuxAutoMukachevo/"><i class="fab fa-facebook"></i></a>
				<a href="https://www.youtube.com/channel/UC_gGq07gSp67wgxHgSZJP0g/featured"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
		
	</div>
	
	<div class="hide_main_hrefs">
	
		<div class="main_hrefs_block">
			<div class="main_hrefs_href">
				<div class="href_header">У нас можна</div>
				<a href="<?php echo $this->getBP();?>/index/index">Придбати авто</a>
				<a class="sale_request">Продати авто</a>
				<a href="<?php echo $this->getBP();?>/info/exchange_car">Обміняти авто</a>
				<a>Взяти авто на прокат</a>
				<a href="<?php echo $this->getBP();?>/info/loan_car">Оформити кредит</a>
			</div>
		</div>
		<div class="main_hrefs_block">
			<div class="main_hrefs_href">
				<div class="href_header">Клієнтам</div>
				<a href="<?php echo $this->getBP();?>/customer/signIn">Вхід до кабінету</a>
				<a href="<?php echo $this->getBP();?>/connect/connect">Зв'язатись</a>
				<a href="<?php echo $this->getBP();?>/info/info">Довідка</a>	
				<a href="<?php echo $this->getBP();?>/cart/cart">Корзина</a>
				<div class="href_social_header">Ми в соцмережах</div>
				<div class="href_social">
					<a href="https://www.instagram.com/luxauto.mukachevo/"><i class="fab fa-instagram"></i></a>
					<a href="https://www.facebook.com/LuxAutoMukachevo/"><i class="fab fa-facebook"></i></a>
					<a href="https://www.youtube.com/channel/UC_gGq07gSp67wgxHgSZJP0g/featured"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
			
		</div>
		
	</div>
	
	<div class="footer_contacts">
		<div class="main_hrefs_href">
			<div class="href_header">Контактна інформація</div>
			<div class="footer_double_block">
				<div>
					<a href="tel:066-188-97-87"><img src="<?php echo $this->getBP(); ?>/images/footer/vodafone-icon.png"></img>066-188-97-87</a>
					<a id="contacts" href="tel:096-716-87-70"><img src="<?php echo $this->getBP(); ?>/images/footer/kyivstar-icon.png"></img>096-716-87-70</a>
					<!--
					<a href=""><img src="<?php echo $this->getBP(); ?>/images/footer/lifecell-icon.png"></img>093 503-54-32</a>
					-->
					<!--
					<a href=""><i class="fab fa-viber"></i>066-188-97-87</a>
					
					<a href=""><i class="fab fa-whatsapp"></i>096-716-87-70</a>
					
					<a href=""><i class="fab fa-telegram"></i>066-188-97-87</a>
					-->
					<a  href = "mailto: <?=ADMIN_EMAIL?>"><i class="fas fa-envelope"></i><?=ADMIN_EMAIL?></a>

					<!--
					<a href=""><i class="fab fa-skype"></i>Motolux_online</a>
					-->
					
				</div>
				<div>
					
					<span class="footer_schedule">Графік роботи:</span>
					<span>Пн-Пт: 09:00–18:00</span>
					<span>Сб: 09:00–14:00</span>
					<span >Нд: вихідний</span>
				</div>
			</div>
			<div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo $this->getBP(); ?>/js/requests.js?v=<?php echo filectime($this->getBP() . "js/requests.js") ?>"></script>

	<script>
			function myFunction(x) {
				x.classList.toggle("change");

				if (x.classList.contains("change")) {

				   document.body.style.overflow = 'hidden';
				   $("#side_menu").css('width', '100%');

				}else{

					document.body.style.overflow = 'visible';
				   $("#side_menu").css('width', '0');

				}
				
			}	
			 	
	</script>

	<script>

		$('a[href^="#"').on('click', function() {

			myFunction(document.getElementById('side'));

		    let href = $(this).attr('href');

		    $('html, body').animate({
		        scrollTop: $(href).offset().top
		    });
		    return false;
		});

	</script>