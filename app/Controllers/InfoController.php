<?php
namespace Controllers;

use Core\Controller; 

/**
 * 
 */
class infoController extends Controller
{

    public function infoAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");
		
        $css = ["css/info/info.css"];

        foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }
        
        $this->set('css', $css);
		
        $this->renderLayout();
    }	 

    public function exchange_carAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");
        
         $css = ["css/info/exchange.css"];

        foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }
        
        $this->set('css', $css);

        $this->renderLayout();
    }  

    public function loan_carAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");
        
        $css = ["css/info/loan.css"];

        foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }
        
        $this->set('css', $css);
        
        $this->renderLayout();
    }              

}