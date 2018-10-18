<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author Alex Wenger
 */
abstract class Employee implements IPayable {
    private $person;
    private $ssn;
    private static $employee_count = 0;
    
    //TODO
    function __construct($person, $ssn){
        $this->person = $person;
        $this->ssn = $ssn;
        self::$employee_count += 1;
    }
    
    public function getPerson(){
        return $this->person;
    }
    
    public function getSSN(){
        return $this->ssn;
    }
    
    public static function getEmployeeCount(){
        return self::$employee_count;
    }
    
    abstract function getPaymentAmount();
    
    public function toString(){
        print("[Employee] TODO ToString()");
    }
}
