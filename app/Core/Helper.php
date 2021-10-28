<?php 
namespace Core;
error_reporting(E_ALL);
class Helper
{
	
	public static function redirect($path){
		$server_host = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
        $url = $server_host . route::getBP() . $path;
		header("Location: $url");
	}
	


	public static function getCustomer()
  	{
        if (!empty($_SESSION['id'])) {
			
			$id = $_SESSION['id']; 
			return Controller::getModel('Customer')->getItem($id);
			
        } else {
            return false;
        }

    }
	
	public static function isAdmin() {
		
		
		if (Helper::getCustomer() != false) {
			$customer = Helper::getCustomer();
			
			if($customer['admin_role'] == 1) {
				
			return true;
			
			}else{
				return false;
			}
		}else{
			return false;
		}
		
	}
}