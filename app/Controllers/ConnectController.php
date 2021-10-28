<?php

namespace Controllers;

use Core\Controller; 

/**
 * 
 */

class ConnectController extends Controller
{

    public function ConnectAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");
		
        $css = ['css/connect.css'];

        foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }
        
        $this->set('css', $css);

        $this->set('email','Введіть вашу електронну адресу');
        $this->set('name',"Введіть ваше м'я");
        $this->set('message','Введіть текст повідомлення');
        $this->set('surname','Введіть ваше прізвище');
        $this->set('telephone','Введіть ваш номер телефону');

		if (isset($_POST['action'])) {

            switch ($_POST['action']) {
               
                case 'connect':
                   $this->sendMessage();
                break;
                
                default:
                   
                 break;
            }
        }

        $this->renderLayout();
    }

    protected function messageValidation($data)
    {
        
        if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        
        }else{
            $this->set('email', "Перевірьте правильність введення Email");
            return false;
        }

        unset($data['action']);

        $email = $data['email'];
        $message = $data['message'];  
        $subject = "=?utf-8B?B?".base64_encode("Повідомлення з LuxAuto")."?="; 
        $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
        
        $success = mail(ADMIN_EMAIL, $subject, $message, $headers);
        
        return $data;

    }

    protected function sendMessage()
    {

        $data = $this->filterInput();
        
        if ($data != false) {
   
            $data = $this->messageValidation($data);
            
            if($data != false) {
                 $this->getModel('Connect')->newMessage($data);
                 $this->set('message','Повідомлення відправлено');
            }
            
        }else{
            $this->set('email','Заповніть всі поля');
            $this->set('name',"Заповніть всі поля");
            $this->set('message','Заповніть всі поля');
            $this->set('surname','Заповніть всі поля');
            $this->set('telephone','Заповніть всі поля');
        }   
    }	

}