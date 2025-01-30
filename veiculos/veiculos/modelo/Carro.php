<?php
    
    require_once "Veiculos.php";
    
    class Carro extends Veiculos
    {
        
        // Atributos
        
        private $tracao;
        
        // Métodos
        
        // nada ainda
        
        // ToString
        
        public function __toString()
        {
            
            
            
        }
        
        // Construtor
        
        public function __construct($marca, $modelo, $ano, $motor, $tracao, $cilindrada, $hp)
        {
            
            parent::__construct($marca, $modelo, $ano, $motor, $cilindrada, $hp);
            $this->tracao = $tracao;
            
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