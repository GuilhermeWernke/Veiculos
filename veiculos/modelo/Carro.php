<?php
    
    require_once "Veiculos.php";
    
    class Carro extends Veiculos
    {
        
        // Atributos
        
        private string $tracao;
        
        // Métodos
        
        public function getTipo()
        {
            
            return "C";
            
        }
        
        // ToString
        
        public function __toString()
        {
            
            return parent::__toString() . "\n Tração: " . $this->tracao;
            
        }
        
        //  GETS & SETS
        
        
        /**
         * Get the value of tracao
         */
        public function getTracao()
        {
            
            return $this->tracao;
            
        }
        
        /**
         * Set the value of tracao
         */
        public function setTracao($tracao): self
        {
            
            $this->tracao = $tracao;
            
            return $this;
            
        }
        
    }
    
?>