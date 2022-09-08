<?php

class ValueObject
{
    private $red;
    private $green;
    private $blue;

    public function __construct($red = '', $green = '', $blue = '') 
    {
        if(!empty($red) && $red != '')
        {
            $this->setRed($red);
        } else {
            $this->setRed(rand(0, 255));
        }
        
        if(!empty($green) && $green != '')
        {
            $this->setGreen($green);
        } else {
            $this->setGreen(rand(0, 255));
        }

        if(!empty($blue) && $blue != '')
        {
            $this->setBlue($blue);
        } else {
            $this->setBlue(rand(0, 255));
        }
    }

    private function controlRgb($val)
    {
        if (!is_int($val)) 
        {
            throw new InvalidArgumentException("Not integer");
        }
        if ($val != 0 && $val < 0 && $val > 255) 
        {
            throw new InvalidArgumentException("Please enter a valid integer between 0 and 255");
        }
    }

    //get/set for RED
    private function setRed($red)
    {
        $this->controlRgb($red);
        $this->red = $red;   
    }
    public function getRed()
    {
        return $this->red;
    }

    //get/set for GREEN
    private function setGreen($green)
    {
        $this->controlRgb($green);
        $this->green = $green;   
    }
    public function getGreen()
    {
        return $this->green;
    }
        
    //get/set for BLUE
    private function setBlue($blue)
    {
        $this->controlRgb($blue);
        $this->blue = $blue;   
    }
    public function getBlue()
    {
        return $this->blue;
    }

    //equals
    public function equalsRgb()
    {
        if(($this->red === $this->green) && ($this->green === $this->blue))
        {
            return true;
        } else 
        {
            return false;
        }
    }

    //random
    public static function randomRgb(object $objectRandRgb)
    {
        $objectRandRgb->setRed(rand(0, 255));
        $objectRandRgb->setGreen(rand(0, 255));
        $objectRandRgb->setBlue(rand(0, 255));

        return new ValueObject( $objectRandRgb->getRed(), $objectRandRgb->getGreen(), $objectRandRgb->getBlue());
    }

    //mix 
    public function mixRgb(object $objectNumRgb)
    {
        return new ValueObject( ($this->red + $objectNumRgb->getRed()) / 2, ($this->green + $objectNumRgb->getGreen()) / 2, ($this->blue + $objectNumRgb->getBlue()) / 2);
    }
}