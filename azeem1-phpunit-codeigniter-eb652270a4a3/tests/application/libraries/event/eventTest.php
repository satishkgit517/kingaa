<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of eventTest
 *
 * Azeem <jazeem.lk@gmail.com>
 */
require_once(APPPATH . "/libraries/event/event.php");
class eventTest extends PHPUnit_Framework_TestCase{
    /**
     * @var Auth_lib
     */
    protected $object;

    /**
     * @var CI
     */
    private $CI;
    
     /**
     * This is kind of setup for CI
     */
    public function __construct() {
        $this->backupGlobals = false;
        $this->backupStaticAttributes = false;
    }

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
       
        $this->CI = &get_instance();
        $this->object= new event();
        
    }

   /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }
    
    /**
     * this is a happy scenario
     */
    function testAdd_numbers()
    {
        $a=10;$b=90;
        $total=$this->object->add_numbers($a, $b);
      //  echo $total;
        $this->assertEquals(100,$total);
       
    }

    
}
