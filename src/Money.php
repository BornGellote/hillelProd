<?php

namespace Hillel;

use \InvalidArgumentException;

class Money
{
    private $amount;
    private $currency;

    public function __construct($amount, $currency) 
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    private function control($val)
    {
        if (is_int($val) && !is_numeric($val)) 
        {
            throw new InvalidArgumentException("Not integer");
        }
    }

    //get/set for Amount
    private function setAmount($amount)
    {
        $this->control($amount);
        $this->amount = $amount;   
    }
    public function getAmount()
    {
        return $this->amount;
    }

    //get/set for Currency
    private function setCurrency($currency)
    {
        $this->currency = $currency;   
    }
    public function getCurrency()
    {
        return $this->currency;
    }

    //equals
    public function equalsAmount(object $objectAmount)
    {
        if(($this->amount === $objectAmount->getAmount()))
        {
            return true;
        } else 
        {
            return false;
        }
    }

    //add
    public function addAmount(object $objectAdd)
    {
        if ($this->currency == $objectAdd->getCurrency()) 
        {
            return new Money($this->amount + $objectAdd->getAmount(), $this->currency);
        } else 
        {
            throw new InvalidArgumentException("Сurrency does not match");
        }
    }
    
}