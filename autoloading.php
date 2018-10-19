<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_payable
 * @title autoloading
 * @authors awenger
 * @date 10/18/2018
 * @description Helper Class for autoloading
 */
function __autoload($classname) {
    $filename = "./". $classname .".class.php";
    include_once($filename);
}