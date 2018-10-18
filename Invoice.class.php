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
    private static $invoice_count = 0;
    
    function __construct($part_number, $part_description, $quantity, $price_per_item){
        $this->part_number = $part_number;
        $this->part_description = $part_description;
        $this->quantity = $quantity;
        $this->price_per_item = $price_per_item;
        self::$invoice_count = self::$invoice_count + 1;
    }
    
    //Returns the part number
    function getPartNumber(){
        return $this->part_number;
    }
    
    //returns the part description
    function getPartDescription(){
        return $this->part_description;
    }
    
    //returns the number of parts for the invoice
    function getQuantity(){
        return $this->quantity;
    }
    
    //returns the price of the item
    function getPricePerItem(){
        return $this->price_per_item;
    }
    
    //returns the total number of invoices
    static function getInvoiceCount(){
        return self::$invoice_count;
    }
    
    //returns the invoice total
    function getPaymentAmount(){
        return $this->quantity * $this->price_per_item;
    }
    
    //prints the invoice
    public function toString(){
        $printStr = "<b>Invoice:</b><br />";
        $printStr .= "Part Number: " . $this->getPartNumber() . " (" . $this->getPartDescription() . ")<br />";
        $printStr .= "Quantity: " . $this->getQuantity() . "<br />";
        $printStr .= "Price per item: $" . $this->getPricePerItem() . "<br />";
        $printStr .= "Payment: $" . $this->getPaymentAmount() . "<br />";
        
        return $printStr;
    }
}
