<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasePlusCommissionEmployee
 * @title BasePlusCommissionEmployee
 * @author Alex Wenger
 * @date 10/18/2018
 * @description Object for Base Plus Commission Employees
 */
class BasePlusCommissionEmployee extends CommissionEmployee {
    private $base_salary;
    
    function __construct($base_salary, $sales, $commission_rate, $person, $ssn){
        parent:: __construct($sales, $commission_rate, $person, $ssn);
        $this->base_salary = $base_salary;
    }
    
    //returns payment amount
    public function getPaymentAmount(){
        return number_format((float)$this->base_salary + parent::getPaymentAmount(), 2, '.', '');
    }
    
    //returns base salary
    public function getBaseSalary(){
        return number_format((float)$this->base_salary, 2, '.', '');
    }
    
    //Returns a description of the BasePlusCommissionEmployee
    public function toString(){
        $printStr = "<b>Base Plus Commission Employee:</b><br />";
        $printStr .= "Name: " . $this->getPerson()->toString() . "<br />";
        $printStr .= "Social Security Number: " . $this->getSSN() . "<br />";
        $printStr .= "Gross Sale: $" . number_format((float)parent::getSales(), 2, '.', '') . "<br />";
        $printStr .= "Commission Rate: " . parent::getCommissionRate() . "<br />";
        $printStr .= "Base Salary: $" . $this->getBaseSalary() . "<br />";
        $printStr .= "Earning: $" . $this->getPaymentAmount() . "<br />";
        
        return $printStr;
    }
}
