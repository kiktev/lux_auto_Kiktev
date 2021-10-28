<?php

namespace Controllers;

use Core\Controller; 
use Core\App;
/**
 * Class IndexController
 */

class IndexController extends Controller
{
	
	protected $filter_params = [];
	
    public function indexAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");
		
        $css = ['css/index.css', 'css/custom_select.css'];

        foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

        $this->set('css', $css);

		$max_price = $this->getModel('CarList')->getMaxPrice();
		$max_run = $this->getModel('CarList')->getMaxRun();
		$min_year =  $this->getModel('CarList')->getMinYear();
		$max_year = $this->getModel('CarList')->getMaxYear();
		$all_years = $this->getModel('CarList')->getAllYears();	
		$all_brands = $this->getModel('CarList')->getAllBrands();	
		$all_models = $this->getModel('CarList')->getAllModels();
		
		$this->filter_params['min_price'] = 0;
		$this->filter_params['max_price'] = $max_price;
		$this->filter_params['min_run'] = 0;
		$this->filter_params['max_run'] = $max_run;
		$this->filter_params['min_year'] = $min_year;
		$this->filter_params['max_year'] = $max_year;
		$this->filter_params['brand'] = "all";
		$this->filter_params['model'] = "all";
		$this->filter_params['body_type'] = "all";
		$this->filter_params['fuel_type'] = "all";
		$this->filter_params['transmission'] = "all";
		$this->filter_params['drive'] = "all";
		$this->filter_params['car_state'] = "all";
		$this->filter_params['car_type'] = "lehkova";
		
		$this->set('all_years', $all_years);
		$this->set('min_year', $min_year);
		$this->set('max_year', $max_year);
		$this->set('max_price',$max_price);
		$this->set('max_run',$max_run);
		$this->set('all_brands',$all_brands);
		$this->set('all_models',$all_models);

		if (isset($_GET['car_state'])) {

			switch($_GET['car_state']){

				case 'new_car':
					$this->filter_params['car_state'] = "new_car";
				break;

				case 'used_car':
					$this->filter_params['car_state'] = "used_car";
				break;

			}
		}

		if (isset($_POST['action'])) {

			switch ($_POST['action']) {
				
				case 'signIn':
					$this->signIn();
				break;
				
				case 'signUp':
					$this->signUp();
				break;
				
				case 'filter':
					$this->findCar();
				break;

				case 'cart_submit':
					$this->addCart();
				break;
				
			}
		}
		
		$this->getCarList();

        $this->renderLayout();
    }

	public function addCart() {

		$data = $this->filterInput();


		if (isset($_COOKIE['cart'])) {
			$carts_id = json_decode($_COOKIE['cart'], true);
			$carts_id[] = $data['id'];
			setcookie('cart', '', time()-86400, '/');
			setcookie('cart', json_encode($carts_id), time()+86400, '/');
		}else{
			$id = [];
			$id[] = $data['id'];
			setcookie('cart', json_encode($id), time()+86400, '/');
		}
			
	}

	
	private function findCar()
	{			
		$this->filter_params['min_price'] = $_POST['min_price'];
		$this->filter_params['max_price'] = str_replace(" ", '', $_POST['max_price']);	
		$this->filter_params['min_run'] =  $_POST['min_run'];
		$this->filter_params['max_run'] = str_replace(" ", '', $_POST['max_run']);
		$this->filter_params['min_year'] =  $_POST['min_year'];
		$this->filter_params['max_year'] =  $_POST['max_year'];
		$this->filter_params['brand'] = $_POST['brand'];
		//$this->filter_params['model'] = $_POST['model'];
		$this->filter_params['body_type'] = $_POST['body_type'];
		$this->filter_params['fuel_type'] = $_POST['fuel_type'];
		$this->filter_params['transmission'] = $_POST['transmission'];
		$this->filter_params['drive'] = $_POST['drive'];
		$this->filter_params['car_state'] = $_POST['car_state'];
		$this->filter_params['car_type'] = $_POST['car_type'];
	}
	
	public function getCarList()
	{
		$array = [];
		
		$filter_params = $this->filter_params;
		
		$array = $this->getModel('CarList')
			->initCollection()
			->filterCar($filter_params)
			->sort($this->getSortParams())
			->getCollection()
			->select();

		$this->set('car_list', $array);
		
		return $array;
	}
	
	public function getSortParams()
    {
        $params = [];
		
		if (isset($_POST['sort']) != 'default') {
			if(isset($_COOKIE['cookie_params'])) {			
				$cookie_params = unserialize($_COOKIE['cookie_params'], ["allowed_classes" => false]);
				
				foreach($cookie_params as $key => $val) {			
					$selected = "$key".'_'."$val";
				}
				
				$this->set('selected_item', $selected);
				return $cookie_params;				
			}
		}
		
		$sort= filter_input(INPUT_POST, 'sort');
			
		switch ($sort) {
			
			case 'add_time_DESC':
			$params['add_time'] = 'DESC';
			$this->set('selected_item', 'add_time_DESC');
			break;
			
			case 'price_DESC':
			$params['price'] = 'DESC';
			$this->set('selected_item', 'price_DESC');
			break;
			
			case 'price_ASC':
			$params['price'] = 'ASC';
			$this->set('selected_item', 'price_ASC');
			break;
			
			default:		
			$params['add_time'] = 'DESC';
			$this->set('selected_item', 'add_time_DESC');
					
		}
		
		setcookie('cookie_params', '', time()-86400);
        setcookie('cookie_params', serialize($params), time()+86400);
		
        return $params;
		
    }
}