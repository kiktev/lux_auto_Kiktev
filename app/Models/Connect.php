<?php
namespace Models;

use Core\Model;

/**
 * Class Product
 */
class Connect extends Model
{

    /**
     * Product constructor.
     */
    function __construct()
    {
        $this->table_name = "messages";
        $this->id_column = "id";
    }

    public function newMessage($data){
        
        $params = [];
        
        foreach($data as $key => $val){
            $params[":$key"] = $val;
        }
        
        $sql = "INSERT INTO `$this->table_name` (name,surname,telephone,email,message) VALUES (:name,:surname,:telephone,:email,:message);";

        $this->initQuery($sql,$params);
    }
	
	
   
}