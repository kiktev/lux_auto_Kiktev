<?php

namespace Controllers;

use Core\Controller; 
use Core\View;
use Core; 

/**
 * 
 */

class CarInfoController extends Controller
{

    public function carInfoAction()
    {

    	$this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");

    	$css = ['css/carInfo.css'];

    	foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }
    	
        $this->set('css', $css);

		$this->set('car_info',array());
		
		if(isset($_GET['id'])){

			$id = $_GET['id'];
			$this->getCar($id);

		}
		
		if(isset($_POST['action']))
		{
			switch ($_POST['action'])
			{
				case 'request':
				$this->addRequest($this->request());
				break;
				
				case 'signIn':
					$this->signIn();
				break;
				
				case 'signUp':
					$this->signUp();
				break;
			}
		}
		
        $this->renderLayout();
    }	

	private function getCar($id) {

		$carInfo = $this->getModel('CarList')->getItem($id);

		if($carInfo != null){
			$this->set('car_info',$carInfo);
		}else{
			$this->set('car_info',array());
			Core\Helper::redirect('/error/error404');
		}
		
	}
	
	private function request() {
		$data = $this->getModel('Request')->getPostValues();
		return $data;
	}
	
	private function addRequest($data) {
		$this->getModel('Request')->addRequest($data);
	}
}