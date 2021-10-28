<?php
	if(Core\Helper::isAdmin() == true):
?>
<?php
	
	$requests = $this->get('car_requests');

?>
<section class="requests_section">

	<div class="admin_panel">
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/add_car">Додавання автомобіля</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/buy_car_requests">Заявки про купівлю авто</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/sale_car_requests">Заявки про продаж авто</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/purchase_car_requests">Заявки про викуп авто</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/exchange_car_requests">Заявки про обмін авто</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/rolling_car_requests">Заявки про прокат авто</a>
		<a class="main_admin_href" href="<?php echo $this->getBP();?>/admin/loan_car_requests">Заявки на авто в кредит</a>
	</div>

	<form class="requests_form">
		<span>Заявки про обмін авто</span>
		<div class="table_scroll">
			<table class="table">
				<thead>
					<tr>
						<th>Замовлення</th>
						<th>Ім'я</th>
						<th>Телефон</th>
						<th>Email</th>
						<th>Час додавання</th>
						<th>ID машини</th>
						<th>Статус</th>
					</tr>
				<thead>
				<tbody>
					<?php foreach($requests as $key=>$values){
						$car_id = $requests[$key]['car_id'];
					?>
					<tr>
						<td data-label="Замовлення"><?= $requests[$key]['id'] ?></td>
						<td data-label="Ім'я"><?= $requests[$key]['name'] ?></td>
						<td data-label="Телефон"><?= $requests[$key]['phone'] ?></td>
						<td data-label="Email"><?= $requests[$key]['email'] ?></td>
						<td data-label="Час додавання"><?= $requests[$key]['time'] ?></td>
						<td data-label="ID машини"><?= \Core\Url::getLink("/carInfo/carInfo", "$car_id", array('id'=>$car_id)); ?></td>
						<td data-label="Статус"><div><a onclick="sendAjax('/admin/exchange_car_requests', $(this),<?= $requests[$key]['id'] ?>)"data-id="<?= $requests[$key]['id'] ?>" data-status="<?= $requests[$key]['status'] ?>" class="check_request"><i class="fas fa-check"></i></a><?= \Core\Url::getLink("/admin/exchange_car_request_delete", '<i class="far fa-trash-alt"></i>', array('id'=>$requests[$key]['id'])); ?></div></td>
					</tr>
					<?php } ?>	
				</tbody>
			</table>
		</div>
	</form>

</section>


<script src="<?php echo $this->getBP(); ?>/js/check_request.js?v=<?php echo filectime($this->getBP() . "js/check_request.js") ?>"></script>

<?php else: 

	Core\Helper::redirect('/index/index');

?>

<?php endif; ?>	