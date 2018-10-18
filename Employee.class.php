<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author awenger
 */
abstract class Employee {
    private $person;
    private $ssn;
    private $employee_count;
    
    //TODO
    function __construct($person, $ssn, $employee_count){
        $this->person = $person;
        $this->ssn = $ssn;
        $this->employee_count = $employee_count;
    }
    
    public function getPerson(){
        return $this->person;
    }
    
    public function getSSN(){
        return $this->ssn;
    }
    
    public function getEmployeeCount(){
        return $this->employee_count;
    }
    
    public function toString(){
        print("[Employee] TODO ToString()");
    }
}
