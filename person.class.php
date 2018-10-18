<?php

class Person {
    private $first_name, $last_name;
    
    //constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    //Get methods for name
    public function getFirst_Name() {
        return $this->first_name;
    }
    public function getLast_Name() {
        return $this->last_name;
    }
    public function toString() {
    print("[Person] TODO ToString()");
    }

}
