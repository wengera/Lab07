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
    print
        $printStr = "<b>Salaried Employee</b><br />";
        $printStr .= "Name: " . parent::getPerson()->toString() . "<br />";
        $printStr .= "Social Security Number: " . parent::getSSN()->toString() . "<br />";
        $printStr .= "Weekly salary: " . number_format((float)$this->getWeeklySalary(), 2, '.', '') . "<br />";
        $printStr .= "Earning: " . $this->getPaymentAmount() . "<br />";
        return $printStr;
    }

}
