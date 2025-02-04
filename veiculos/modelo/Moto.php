<?php 
    
    require_once("Veiculos.php");
    
    Class Moto extends Veiculos
    {
        
        // Atributos
        
        private string $cor;
        
        // Métodos
        
        public function getTipo()
        {
            
            return "M";
            
        }
        
        // ToString
        
        public function __toString()
        {
            
            return parent::__toString() . "\n Cor: " . $this->cor;
            
        }
        
        /**
         * Get the value of cor
         */
        public function getCor()
        {
            
            return $this->cor;
            
        }
        
        /**
         * Set the value of cor
         */
        public function setCor($cor): self
        {
            
            $this->cor = $cor;
            
            return $this;
            
        }
        
    }
    
?>