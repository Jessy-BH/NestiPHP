<?php


    class Articles{
        private $id;
        private $unitQuantity;
        private $flag;
        private $dateCreation;
        private $dateModification;
        private $idImage;
        private $idUnit;
        private $idProduct;
    
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
        public function getUnitQuantity()
        {
            return $this->unitQuantity;
        }
    
        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setUnitQuantity($unitQuantity)
        {
            $this->unitQuantity = $unitQuantity;
    
            return $this;
    
    }
    
    
}