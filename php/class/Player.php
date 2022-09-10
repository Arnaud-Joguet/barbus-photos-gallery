<?php

class Player
{
    private $name;
    private $jerseyNumber;
    private $role;
    private $image;

    public function __construct(
        $paramName = "",
        $paramJerseyNumber = "",
        $paramRole ="",
        $paramImage=""
    )
    {
        $this->name = $paramName;
        $this->jerseyNumber = $paramJerseyNumber;
        $this->role =   $paramRole;
        $this->image =  $paramImage;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of jerseyNumber
     */ 
    public function getJerseyNumber()
    {
        return $this->jerseyNumber;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }
}