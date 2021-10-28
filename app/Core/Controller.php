<?php
namespace Core;

/**
 * Class Controller
 */
class Controller
{
    protected $data = [];

    public function __construct()
    {
        $this->set('layoutPath', App::getLayoutDir() . DS. 'layout.php');
        $this->set('menuPath', App::getViewDir() . DS. 'menu.php');
        $this->set('requestsPath', App::getViewDir() . DS. 'requests.php');
		$this->set('footerPath', App::getViewDir() . DS. 'footer.php');
    }

    protected function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    protected function get($key)
    {
        return $this->data[$key];
    }

    public function renderLayout()
    {
        $this->set('menuCollection',$this->getMenuCollection());

        $menu =  new View($this->data, $this->get('menuPath'));
		
        $requests = new View($this->data, $this->get('requestsPath'));

        $content = new View($this->data);
		
		$footer = new View($this->data, $this->get('footerPath'));
		
        $this->set('menu', $menu);
        $this->set('requests', $requests);
        $this->set('content', $content);
		$this->set('footer', $footer);

        Request::issetRequest();

        $view = new View($this->data, $this->get('layoutPath'));

        echo $view->render();
    }

     /**
     * @param $name
     * @return mixed
     */
    public static function getModel($name)
    {
        $name = '\\Models\\' . ucfirst($name);
        $model = new $name();
        return $model;
    }

     /**
     * @return mixed
     */
     private function getMenuCollection()
     {
       // return $this->getModel('menu')
         //   ->initCollection()
           // ->sort(array('sort_order'=>'ASC'))
           // ->getCollection()
           // ->select();
     }

     protected function forward($route)
     {
         App::run($route);
     }
	 	
	
	public static function filterInput()
	{
		
		$data = [];

		if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST'){
			
			foreach ($_POST as $key=>$value) {
				
				$filter = strip_tags($value);
				
				if ($filter != '') {
					$data[$key] = $filter;
				}else{
					return false;
				}
						
			}
			
			return $data;
			
		}else{
			return false;
		}
			
	}
    
}