<?php
namespace Models;

use Core\Model;

/**
 * Class Product
 */
class Customer extends Model
{

    /**
     * Product constructor.
     */
    function __construct()
    {
        $this->table_name = "users";
        $this->id_column = "id";
    }
	
	public function newCustomer($data){
		
		$params = [];
		
		foreach($data as $key => $val){
			$params[":$key"] = $val;
		}
		
		$sql = "INSERT INTO `$this->table_name` (name,surname,email,password) VALUES (:name, :surname,:email,:password);";

		$this->initQuery($sql,$params);
	}

	public function getCustomerId($email){

		$params = [];
		
		$params[":email"] =$email;

		$sql = "select id from $this->table_name where email = :email;";

		$result = $this->initQuery($sql,$params);
		if($result != false){
			return $result[0]['id'];
		}else{
			return false;
		}

	}

	public function updateCustomerName($id,$name){

		$params = [];
		
		$params[':id'] = $id;
		$params[':name'] = $name;

		$sql = "UPDATE $this->table_name SET `name` = :name WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updateCustomerSurname($id,$surname){

		$params = [];
		
		$params[':id'] = $id;
		$params[':surname'] = $surname;

		$sql = "UPDATE $this->table_name SET `surname` = :surname WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updateCustomerEmail($id,$email){

		$params = [];
		
		$params[':id'] = $id;
		$params[':email'] = $email;

		$sql = "UPDATE $this->table_name SET `email` = :email WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function remUpdateCustomerPassword($email, $password){

		$params = [];
		
		$params[':email'] = $email;
		$params[':password'] = $password;

		$sql = "UPDATE $this->table_name SET `password` = :password WHERE email = :email;";
		
		$this->initQuery($sql,$params);
		
		return true;
	}

	public function updateCustomerPassword($id,$password){

		$params = [];
		
		$params[':id'] = $id;
		$params[':password'] = $password;

		$sql = "UPDATE $this->table_name SET `password` = :password WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
		
	}

	public function updateCustomerTelephone($id,$telephone){

		$params = [];
		
		$params[':id'] = $id;
		$params[':telephone'] = $telephone;

		$sql = "UPDATE $this->table_name SET `telephone` = :telephone WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
		
	}

	public function updateCustomerAdminRole($id, $admin_role){

		$params = [];
		
		$params[':id'] = $id;
		$params[':admin_role'] = $role;

		$sql = "UPDATE $this->table_name SET `admin_role` = :admin_role WHERE id = :id;";
		
		$this->initQuery($sql,$params);
		
		return true;
		
	}


}