<?php


class SalariedEmployee extends Employee {
    private $weekly_salary;
    
    public function __construct($person,$ssn, $weekly_salary) {
        parent:: __construct($person, $ssn);
        $this->weekly_salary = $weekly_salary;
    }
    public function getWeeklySalary() {
        return $this->weekly_salary;
    }
    public function getPaymentAmount() {
        return $this->weekly_salary;
    }
    public function toString() {
    print("[SalariedEmployee] TODO ToString()");
    }

}
