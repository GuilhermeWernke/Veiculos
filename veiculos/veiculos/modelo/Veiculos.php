<?php
    
    class Veiculos
    {
        
        // Atributos
        
        protected $marca;
        protected $modelo;
        protected $ano;
        protected $motor;
        protected $cilindrada;
        protected $potencia;
        
        // Métodos
        
        // nada ainda
        
        // ToString
        
        public function __toString()
        {
            
            return "O Modelo: " . $this->modelo . " da Marca: " . $this->marca . " do Ano: " . $this->ano . " tem um Motor: " . $this->motor . " com " . $this->cilindrada . " cilindradas e " . $this->hp . " cavalos de potência.";
            
        }
        
        // Construtor
        
        public function __construct($marca, $modelo, $ano, $motor, $cilindrada, $potencia)
        {
            
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->motor = $motor;
            $this->cilindrada = $cilindrada;
            $this->potencia = $potencia;
            
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
         * Get the value of cilindrada
         */
        public function getCilindrada()
        {
            
            return $this->cilindrada;
            
        }
        
        /**
         * Set the value of cilindrada
         */
        public function setCilindrada($cilindrada): self
        {
            
            $this->cilindrada = $cilindrada;
            
            return $this;
            
        }
        
        /**
         * Get the value of hp
         */
        public function getHp()
        {
            
            return $this->hp;
            
        }
        
        /**
         * Set the value of hp
         */
        public function setHp($potencia): self
        {
            
            $this->hp = $potencia;
            
            return $this;
            
        }
    }
    
?>