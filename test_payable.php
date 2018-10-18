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

require_once 'IPayable.class.php';
require_once 'Invoice.class.php';
require_once 'Employee.class.php';
require_once 'person.class.php';
require_once 'CommissionEmployee.class.php';
require_once 'hourly_employee.class.php';
require_once 'salaried_employee.class.php';
require_once 'BasePlusCommissionEmployee.class.php';




    echo "<h2>Payroll System Programmed with OOP</h2>";


/* <Invoice> */

 //Create invoices
 $invoice_one = new Invoice('01234', 'seat', 2, 375.00);
 $invoice_two = new Invoice('56789', 'tire', 4, 79.95);
         
  //Print Invoices
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

/* </Commission Employee> */

/* <Base Plus Commission Employee> */

/* </Base Plus Commission Employee> */
 ?>