<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Inderjeet
 */
class Student {
    //put your code here
    function __construct() 
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
     /* Funation to add email address */
    function add_email($which,$address) {
    $this->emails[$which] = $address;
    }
    /* Funation to add grades */
    function add_grade($grade) {
    $this->grades[] = $grade;
    } 
    /* Get the Avarge of grades */
    
    function average() {
    $total = 0;
    foreach ($this->grades as $value)
    $total += $value;
    return $total / count($this->grades);
    } 
   /* Format the output : Primary email on first line  */ 
    
    function toString() {
    $result = $this->first_name . ' ' . $this->surname;
    $result .= ' ('.$this->average().") ";
    foreach($this->emails as $which=>$what)
    
    $result .= $which . ': '. $what. "\n ";
    $result .= "\n";
    return '<pre>'.$result.'</pre>';
    } 
}

