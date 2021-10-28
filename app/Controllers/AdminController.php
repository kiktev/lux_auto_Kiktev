<?php
namespace Controllers;

use Core\Controller; 
use Core\View;
use Core; 

/**
 * Class IndexController
 */
class AdminController extends Controller
{

    public function add_carAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");

       	$css = ['css/admin/addCar.css',
       			'css/admin/admin.css',];

       	foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

		$this->set('css', $css);

		if(isset($_POST['action'])){

			switch ($_POST['action']) {
			
				case 'add_car': 

					$this->addCar($this->data());
					$this->createFolder();

					$lastId = $this->getModel('Admin')->getLastItem();
					$lastId = $lastId[0]['MAX(id)'];
		
					$this->pushCarImg($lastId);

				break;
							
			}
		}
		
        $this->renderLayout();
    }

    public function buy_car_requestsAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");

       	$css = ['css/admin/car_requests.css',
       			'css/admin/admin.css',];

       	foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

		$this->set('css', $css);

		if(isset($_POST['action'])){

			switch($_POST['action']){

				case 'check_status':
					$this->saveRequest('Request');
				break;

			}

		}
		
		$this->set('car_requests',  $this->getRequests('Request'));	

        $this->renderLayout();
    }

    public function saveRequest($model){

    	$data = $this->getModel($model)->getPostValues();

    	if($data != false){

    		$id = $data['id'];

    		if($data['status'] == 0){
    			$this->getModel($model)->updateRequest($id, 1);
    		}
    		if($data['status'] == 1){
    			$this->getModel($model)->updateRequest($id, 0);
    		}
    	}
    	
    }

    public function edit_carAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");

       	$css = ['css/admin/edit_car.css'];

       	foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

		$this->set('css', $css);
		
		if (isset($_GET['id'])) {

			$id = $_GET['id'];

			$this->getCar($id);

			if (isset($_POST['action'])) {

				switch ($_POST['action']) {
				
					case 'edit_car': 
						$this->saveCar($id);	
					break;

					case 'delete_img': 
						$this->deleteImg($_POST['path']);	
					break;

					case 'rename_img':
						$this->imgRename($_POST['path']);
					break;
					
				}

			}
	
		}
		
        $this->renderLayout();
    }

     public function deleteImg($path){
    	
    	if(file_exists($path)){
    		unlink($path);
    	}
    
    }

    public function imgRename($path)
	{

		if(file_exists($path)){

			$data_img = pathinfo($path);

			$a_name = $data_img['dirname'] . '/0-' . '.' . $data_img['extension'];

			if($path != $a_name){

				$b_name = $data_img['dirname'] . '/' . time() . '.' . $data_img['extension'];

			//	$d_name = $data_img['dirname'] . '/' . time() - 10 . '.' . $data_img['extension'];

				if(file_exists($a_name)){

					$c_name = $a_name;

					rename($a_name, $b_name);
					rename($path, $c_name);

				}else{
					rename($path, $a_name);
				}
			}
		
		}
		

	}

    public function exchange_car_requestsAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");

       	$css = ['css/admin/car_requests.css',
       			'css/admin/admin.css',];

       	foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

		$this->set('css', $css);
		
		if (isset($_POST['action'])) {

			switch($_POST['action']){

				case 'check_status':
					$this->saveRequest('ExchangeRequest');
				break;

			}

		}

		$this->set('car_requests',  $this->getRequests('ExchangeRequest'));	

        $this->renderLayout();
    }

    public function loan_car_requestsAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");

       	$css = ['css/admin/car_requests.css',
       			'css/admin/admin.css',];

       	foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

		$this->set('css', $css);
		
		if (isset($_POST['action'])) {

			switch($_POST['action']){

				case 'check_status':
					$this->saveRequest('LoanRequest');
				break;

			}

		}

		$this->set('car_requests',  $this->getRequests('LoanRequest'));	

        $this->renderLayout();
    }

    public function purchase_car_requestsAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");

       	$css = ['css/admin/car_requests.css',
       			'css/admin/admin.css',];

       	foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

		$this->set('css', $css);
		
		if (isset($_POST['action'])) {

			switch($_POST['action']){

				case 'check_status':
					$this->saveRequest('PurchaseRequest');
				break;

			}

		}

		$this->set('car_requests',  $this->getRequests('PurchaseRequest'));	

        $this->renderLayout();
    }

    public function rolling_car_requestsAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");

       	$css = ['css/admin/car_requests.css',
       			'css/admin/admin.css',];

       	foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

		$this->set('css', $css);
		
		$this->set('car_requests',  $this->getRequests('RollingRequest'));	

		if (isset($_POST['action'])) {

			switch($_POST['action']){

				case 'check_status':
					$this->saveRequest('RollingRequest');
				break;

			}

		}

        $this->renderLayout();
    }

    public function sale_car_requestsAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");

       	$css = ['css/admin/car_requests.css',
       			'css/admin/admin.css'];

       	foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

		$this->set('css', $css);
		
		$this->set('car_requests',  $this->getRequests('SaleRequest'));	

		if (isset($_POST['action'])) {

			switch($_POST['action']){

				case 'check_status':
					$this->saveRequest('SaleRequest');
				break;

			}

		}
		
        $this->renderLayout();
    }

    private function getRequests($model){

    	$params = [];
    	$params['time'] = 'DESC';

		$requests = $this->getModel($model)
					->initCollection()
					->sort($params)
					->getCollection()
					->select();
		return $requests;
			
	}

    public function saveCar($id){

    	$data = $this->filterInput();

    	$car = $this->get('car_info');

    	if ($data != false) {

    		$data = $this->saveCarValidation($data,$car);


    		$this->pushCarImg($id);

    		if(count($data) != 0){

    			if (isset ($data['brand'])) {
    				$this->getModel('CarList')->updateBrand($id,$data['brand']);
    			}

    			if (isset ($data['model'])) {
    				$this->getModel('CarList')->updateModel($id,$data['model']);
    			}

    			if (isset ($data['car_state'])) {
    				$this->getModel('CarList')->updateCarState($id,$data['car_state']);
    			}

    			if (isset ($data['year'])) {
    				$this->getModel('CarList')->updateYear($id,$data['year']);
    			}

    			if (isset ($data['run'])) {
    				$this->getModel('CarList')->updateRun($id,$data['run']);
    			}

    			if (isset ($data['color'])) {
    				$this->getModel('CarList')->updateColor($id,$data['color']);
    			}

    			if (isset ($data['price'])) {
    				$data['price'] = str_replace(" ", '', $data['price']);
    				$this->getModel('CarList')->updatePrice($id,$data['price']);
    			}

    			if (isset ($data['car_type'])) {
    				$this->getModel('CarList')->updateCarType($id,$data['car_type']);	
    			}

    			if (isset ($data['body_type'])) {
    				$this->getModel('CarList')->updateBodyType($id,$data['body_type']);
    			}

    			if (isset ($data['fuel_type'])) {
    				$this->getModel('CarList')->updateFuelType($id,$data['fuel_type']);
    			}

    			if (isset ($data['transmission'])) {
    				$this->getModel('CarList')->updateTransmission($id,$data['transmission']);
    			}

    			if (isset ($data['drive'])) {
    				$this->getModel('CarList')->updateDrive($id,$data['drive']);
    			}

    			if (isset ($data['volume'])) {
    				$this->getModel('CarList')->updateVolume($id,$data['volume']);
    			}

    			if (isset ($data['number_of_seats'])) {
    				$this->getModel('CarList')->updateNumberOfSeats($id,$data['number_of_seats']);
    			}

    			if (isset ($data['number_of_doors'])) {
    				$this->getModel('CarList')->updateNumberOfDoors($id,$data['number_of_doors']);
    			}

    			if (isset ($data['description'])) {
    				$this->getModel('CarList')->updateDescription($id,$data['description']);
    			}

    			 Core\Helper::redirect('/admin/edit_car?id=' . $id);
    		}
    	}

    }

    public function saveCarValidation($data,$car){
    	
    	foreach($data as $key=>$value){

    		foreach ($car as $k=>$v) { 
    			if($value == $v){
    				unset($data[$key]);
    			}
    		}

    	}

    	unset($data['action']);

    	return $data;

    }

    private function getCar($id){

		$carInfo = $this->getModel('CarList')->getItem($id);

		if($carInfo != null){
			$this->set('car_info',$carInfo);
		}else{
			$this->set('car_info',array());
			Core\Helper::redirect('/error/error404');
		}
	}

	private function data()
	{
		$data = $this->getModel('Admin')->getPostValues();
		
		foreach($data as $key=>$val){
			
			if($val == ''){
				$data[$key] = 'null';
			}

		}

		return $data;
	}
	
	private function createFolder() {
		$lastId = $this->getModel('Admin')->getLastItem();
		$lastId = $lastId[0]['MAX(id)'];
		mkdir("data/car_img/$lastId");	
	}
	
	private function addCar($data)
	{
		$this->getModel('Admin')->addCar($data);
	}
	
	private function pushCarImg($id) {
		
		$myfiles = $this->incoming_files();
		
		$uploads_dir = "data/car_img/$id/";
		
		foreach ($myfiles as $key => $error) {
			$tmp_name = $myfiles[$key]["tmp_name"];
			$name = $myfiles[$key]["name"];

			move_uploaded_file($tmp_name, "$uploads_dir/$name");	
		}	
	}
	
	private function incoming_files() {
		
		$files = $_FILES;
		$files2 = [];
		
		foreach ($files as $input => $infoArr) {
			$filesByInput = [];
			foreach ($infoArr as $key => $valueArr) {
				if (is_array($valueArr)) { // file input "multiple"
					foreach($valueArr as $i=>$value) {
						$filesByInput[$i][$key] = $value;
					}
				}
				else { // -> string, normal file input
					$filesByInput[] = $infoArr;
					break;
				}
			}
			$files2 = array_merge($files2,$filesByInput);
		}
		
		$files3 = [];

		foreach($files2 as $file) { // let's filter empty & errors
			if (!$file['error']) $files3[] = $file;
			
		}

		return $files3;
	}

	public function car_deleteAction()
    {
    	if(Core\Helper::isAdmin() == true){

	    		if(isset($_GET['id'])){

				$id = $_GET['id'];

				$this->getModel('CarList')->deleteItem($id); 

				$dir = $_SERVER['DOCUMENT_ROOT'] . '/' . 'data/car_img' . '/' . $id;

				array_map('unlink', glob("$dir/*.*"));
				
				rmdir($dir);

	      		Core\Helper::redirect('/index/index');

			}  
    	}else{
    		Core\Helper::redirect('/index/index');
    	}
       
    }


    public function sale_car_request_deleteAction()
    {
       if(isset($_GET['id'])){

			$id = $_GET['id'];

			$this->getModel('SaleRequest')->deleteItem($id); 
      		Core\Helper::redirect('/admin/sale_car_requests');
		}   
    }

    public function  rolling_car_request_deleteAction()
    {
       if(isset($_GET['id'])){

			$id = $_GET['id'];

			$this->getModel('RollingRequest')->deleteItem($id); 
      		Core\Helper::redirect('/admin/rolling_car_requests');
		}   
    }

    public function  buy_car_request_deleteAction()
    {
       if(isset($_GET['id'])){

			$id = $_GET['id'];

			$this->getModel('Request')->deleteItem($id); 
      		Core\Helper::redirect('/admin/buy_car_requests');
		}   
    }

    public function  loan_car_request_deleteAction()
    {
       if(isset($_GET['id'])){

			$id = $_GET['id'];

			$this->getModel('LoanRequest')->deleteItem($id); 
      		Core\Helper::redirect('/admin/loan_car_requests');
		}   
    }

    public function  purchase_car_request_deleteAction()
    {
       if(isset($_GET['id'])){

			$id = $_GET['id'];

			$this->getModel('PurchaseRequest')->deleteItem($id); 
      		Core\Helper::redirect('/admin/purchase_car_requests');
		}   
    }

    public function  exchange_car_request_deleteAction()
    {
       if(isset($_GET['id'])){

			$id = $_GET['id'];

			$this->getModel('ExchangeRequest')->deleteItem($id); 
      		Core\Helper::redirect('/admin/exchange_car_requests');
		}   
    }

}