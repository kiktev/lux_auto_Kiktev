<?php

namespace Core;

/**
 * 
 */

class Request
{
    
    public static function issetRequest() {

        if(isset($_POST['action'])) {

            switch ($_POST['action']) {

                case 'sale_request':
                    self::pushSaleRequest();
                break;

                case 'purchase_request':
                    self::pushPurchaseRequest();
                break;

                case 'exchange_request':
                    self::pushExchangeRequest();
                break;

                case 'loan_request':
                    self::pushLoanRequest();
                break;

                case 'rolling_request':
                    self::pushRollingRequest();
                break;
                
                default:
                    
                break;
            }

        }

    }

    public static function pushSaleRequest(){

        $data = Controller::getModel('SaleRequest')->getPostValues();

        if($data != false){

            Controller::getModel('SaleRequest')->addRequest($data);
        }
       
    }

    public static function pushPurchaseRequest(){

        $data = Controller::getModel('PurchaseRequest')->getPostValues();
         if($data != false){
             Controller::getModel('PurchaseRequest')->addRequest($data);
        }

    }

    public static function pushExchangeRequest(){

        $data = Controller::getModel('ExchangeRequest')->getPostValues();

        if($data != false){

            Controller::getModel('ExchangeRequest')->addRequest($data);
        }
    }

    public static function pushLoanRequest(){

        $data = Controller::getModel('LoanRequest')->getPostValues();

        if($data != false){

            Controller::getModel('LoanRequest')->addRequest($data);
        }

    }

    public static function pushRollingRequest(){

        $data = Controller::getModel('RollingRequest')->getPostValues();

        if($data != false){

            Controller::getModel('RollingRequest')->addRequest($data);
        }

    }

}