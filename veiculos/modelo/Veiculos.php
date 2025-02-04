<?php
    
    abstract class Veiculos
    {
        
        // Atributos
        
        protected int $id;
        
        protected string $marca;
        protected string $modelo;
        protected int $ano;
        protected string $motor;
        protected int $cilindrada;
        protected int $hp;
        
        // Métodos
        
        public abstract function getTipo();
        
        // ToString
        
        public function __toString()
        {
            
            return " ID: " . $this->id . "\n Marca: " . $this->marca . "\n Modelo: " . $this->modelo . "\n Ano: " . $this->ano . "\n Motor: " . $this->motor . "\n Cilindradas: " . $this->cilindrada . "\n Cavalos: " . $this->hp;
            
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
        
        /**
         * Get the value of id
         */
        public function getId(): int
        {
            
            return $this->id;
            
        }
        
        /**
         * Set the value of id
         */
        public function setId(int $id): self
        {
            
            $this->id = $id;
            
            return $this;
            
        }
        
    }
    
?>