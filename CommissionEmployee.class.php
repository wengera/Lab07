<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommissionEmployee
 *
 * @author awenger
 */
class CommissionEmployee extends Employee {
    private $sales;
    private $commission_rate;
    
    //TODO
    function __construct($sales, $commission_rate, $person, $ssn, $employee_count){
        $this->sales = $sales;
        $this->commission_rate = $commission_rate;
        $this->person = $person;
        $this->ssn = $ssn;
        $this->employee_count = $employee_count;
    }
    
    public function getPaymentAmount(){
        return $this->sales * $this->commission_rate;
    }
    
    public function getSales(){
        return $this->sales;
    }
    
    public function getCommissionRate(){
        return $this->commission_rate;
    }
    
    public function toString(){
        print("[CommissionEmployee] TODO ToString()");
    }
}
