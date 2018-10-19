<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 * @title Employee
 * @author Alex Wenger
 * @date 10/18/2018
 * @description Abstract Class Definition for Employees
 */
abstract class Employee implements IPayable {
    private $person;
    private $ssn;
    private static $employee_count = 0;
    
    
    function __construct($person, $ssn){
        $this->person = $person;
        $this->ssn = $ssn;
        self::$employee_count += 1;
    }
    
    //returns the employee's person object
    public function getPerson(){
        return $this->person;
    }
    
    //returns employee social security number
    public function getSSN(){
        return $this->ssn;
    }
    
    //Returns total number of employees
    public static function getEmployeeCount(){
        return self::$employee_count;
    }
    
    abstract function getPaymentAmount();
    
    public function toString(){
        $printStr = "<b>Employee:</b><br />";
        $printStr .= "Name: " . $this->getPerson()->toString() . "<br />";
        $printStr .= "Social Security Number: " . $this->getSSN() . "<br />";
        
        return $printStr;
    }
}
