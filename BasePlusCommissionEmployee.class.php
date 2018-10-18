<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasePlusCommissionEmployee
 *
 * @author Alex Wenger
 */
class BasePlusCommissionEmployee extends CommissionEmployee {
    private $base_salary;
    
    function __construct($base_salary, $sales, $commission_rate, $person, $ssn, $employee_count){
        parent:: __construct($sales, $commission_rate, $person, $ssn, $employee_count);
        $this->base_salary = $base_salary;
    }
    
    public function getPaymentAmount(){
        return $this->$base_salary + parent::getPaymentAmount();
    }
    
    public function getBaseSalary(){
        return $this->base_salary;
    }
    
    public function toString(){
        print("[BasePlusCommissionEmployee] TODO ToString()");
    }
}
