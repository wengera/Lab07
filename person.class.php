<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hourly_employee.class
 * @title Person
 * @author kevinjune
 * @date 10/18/2018
 * @description Class Object for Person
 */

class Person {
    private $first_name, $last_name;
    
    //constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    //Get methods for name
    public function getFirst_Name() {
        return $this->first_name;
    }
    public function getLast_Name() {
        return $this->last_name;
    }
    public function toString() {
        return "" . $this->first_name . " " . $this->last_name;
    }

}
