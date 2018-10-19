<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test_payable
 *
 * @authors awenger
 * @date 10/18/2018
 */
function __autoload($classname) {
    $filename = "./". $classname .".class.php";
    include_once($filename);
}