<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Invoice
 *
 * @author Alex Wenger
 */
class Invoice implements IPayable{
    private $part_number;
    private $part_description;
    private $quantity;
    private $price_per_item;
    private $invoice_count;
    
    function __construct($part_number, $part_description, $quantity, $price_per_item, $invoice_count){
        $this->part_number = $part_number;
        $this->part_description = $part_description;
        $this->quantity = $quantity;
        $this->price_per_item = $price_per_item;
        $this->invoice_count = $invoice_count;
    }
    
    function getPartNumber(){
        return $this->part_number;
    }
    
    function getPartDescription(){
        return $this->part_description;
    }
    
    function getQuantity(){
        return $this->quantity;
    }
    
    function getPricePerItem(){
        return $this->price_per_item;
    }
    
    function getInvoiceCount(){
        return $this->invoice_count;
    }
    
    function getPaymentAmount(){
        return $this->invoice_count * $this->price_per_item;
    }
    
    function toString(){
        return "[Invoice] TODO toString()";
    }
}