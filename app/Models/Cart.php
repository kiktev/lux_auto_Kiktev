<?php
namespace Models;

use Core\Model;

/**
 * Class Product
 */
class Cart extends Model
{

    /**
     * Product constructor.
     */
    function __construct()
    {
        $this->table_name = "cars";
        $this->id_column = "id";
    }

    public function getCartList($id){

        $params = [];

        $sql = "select * from $this->table_name where $this->id_column in (";

        foreach($id as $key=>$val){
            $sql .= "'" ."$val" . "',";
        }

        $sql = rtrim($sql,',');

        $sql .= ');';      

        return $this->initQuery($sql,$params);

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