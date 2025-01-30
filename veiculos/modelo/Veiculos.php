<?php
    
    class Veiculos
    {
        
        // Atributos
        
        private $marca;
        private $modelo;
        private $ano;
        private $motor;
        
        // Métodos
        
        // nada ainda
        
        // ToString
        
        public function __toString()
        {
            
            return "O Modelo: " . $this->modelo . " da Marca: " . $this->marca . " do Ano: " . $this->ano . " tem um Motor: " . $this->motor;
            
        }
        
        // Construtor
        
        public function __construct($marca, $modelo, $ano, $motor, $tracao) 
        {
            
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->motor = $motor;
            
        }
        
        //  GETS & SETS
        
        
        /**
         * Get the value of marca
         */
        public function getMarca()
        {
            
            return $this->marca;
            
        }
        
        /**
         * Set the value of marca
         */
        public function setMarca($marca): self
        {
            
            $this->marca = $marca;
            
            return $this;
            
        }
        
        /**
         * Get the value of modelo
         */
        public function getModelo()
        {
            
            return $this->modelo;
            
        }
        
        /**
         * Set the value of modelo
         */
        public function setModelo($modelo): self
        {
            
            $this->modelo = $modelo;
            
            return $this;
            
        }
        
        /**
         * Get the value of ano
         */
        public function getAno()
        {
            
            return $this->ano;
            
        }
        
        /**
         * Set the value of ano
         */
        public function setAno($ano): self
        {
            
            $this->ano = $ano;
            
            return $this;
            
        }
        
        /**
         * Get the value of motor
         */
        public function getMotor()
        {
            
            return $this->motor;
            
        }
        
        /**
         * Set the value of motor
         */
        public function setMotor($motor): self
        {
            
            $this->motor = $motor;
            
            return $this;
            
        }
        
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