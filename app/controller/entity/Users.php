<?php


class Users{
    private $id;
    private $lastname;
    private $firstname;
    private $email;
    private $passwordHash;
    private $flag;
    private $dateCreation;
    private $login;
    private $adress1;
    private $adress2;
    private $zipCode;
    private $idCity;
   
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
 
        return $this;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
 
        return $this;
    }
}
// class Users

// {
//     private $lastName;
//     private $firstName;
//     private $role;
//     private $state;
//     private $email;
//     private $passWord;

//      /**
//      * Get the value of lastName
//      */ 
//     public function getLastName()
//     {
//         return $this->lastName;
//     }

//     /**
//      * Set the value of lastName
//      *
//      * @return  self
//      */ 
//     public function setLastName($lastName)
//     {
//         $this->lastName = $lastName;

//         return $this;
//     }

//     /**
//      * Get the value of firstName
//      */ 
//     public function getFirstName()
//     {
//         return $this->firstName;
//     }

//     /**
//      * Set the value of firstName
//      *
//      * @return  self
//      */ 
//     public function setFirstName($firstName)
//     {
//         $this->firstName = $firstName;

//         return $this;
//     }

//     /**
//      * Get the value of role
//      */ 
//     public function getRole()
//     {
//         return $this->role;
//     }

//     /**
//      * Set the value of role
//      *
//      * @return  self
//      */ 
//     public function setRole($role)
//     {
//         $this->role = $role;

//         return $this;
//     }

//     /**
//      * Get the value of state
//      */ 
//     public function getState()
//     {
//         return $this->state;
//     }

//     /**
//      * Set the value of state
//      *
//      * @return  self
//      */ 
//     public function setState($state)
//     {
//         $this->state = $state;

//         return $this;
//     }

//     /**
//      * Get the value of email
//      */ 
//     public function getEmail()
//     {
//         return $this->email;
//     }

//     /**
//      * Set the value of email
//      *
//      * @return  self
//      */ 
//     public function setEmail($email)
//     {
//         $this->email = $email;

//         return $this;
//     }

//     /**
//      * Get the value of passWord
//      */ 
//     public function getPassWord()
//     {
//         return $this->passWord;
//     }

//     /**
//      * Set the value of passWord
//      *
//      * @return  self
//      */ 
//     public function setPassWord($passWord)
//     {
//         $this->passWord = $passWord;

//         return $this;
//     }
// }