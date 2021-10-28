<?php
namespace Controllers;

use Core\Controller; 
use Core\View;
use Core;
/**
 * 
 */
class CustomerController extends Controller
{

    public function signInAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");
            
        $css = ['css/customer/signIn_signUp.css'];

        foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

        $this->set('css', $css);

        $this->set('email', 'Вкажіть вашу електронну адресу');
        $this->set('password', 'Вкажіть ваш пароль');
  
        if (isset($_POST['action'])) {

            switch ($_POST['action']) {
                
                case 'signIn':
                    $this->signIn();
                break;
                
                case 'signUp':
                    $this->signUp();
                break;
                
                case 'filter':
                
                $this->findCar();
                
                break;
            
            }
        }

        $this->renderLayout();
    }   

    public function signUpAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");
        
        $css = ['css/customer/signIn_signUp.css'];

        foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

        $this->set('css', $css);

        $this->set('name', "Вкажіть ваше ім'я");
        $this->set('surname', "Вкажіть ваше прізвище");
        $this->set('email', 'Вкажіть вашу електронну адресу');
        $this->set('password', 'Вкажіть ваш пароль');

        if (isset($_POST['action'])) {

            switch ($_POST['action']) {
                
                case 'signIn':
                    $this->signIn();
                break;
                
                case 'signUp':
                    $this->signUp();
                break;
                
                case 'filter':
                
                $this->findCar();
                
                break;
            
            }
        }

        $this->renderLayout();
    } 

    public function remPasswordAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");

        $css = ['css/customer/remPassword.css'];

        foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }

        $this->set('css', $css);

        $this->set('email', 'Вкажіть вашу електронну адресу');
        $this->set('hash', 'Вкажіть код, який прийшов на пошту');
        $this->set('newpassword', 'Вкажіть ваш новий пароль');

         if (isset($_POST['action'])) {

            switch ($_POST['action']) {
                
                case 'getHash':
                    $this->getHash();
                break;

                case 'setPassword':
                    $this->setPassword();
                break;
                
            }
        }

        $this->renderLayout();
    } 

    private function getHash(){
       
        $data = $this->filterInput();

        $hash = md5(time());

        $_SESSION['hash'] = $hash;
        $_SESSION['email'] = $data['email'];

        if($data != false){

            $email = $data['email'];
            $message = $hash;  
            $subject = "=?utf-8B?B?".base64_encode("Повідомлення з LuxAuto")."?="; 
            $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
            
            $success = mail($email, $subject, $message, $headers);
            
            return $data;
        }else{
            return false;
        }
        
        
    }

    private function setPassword(){

        $data = $this->filterInput();
        $email = $_SESSION['email'];

        if($_SESSION['hash'] == $data['hash']) {

            $data['newpassword'] = password_hash( $data['newpassword'], PASSWORD_DEFAULT);
           
            $this->getModel('Customer')->remUpdateCustomerPassword($email,$data['newpassword']);

            Core\Helper::redirect('/customer/signIn');

        }else{
        
             $this->set('hash', 'Код вказано не вірно');
        }
    }

    public function profileAction()
    {
        $this->set("title", "LuxAuto - площадка з продажу б/у автомобілів");
        
        $css = ['css/customer/profile.css'];

        foreach($css as $key=>$val){
            $css[$key] .= "?v=" . filectime($val);
        }
        
        $this->set('css', $css);

        $this->set('name', "Вкажіть ваше ім'я");
        $this->set('surname', "Вкажіть ваше прізвище");
        $this->set('email', 'Вкажіть вашу електронну адресу');
        $this->set('password', 'Вкажіть ваш пароль');
        $this->set('newpassword', 'Вкажіть ваш новий пароль');
        $this->set('telephone', 'Вкажіть ваш номер телефону');

        $user =  Core\Helper::getCustomer();
    
        $this->set('user', $user);

        if (isset($_POST['action'])) {

            switch ($_POST['action']) {
                
                case 'save':

                    if($_POST['newpassword'] == ''){
                          unset($_POST['newpassword']);
                    }
                    if($_POST['telephone'] == ''){
                          unset($_POST['telephone']);
                    }

                    $this->saveCustomer();

                break;
                
                case 'delete_customer':
                    $this->deleteCustomer();
                break;

            }
        }
        
        $this->renderLayout();
    } 

    private function saveCustomer(){
        
        $data = $this->filterInput();
       
        $id = Core\Helper::getCustomer()['id'];

        if($data != false){

            $data = $this->saveCustomerValidation($data);

            if($data != false){
            
                if(isset($data['name'])){
                    $this->getModel('Customer')->updateCustomerName($id,$data['name']);
                }
                if(isset($data['surname'])){
                    $this->getModel('Customer')->updateCustomerSurname($id,$data['surname']);
                }
                if(isset($data['email'])){
                    $this->getModel('Customer')->updateCustomerEmail($id,$data['email']);
                }
                if(isset($data['newpassword'])){

                    $data['newpassword'] = password_hash( $data['newpassword'], PASSWORD_DEFAULT);
                    $this->getModel('Customer')->updateCustomerPassword($id,$data['newpassword']);
                    
                }
                  if(isset($data['telephone'])){
                    $this->getModel('Customer')->updateCustomerTelephone($id,$data['telephone']);
                }

                Core\Helper::redirect('/customer/profile');
            }

        }else{

        }
    }

    private function saveCustomerValidation($data) {

        $oldUser = Core\Helper::getCustomer();

        $newUser = $this->getModel('Customer')->getCustomer($data['email']);

        if($data['email'] != $oldUser['email']){
            if (empty($newUser)) {
            
            }else{
                $this->set('email', 'Користувач з таким email вже є');
                return false;
            }
        }else{
            unset($data['email']);
        }

        if($data['name'] == $oldUser['name']){
            unset($data['name']);
        }

         if($data['surname'] == $oldUser['surname']){
            unset($data['surname']);
        }
        
        if(password_verify($data['password'], $oldUser['password'])){
            unset($data['password']);
        }else{
            $this->set('password', "Пароль не вірний");
            return false;
        }

        unset($data['action']);
        return $data;
    }

    private function deleteCustomer(){

        $data = $this->filterInput();
       
        $id = Core\Helper::getCustomer()['id'];
        $password = Core\Helper::getCustomer()['password'];

        if(password_verify($data['password'], $password)){

            $this->getModel('Customer')->deleteItem($id);
            Core\Helper::redirect('index/index');

        }else{

            $this->set('password', "Пароль не вірний");
            return false;
            
        }

        

    }


    private function signUpValidation($data) {
     
        $customer = $this->getModel('Customer')->getCustomer($data['email']);
        
        if (empty($customer)) {
            
        }else{
            $this->set('email', 'Користувач з таким email вже є');
            return false;
        }
        
        if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        
        }else{
            $this->set('email', "Перевірьте правильність введення Email");
            return false;
        }
        
        if (strlen($data['password']) >= 8 ) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }else{
            $this->set('password', "Перевірьте правильність введення паролю");
            return false;
        }
        unset($data['action']);
        return $data;
    }
    
    protected function signIn()
    {
        $data = $this->filterInput();
        
        if ($data != false) {
            $email = $data['email'];
            $password = $data['password'];  
            
            $data = $this->signInValidation($data);
            
            if($data != false) {

                $id = $this->getModel('Customer')->getCustomerId($data['email']); 
                $_SESSION['id'] = $id;
                Core\Helper::redirect('/index/index');

            }
            
        }else{
            $this->set('email', 'Заповніть всі поля');
            $this->set('password', 'Заповніть всі поля');
        }   
    }
    
    private function signInValidation($data) {
        
        $customer = $this->getModel('Customer')->getCustomer($data['email']);
        
        if (!empty($customer)) {
            
        }else{
            $this->set('email', 'Користувача з таким email не знайдено');
            return false;
        }
        
        if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        
        }else{
            $this->set('email', "Перевірьте правильність введення Email");
            return false;
        }
    
        
        if(password_verify($data['password'], $customer[0]['password'])){
            
        }else{
            $this->set('password', "Пароль не вірний");
            return false;
        }
        
        unset($data['action']);
        return $data;   
    }

    protected function signUp()
    {
        
        $data = $this->filterInput(); 
        
        if ($data != false) { 
            
            
            $data = $this->signUpValidation($data);
            
            if($data != false){             
            
                $this->getModel('Customer')->newCustomer($data);
                $this->set('name', "Вас зареєстровано");
                $this->set('surname', "Вас зареєстровано");
                $this->set('email', 'Вас зареєстровано');
                $this->set('password', 'Вас зареєстровано');
                
                Core\Helper::redirect('/customer/signIn');
            }else{
                return false;
            }
            
        }else{          
            $this->set('name', "Заповніть всі поля");
            $this->set('surname', "Заповніть всі поля");
            $this->set('email', 'Заповніть всі поля');
            $this->set('password', 'Заповніть всі поля');        
        }
        
    }

    public function logoutAction()
    {
        
        $_SESSION = [];

       // expire cookie

        if (!empty($_COOKIE[session_name()]))
        {
            setcookie(session_name(), "", time() - 360000, "/");
        }
        session_destroy();
        
        Core\Helper::redirect('/index/index');
    }

}