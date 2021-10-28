<?php
namespace Models;

use Core\Model;

/**
 * Class Product
 */
class SaleRequest extends Model
{

    /**
     * Product constructor.
     */
    function __construct()
    {
        $this->table_name = "sale_car_requests";
        $this->id_column = "id";
    }
	
	public function addRequest($values) {
		
		$params = [];
		
		foreach($values as $key=>$val){
			
				$params[":$key"] =  "$val";
			
		}
		
		$sql = "INSERT INTO `$this->table_name` (name, phone, email) VALUES (:name, :phone, :email);";
											
		$this->initQuery($sql,$params);
		
		return true;
	}

}