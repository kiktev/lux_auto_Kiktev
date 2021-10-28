<?php
namespace Models;

use Core\Model;

/**
 * Class Product
 */
class ExchangeRequest extends Model
{

    /**
     * Product constructor.
     */
    function __construct()
    {
        $this->table_name = "exchange_car_requests";
        $this->id_column = "id";
    }
	
	public function addRequest($values) {
		
		$params = [];
		
		foreach($values as $key=>$val){
			
				$params[":$key"] =  "$val";
			
		}
		
		$sql = "INSERT INTO `$this->table_name` (name, phone, email, car_id) VALUES (:name, :phone, :email,:car_id);";
											
		$this->initQuery($sql,$params);
		
		return true;
	}

}