<?php

namespace Hillel\Models;

abstract class Model
{
    private $id;
    private $name;
    private $email;

    public function __construct() 
    {
        // $this->setAmount($amount);
        // $this->setCurrency($currency);
    }

    // private function control($val)
    // {
    //     if (is_int($val) && !is_numeric($val)) 
    //     {
    //         throw new \InvalidArgumentException("Not integer");
    //     }
    // }

    //get/set for Modal
    // private function setAmount($amount)
    // {
    //     $this->control($amount);
    //     $this->amount = $amount;   
    // }
    // public function getAmount()
    // {
    //     return $this->amount;
    // }

    //find
    public static function find($id)
    {

    }

    //create
    abstract public function create()
    {

    }

    //update
    abstract public function update()
    {

    }

    //delete
    abstract public function delete()
    {

    }
}