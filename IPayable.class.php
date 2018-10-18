<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IPayable
 *
 * @author Alex Wenger
 */
interface IPayable {
    //put your code here
    function getPaymentAmount();
    function toString();
}
