<?php


class Recipes

{
    private $id;
    private $dateCreation;
    private $name;
    private $difficulty;
    private $portions;
    private $flag;
    private $time;
    private $chief;
    private $image;
   
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of difficulty
     */ 
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set the value of difficulty
     *
     * @return  self
     */ 
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get the value of for
     */ 
    public function getPortions()
    {
        return $this->portions;
    }

    /**
     * Set the value of for
     *
     * @return  self
     */ 
    public function setPortions($portions)
    {
        $this->portions = $portions;

        return $this;
    }

    /**
     * Get the value of time
     */ 
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of time
     *
     * @return  self
     */ 
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get the value of chief
     */ 
    public function getChief()
    {
        return $this->chief;
    }

    /**
     * Set the value of chief
     *
     * @return  self
     */ 
    public function setChief($chief)
    {
        $this->chief = $chief;

        return $this;
    }
}