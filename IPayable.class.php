<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IPayable
 * @title IPayable
 * @author Alex Wenger
 * @date 10/18/2018
 * @description Interface for Employee Payment Functions
 */
interface IPayable {
    //put your code here
    function getPaymentAmount();
    function toString();
}
