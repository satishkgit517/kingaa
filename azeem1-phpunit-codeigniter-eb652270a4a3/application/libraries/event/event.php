<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of event
 *
 * @author azeem
 */
class event {
    //put your code here
    public function __construct() {
		$this->ci = & get_instance ();
    }
    
    function add_numbers($a,$b)
    {
        return $a+$b;
    }
}
