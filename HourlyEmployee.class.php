<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hourly_employee.class
 *
 * @author kevinjune
 * @date 10/18/2018
 */
class HourlyEmployee extends Employee {
    private $wage;
    private $hours;
    
    public function __construct($person,$ssn, $wage, $hours) {
        parent:: __construct($person, $ssn);
        $this->wage = $wage;
        $this->hours = $hours;
    }
    
    //returns the wage of the hourly employee
    public function getWage() {
        return number_format((float)$this->wage, 2, '.', '');
    }
    
    //returns the employee hours
    public function getHours() {
        return $this->hours;
    }
    
    //returns the employee's payment amount
    public function getPaymentAmount() {
        return number_format((float)$this->wage * $this->hours, 2, '.', '');
    }
    
    public function toString() {      
        $printStr = "<b>Hourly Employee</b><br />";
        $printStr .= "Name: " . parent::getPerson()->toString() . "<br />";
        $printStr .= "Social Security Number: " . parent::getSSN() . "<br />";
        $printStr .= "Wage per hour: $" . $this->getWage() . "<br />";
        $printStr .= "Hours: " . $this->getHours() . "<br />";
        $printStr .= "Earning: $" . $this->getPaymentAmount() . "<br />";
        return $printStr;
    }
}
