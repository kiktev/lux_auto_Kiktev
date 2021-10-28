<?php

namespace Controllers;

use Core\Controller; 

/**
 * 
 */

class CartController extends Controller
{

    public function cartAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");

        $css = ["css/cart.css"];

        foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }
        
        $this->set('css', $css);

        $this->set('cartList', array());

        if (isset($_COOKIE['cart'])) {
            $id = json_decode($_COOKIE['cart'], true);
        }

        if (isset($_POST['action'])) {
            switch ($_POST['action']) {
                
                case 'cart_remove':
                    $this->removeCart();
                break;
            
            }
        }

        if (isset($id) ) {
            $this->set('cartList',$this->getModel('Cart')->getCartList($id));
        }
		
        $this->renderLayout();
    }	

    public function removeCart()
    {

        $data = $this->filterInput();

        $id = $data['id'];

        if (isset($_COOKIE['cart'])) {

            $carts_id =  json_decode($_COOKIE['cart'], true);

            setcookie('cart', '', time()-604800, '/');
            
            foreach($carts_id as $key=>$val){
                if($carts_id[$key] == $id){
                    unset($carts_id[$key]);
                }
            }

            setcookie('cart',  json_encode($carts_id), time()+604800, '/');
            if(count($carts_id) == 0){
                setcookie('cart', '', time()-604800, '/');
            }  
        }
    }


}