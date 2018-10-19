<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommissionEmployee
 * @title Commission Employees
 * @author Alex Wenger
 * @date 10/18/2018
 * @description Object for Commission Employees
 */
class CommissionEmployee extends Employee {
    private $sales;
    private $commission_rate;
    
    //TODO
    function __construct($sales, $commission_rate, $person, $ssn){
        parent:: __construct($person, $ssn);
        $this->commission_rate = $commission_rate;
        $this->sales = $sales;
    }
    
    //Returns the Employee's Earnings
    public function getPaymentAmount(){
        return number_format((float)$this->sales * $this->commission_rate, 2, '.', '');
    }
    
    //Returns the Gross Sales
    public function getSales(){
        return number_format((float)$this->sales, 2, '.', '');
    }
    
    //Returns the Commission Rate
    public function getCommissionRate(){
        return $this->commission_rate;
    }
    
    //Returns a description of the CommissionEmployee
    public function toString(){
        $printStr = "<b>Commission Employee:</b><br />";
        $printStr .= "Name: " . parent::getPerson()->toString() . "<br />";
        $printStr .= "Social Security Number: " . parent::getSSN() . "<br />";
        $printStr .= "Gross Sale: $" . $this->getSales() . "<br />";
        $printStr .= "Commission Rate: " . $this->getCommissionRate() . "<br />";
        $printStr .= "Earning: $" . $this->getPaymentAmount() . "<br />";
        
        return $printStr;
    }
}
