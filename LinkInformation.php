<?php
namespace modules\punyshort;

class LinkInformation {
    private $clicks = 0;
    private $clicksPerDay;
    private $browser;
    private $operatingSystems;
    private $countries;
    private $error;

    public function __construct($clicks, $clicksPerDay, $browser, $operatingSystems, $countries, $error){
        $this->clicks = $clicks;
        $this->clicksPerDay = $clicksPerDay;
        $this->browser = $browser;
        $this->operatingSystems = $operatingSystems;
        $this->countries = $countries;
        $this->error = $error;
    }

    /**
     * Get the value of error
     */ 
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set the value of error
     *
     * @return  self
     */ 
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get the value of countries
     */ 
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Set the value of countries
     *
     * @return  self
     */ 
    public function setCountries($countries)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * Get the value of operatingSystems
     */ 
    public function getOperatingSystems()
    {
        return $this->operatingSystems;
    }

    /**
     * Set the value of operatingSystems
     *
     * @return  self
     */ 
    public function setOperatingSystems($operatingSystems)
    {
        $this->operatingSystems = $operatingSystems;

        return $this;
    }

    /**
     * Get the value of browser
     */ 
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Set the value of browser
     *
     * @return  self
     */ 
    public function setBrowser($browser)
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get the value of clicksPerDay
     */ 
    public function getClicksPerDay()
    {
        return $this->clicksPerDay;
    }

    /**
     * Set the value of clicksPerDay
     *
     * @return  self
     */ 
    public function setClicksPerDay($clicksPerDay)
    {
        $this->clicksPerDay = $clicksPerDay;

        return $this;
    }

    /**
     * Get the value of clicks
     */ 
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Set the value of clicks
     *
     * @return  self
     */ 
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

        return $this;
    }
}