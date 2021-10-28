<?php
namespace Core;

/**
 * Class Model
 */
class Model implements DbModelInterface
{
    /**
     * @var
     */
    protected $table_name;
    /**
     * @var
     */
    protected $id_column;
    /**
     * @var array
     */
    protected $columns = [];
    /**
     * @var
     */
    protected $collection;
    /**
     * @var
     */
    protected $sql;
    /**
     * @var array
     */
    protected $params = [];

    /**
     * @return $this
     */
    public function initCollection()
    {
        $columns = implode(',',$this->getColumns());
        $this->sql = "select $columns from " . $this->table_name ;
        return $this;
    }

    /**
     * @return array
     */
    public function getColumns()
    {
        $db = new DB();
        $sql = "show columns from  $this->table_name;";
        $results = $db->query($sql);
        foreach($results as $result) {
            array_push($this->columns,$result['Field']);
        }
        return $this->columns;
    }


    /**
     * @param $params
     * @return $this
     */
    public function sort($params)
    {
        $sortBy = '';
		$sortType = '';
		
		foreach ($params as $key=>$value) {		
		
			$sortBy = $key;
			$sortType = $value;	

		}
		
		$this->sql .= " ORDER BY $sortBy $sortType ";
		
        return $this;
    }
	
	public function initQuery($sql, $params){
		
		$db = new DB();	
     
        return $db->query($sql, $params);
		
	}
	
	public function getCustomer($email) {
		
		$sql = "select * from $this->table_name where email = ?;";
        $db = new DB();
        $params = array($email);
        return $db->query($sql, $params);
		
	}

    /**
     * @param $params
     */
    public function filter($params)
    {
       /*
              TODO
              return $this;
        */
        
    }

    /**
     * @return $this
     */
    public function getCollection()
    {
        $db = new DB();
        $this->sql .= ";";
        $this->collection = $db->query($this->sql, $this->params);
        return $this;
    }

    /**
     * @return mixed
     */
    public function select()
    {
		
        return $this->collection;
    }

    /**
     * @return null
     */
    public function selectFirst()
    {
        return isset($this->collection[0]) ? $this->collection[0] : null;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getItem($id)
    {
        $sql = "select * from $this->table_name where $this->id_column = ?;";
        $db = new DB();
        $params = array($id);
       
		if($db->query($sql, $params) != false){
			return $db->query($sql, $params)[0];
		}
    }

    /**
     * @return array
     */
    public function getPostValues()
    {
      
		$data = [];
		
		if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST'){
			
			foreach ($_POST as $key=>$value) {
				
				$filter = strip_tags($value);
					
				$data[$key] = $filter;
							
			}
			
			if(isset($data['action'])){
				unset($data['action']);
			}
			if(isset($data['file'])){
				unset($data['file']);
			}
			
			return $data;
			
		}else{
			return false;
		}
    }
	
	public function getLastItem()
	{
		
		$sql = "SELECT MAX(id) FROM $this->table_name;";
        $db = new DB();
  
        $result = $db->query($sql);
		if (isset($result)) {
			return $result;
		}else{
			return false;
		}
	}

    public function deleteItem($id)
    {
        $sql = "DELETE FROM $this->table_name WHERE id = ?";
        $params = array($id);
        $db = new DB();
        return $db->query($sql,$params);
    }

    public function updateRequest($id, $item){

        $params = [];
        $db = new DB();
        $params[':id'] = $id;
        $params[':item'] = $item;

        $sql = "UPDATE $this->table_name SET `status` = :item WHERE id = :id;";
        
        return $db->query($sql,$params);

    }
	

    public function getTableName(): string
    {
        return $this->table_name;
    }

    public function getPrimaryKeyName(): string
    {
        return $this->id_column;
    }

    public function getId()
    {
        return 1;
    }
}
