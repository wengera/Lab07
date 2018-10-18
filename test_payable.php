<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_payable
 *
 * @author awenger
 */

require_once 'autoloading.php';

/*
require_once 'IPayable.class.php';
require_once 'Invoice.class.php';
require_once 'Employee.class.php';
require_once 'person.class.php';
require_once 'CommissionEmployee.class.php';
require_once 'hourly_employee.class.php';
require_once 'salaried_employee.class.php';
require_once 'BasePlusCommissionEmployee.class.php';
*/



    echo "<h2>Payroll System Programmed with OOP</h2>";

/* <People> */
    $SueJones = new Person("Sue", "Jones");
    $BobLewis = new Person("Bob", "Lewis");
/* </People> */

    
    
/* <Invoice> */
    
$invoice_one = new Invoice('01234', 'seat', 2, 375.00);
$invoice_two = new Invoice('56789', 'tire', 4, 79.95);

echo "*****************************************************";
echo "<br />";
echo "<br />";

echo $invoice_one->toString();

echo "<br />";
echo "*****************************************************";
echo "<br />";
echo "<br />";

echo $invoice_two->toString();
 
/* </Invoice> */



/* <Salaried Employee> */

/* </Salaried Employee> */



/* <Hourly Employee> */

/* </Hourly Employee> */



/* <Commission Employee> */
    
    $commission_one = new CommissionEmployee(10000.00, 0.06, $SueJones, "333-33-3333");
         
    echo "<br />";
    echo "*****************************************************";
    echo "<br />";
    echo "<br />";

    echo $commission_one->toString();
  
/* </Commission Employee> */

    
    
/* <Base Plus Commission Employee> */
    //$base_salary, $sales, $commission_rate, $person, $ssn
    $base_commission_one = new BasePlusCommissionEmployee(300.00, 5000.00, 0.04, $BobLewis, "444-44-4444");
      
    echo "<br />";
    echo "*****************************************************";
    echo "<br />";
    echo "<br />";

    echo $base_commission_one->toString();
/* </Base Plus Commission Employee> */
    
    echo "<br />";
    echo "*****************************************************";
    echo "<br />";
    echo "<br />";
    echo "Number of Invoices: " . Invoice::getInvoiceCount() . "<br />";
    echo "Number of Employees: " . Employee::getEmployeeCount();
 ?>