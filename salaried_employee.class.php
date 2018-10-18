<?php


class Salaried_Employee extends Employee {
    private $weekly_salary;
    
    public function __construct($person,$ssn, $employee_count, $weekly_salary) {
        parent:: __construct($person, $ssn, $employee_count);
        $this->weekly_salary = $weekly_salary;
    }
    public function getWeeklySalary() {
        return $this->weekly_salary;
    }
    public function getPaymentAmount() {
        return $this->weekly_salary;
    }
}
