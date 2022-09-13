<?php

namespace Hillel;

class Currency
{
    private $isoCode;

    public function __construct($isoCode = '') 
    {
        if (empty($isoCode) || $isoCode == 0)
        {
            $this->setIsoCode("USD");
        } else 
        {
            $this->setIsoCode($isoCode);
        }        
    }

    private function control($val)
    {
        if (is_int($val)) 
        {
            throw new \InvalidArgumentException("Sorry, need enter only string in ISO currency");
        }

        if (!is_string($val) || strlen($val) > 3) 
        {
            throw new \InvalidArgumentException("Sorry, need enter correct ISO currency");
        }

        if(strtoupper($val) != 'USD' 
            && strtoupper($val) != 'EUR' 
            && strtoupper($val) != 'UAH' 
            && strtoupper($val) != 'AUD' 
            && strtoupper($val) != 'CAD' 
            && strtoupper($val) != 'CNY' 
            && strtoupper($val) != 'NZD' 
            && strtoupper($val) != 'INR' 
            && strtoupper($val) != 'BZR' 
            && strtoupper($val) != 'SEK' 
            && strtoupper($val) != 'ZAR' 
            && strtoupper($val) != 'HKD')
        {
            throw new \InvalidArgumentException("can't found this ISO Code Currency");
        }
    }

    //get/set for isoCode
    private function setIsoCode($isoCode)
    {
        $this->control($isoCode);
        $this->isoCode = strtoupper($isoCode);   
    }
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    //equals
    public function equalsIsoCode(object $objectEqualsIso)
    {
        if(($this->isoCode === $objectEqualsIso->getIsoCode()))
        {
            return true;
        } else 
        {
            return false;
        }
    }
}
