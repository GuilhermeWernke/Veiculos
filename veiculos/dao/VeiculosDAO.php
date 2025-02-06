<?php
    
    require_once("modelo/Veiculos.php");
    require_once("modelo/Carro.php");
    require_once("modelo/Moto.php");
    
    require_once("util/conexao.php");
    
    class VeiculosDAO
    {
        
        public function inserirVeiculo(Veiculos $veiculo)
        {
            
            $con = Conexao::getCon();
            $sql = "INSERT INTO veiculos (marca, modelo, ano, motor, cilindrada, hp, tracao, cor, tipo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            $stm = $con->prepare($sql);
            
            if($veiculo instanceof Carro)
            {
                
                $stm->execute(array
                (
                    
                    $veiculo->getMarca(),
                    $veiculo->getModelo(),
                    $veiculo->getAno(),
                    $veiculo->getMotor(),
                    $veiculo->getCilindrada(),
                    $veiculo->getHp(),
                    $veiculo->getTracao(),
                    NULL,
                    'C' // Define o tipo como 'C' para Carro
                    
                ));
                
            }
            else if($veiculo instanceof Moto)
            {
                
                $stm->execute(array
                (
                    
                    $veiculo->getMarca(),
                    $veiculo->getModelo(),
                    $veiculo->getAno(),
                    $veiculo->getMotor(),
                    $veiculo->getCilindrada(),
                    $veiculo->getHp(),
                    NULL,
                    $veiculo->getCor(),
                    'M' // Define o tipo como 'M' para Moto
                    
                ));
                
            }
            
        }
        
        public function buscarVeiculoPorId(int $id)
        {
            
            $con = Conexao::getCon();
            
            $sql = "SELECT * FROM veiculos WHERE id = ?";
            
            $stm = $con->prepare($sql);
            $stm->execute(array($id));
            
            $registro = $stm->fetch();
            
            if ($registro == NULL)
            {
                
                system("clear");
                
                return [];
                
            }
            
            if($registro["tipo"] == "M")
            {
                
                $veiculo = new Moto();
                $veiculo->setId($registro["id"]);
                $veiculo->setMarca($registro["marca"]);
                $veiculo->setModelo($registro["modelo"]);
                $veiculo->setAno($registro["ano"]);
                $veiculo->setMotor($registro["motor"]);
                $veiculo->setCilindrada($registro["cilindrada"]);
                $veiculo->setHp($registro["hp"]);
                $veiculo->setCor($registro["cor"]);
                
            }
            else if($registro["tipo"] == "C")
            {
                
                $veiculo = new Carro();
                $veiculo->setId($registro["id"]);
                $veiculo->setMarca($registro["marca"]);
                $veiculo->setModelo($registro["modelo"]);
                $veiculo->setAno($registro["ano"]);
                $veiculo->setMotor($registro["motor"]);
                $veiculo->setCilindrada($registro["cilindrada"]);
                $veiculo->setHp($registro["hp"]);
                $veiculo->setTracao($registro["tracao"]);
                
            }
            
            return $veiculo;
            
        }
        
        public function listarVeiculos()
        {
            
            $con = Conexao::getCon();
            
            $sql = "SELECT * FROM veiculos";
            
            $stm = $con->prepare($sql);
            $stm->execute();
            $registros = $stm->fetchAll();            
            
            return $this->mapVeiculos($registros);
            
        }
        
        public function excluirVeiculo(int $id)
        {
            
            
            
            $con = Conexao::getCon();
            
            $sql = "DELETE FROM veiculos WHERE id = ?";
            
            $stm = $con->prepare($sql);
            $stm->execute(array($id));
            
        }
        
        private function mapVeiculos(array $registros)
        {
            
            $veiculos = array();
            
            foreach ($registros as $registro)
            {
                
                $veiculo = NULL;
                
                if($registro["tipo"] == "C")
                {
                    
                    $veiculo = new Carro();
                    $veiculo->setId($registro["id"]);
                    $veiculo->setMarca($registro["marca"]);
                    $veiculo->setModelo($registro["modelo"]);
                    $veiculo->setAno($registro["ano"]);
                    $veiculo->setMotor($registro["motor"]);
                    $veiculo->setCilindrada($registro["cilindrada"]);
                    $veiculo->setHp($registro["hp"]);
                    $veiculo->setTracao($registro["tracao"]);
                    
                }
                else if($registro["tipo"] == "M")
                {
                    
                    $veiculo = new Moto();
                    $veiculo->setId($registro["id"]);
                    $veiculo->setMarca($registro["marca"]);
                    $veiculo->setModelo($registro["modelo"]);
                    $veiculo->setAno($registro["ano"]);
                    $veiculo->setMotor($registro["motor"]);
                    $veiculo->setCilindrada($registro["cilindrada"]);
                    $veiculo->setHp($registro["hp"]);
                    $veiculo->setCor($registro["cor"]);
                    
                }
                
                array_push($veiculos, $veiculo);
                
            }
            
            return $veiculos;
            
        }
        
    }
    
?>