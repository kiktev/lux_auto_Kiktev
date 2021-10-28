<?php
namespace Models;

use Core\Model;

/**
 * Class Product
 */
class Admin extends Model
{

    /**
     * Product constructor.
     */
    function __construct()
    {
        $this->table_name = "cars";
        $this->id_column = "id";
    }
	
	public function addCar ($values) {
		
		$params = [];
		
		if(isset($values['price'])){
			$values['price'] = str_replace(" ", '', $values['price']);
		}

		foreach($values as $key=>$val){
			
				$params[":$key"] =  "$val";
		
		}
	
		$sql = "INSERT INTO `$this->table_name` (brand,
												model,
												car_state,
												year,
												run,
												color,
												price,
												car_type,
												body_type, 
												fuel_type,
												transmission, 
												drive,
												volume, 
												number_of_seats, 
												number_of_doors, 
											  
												description) 
												VALUES (
												:brand, 
												:model,
												:car_state,
												:year,
												:run,
												:color,
												:price,
												:car_type,
												:body_type,
												:fuel_type, 
												:transmission, 
												:drive,
												:volume, 
												:number_of_seats, 
												:number_of_doors, 
											  
												:description);";
											
		$this->initQuery($sql,$params);
		
		return true;
	}
	
	
   
}