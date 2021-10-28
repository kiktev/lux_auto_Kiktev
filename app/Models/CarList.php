<?php
namespace Models;

use Core\Model;

/**
 * Class Product
 */
class CarList extends Model
{

    /**
     * Product constructor.
     */
    function __construct()
    {
        $this->table_name = "cars";
        $this->id_column = "id";
    }
	
	public function filterCar($filter_params)
	{
		$min_price = $filter_params['min_price'];
		$max_price = $filter_params['max_price'];
		$min_run = $filter_params['min_run'];
		$max_run = $filter_params['max_run'];
		$min_year = $filter_params['min_year'];
		$max_year = $filter_params['max_year'];
		$brand = $filter_params['brand'];
		$model =  $filter_params['model'];	
		$body_type = $filter_params['body_type'];
		$fuel_type = $filter_params['fuel_type'];
		$transmission = $filter_params['transmission'];
		$drive = $filter_params['drive'];
		$car_state = $filter_params['car_state'];
		$car_type = $filter_params['car_type'];
		
		$this->params[':min_price'] = $min_price;
		$this->params[':max_price'] = $max_price;
		$this->params[':min_run'] = $min_run;
		$this->params[':max_run'] = $max_run;
		$this->params[':min_year'] = $min_year;
		$this->params[':max_year'] = $max_year;
		
		$sql = " WHERE (price >= :min_price) AND
					   (price <= :max_price) AND
					   (run >= :min_run) AND
					   (run <= :max_run) AND
					   (year >= :min_year) AND
					   (year <= :max_year)";
					   
		if($brand != "all"){
			$this->params[':brand'] = $brand;
			$sql .= " AND (brand = :brand)";
		}
		
		if($model != "all"){
			$this->params[':model'] = $model;
			$sql .= " AND (model = :model)";
		}
		
		if($body_type != "all"){
			$this->params[':body_type'] = $body_type;
			$sql .= " AND (body_type = :body_type)";
		}
		
		if($fuel_type != "all"){
			$this->params[':fuel_type'] = $fuel_type;
			$sql .= " AND (fuel_type = :fuel_type)";
		}
		
		if($transmission != "all"){
			$this->params[':transmission'] = $transmission;
			$sql .= " AND (transmission = :transmission)";
		}
		
		if($drive != "all"){
			$this->params[':drive'] = $drive;
			$sql .= " AND (drive = :drive)";
		}
			
		if($car_state != "all"){
			$this->params[':car_state'] = $car_state;
			$sql .= " AND (car_state = :car_state)";
		}
		
		if($car_type != "lehkova"){
			$this->params[':car_type'] = $car_type;
			$sql .= " AND (car_type = :car_type)";
		}
		
		$this->sql .= $sql;
		
		return $this;
	}
	
	public function getMaxPrice()
	{
		$params = [];
		$sql = "SELECT MAX(price) FROM $this->table_name;";
     
		$result = $this->initQuery($sql,$params);
		if (isset($result)) {
			return $result[0]['MAX(price)'];
		}else{
			return false;
		}	
		
	}
	
	public function getMaxRun()
	{
		$params = [];
		$sql = "SELECT MAX(run) FROM $this->table_name;";
     
		$result = $this->initQuery($sql,$params);
		if (isset($result)) {
			return $result[0]['MAX(run)'];
		}else{
			return false;
		}	
		
	}
	
	public function getMinYear()
	{
		$params = [];
		$sql = "SELECT MIN(year) FROM $this->table_name;";
     
		$result = $this->initQuery($sql,$params);
		if (isset($result)) {
			return $result[0]['MIN(year)'];
		}else{
			return false;
		}	
	}
	
	public function getMaxYear()
	{
		$params = [];
		$sql = "SELECT MAX(year) FROM $this->table_name;";
     
		$result = $this->initQuery($sql,$params);
		if (isset($result)) {
			return $result[0]['MAX(year)'];
		}else{
			return false;
		}	
	}
	
	public function getAllYears()
	{
		$params = [];
		$sql = "SELECT DISTINCT year FROM $this->table_name;";
     
		$result = $this->initQuery($sql,$params);
		if (isset($result)) {
			return $result;
		}else{
			return false;
		}	
	}
	
		
	public function getAllBrands()
	{
		$params = [];
		$sql = "SELECT DISTINCT brand FROM $this->table_name;";
     
		$result = $this->initQuery($sql,$params);
		if (isset($result)) {
			return $result;
		}else{
			return false;
		}	
	}
	
	public function getAllModels()
	{
		$params = [];
		$sql = "SELECT DISTINCT model FROM $this->table_name;";
     
		$result = $this->initQuery($sql,$params);
		if (isset($result)) {
			return $result;
		}else{
			return false;
		}	
	}

	public function updateBrand($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `brand` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}
	
	public function updateModel($id, $item){
		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `model` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updateCarState($id, $item){
		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `car_state` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updateYear($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `year` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;

	}

	public function updateRun($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `run` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;

	}

	public function updateColor($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `color` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updatePrice($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `price` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;

	}

	public function updateCarType($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `car_type` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;

	}

	public function updateBodyType($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `body_type` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;

	}

	public function updateFuelType($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `fuel_type` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updateTransmission($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `transmission` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updateDrive($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `drive` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updateVolume($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `volume` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updateNumberOfSeats($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `number_of_seats` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updateNumberOfDoors($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `number_of_doors` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updatePower($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `power` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updateDescription($id, $item){

		$params = [];
		
		$params[':id'] = $id;
		$params[':item'] = $item;

		$sql = "UPDATE $this->table_name SET `description` = :item WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}


		
}