<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hourly_employee.class
 * @title SalariedEmployee
 * @author kevinjune
 * @date 10/18/2018
 * @description Class Object for Salaried Employees
 */
class SalariedEmployee extends Employee {
    private $weekly_salary;
    
    public function __construct($person,$ssn, $weekly_salary) {
        parent:: __construct($person, $ssn);
        $this->weekly_salary = $weekly_salary;
    }
    public function getWeeklySalary() {
        return number_format((float)$this->weekly_salary, 2, '.', '');
    }
    public function getPaymentAmount() {
        return number_format((float)$this->weekly_salary, 2, '.', '');
    }
    public function toString() {
        $printStr = "<b>Salaried Employee</b><br />";
        $printStr .= "Name: " . parent::getPerson()->toString() . "<br />";
        $printStr .= "Social Security Number: " . parent::getSSN() . "<br />";
        $printStr .= "Weekly salary: $" . $this->getWeeklySalary() . "<br />";
        $printStr .= "Earning: $" . $this->getPaymentAmount() . "<br />";
        return $printStr;
    }

}
