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
 */
class HourlyEmployee extends Employee {
    private $wage;
    private $hours;
    
    public function __construct($person,$ssn, $wage, $hours) {
        parent:: __construct($person, $ssn);
        $this->wage = $wage;
        $this->hours = $hours;
    }
    public function getWage() {
        return $this->wage;
    }
    
    public function getHours() {
        return $this->hours;
    }
    
    public function getPaymentAmount() {
        return $this->wage * $this->hours;
    }
    public function toString() {
    print("[SalariedEmployee] TODO ToString()");
    }
}
