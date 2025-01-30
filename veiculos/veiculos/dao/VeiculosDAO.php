<?php
    
    require_once("modelo/Cliente.php");
    require_once("modelo/ClientePF.php");
    require_once("modelo/ClientePJ.php");
    
    require_once("util/conexao.php");
    
    class ClienteDAO
    {
        
        public function inserirCliente(Cliente $cliente)
        {
            
            $con = Conexao::getCon();
            $sql = 
            "INSERT INTO clientes (tipo, nome_social, email, nome, cpf, razao_social, cnpj) VALUES (?, ?, ?, ?, ?, ?, ?)";
            
            $con = Conexao::getCon();
            
            $stm = $con->prepare($sql);
            
            if($cliente instanceof ClientePF)
            {
                
                $stm->execute(array
                (
                    
                    $cliente->getTipo(),
                    $cliente->getNomeSocial(),
                    $cliente->getEmail(),
                    $cliente->getNome(),
                    $cliente->getCpf(),
                    NULL,
                    NULL
                    
                ));
                
            }
            else if($cliente instanceof ClientePJ)
            {
                
                $stm->execute(array
                (
                    
                    $cliente->getTipo(),
                    $cliente->getNomeSocial(),
                    $cliente->getEmail(),
                    NULL,
                    NULL,
                    $cliente->getRazaoSocial(),
                    $cliente->getCnpj()
                    
                ));
                
            }
            
        }
        
        public function buscarClientePorId(int $id)
        {
            
            $con = Conexao::getCon();
            
            $sql = "SELECT * FROM clientes WHERE id = ?";
            
            $stm = $con->prepare($sql);
            $stm->execute(array($id));
            
            $registro = $stm->fetch();
            
            if ($registro == NULL)
            {
                
                system("clear");
                
                return "Cliente não encontrado!\n";
                
            }
            
            $cliente = NULL;
            
            if($registro["tipo"] == "F")
            {
                
                $cliente = new ClientePF();
                $cliente->setId($registro["id"]);
                $cliente->setNomeSocial($registro["nome_social"]);
                $cliente->setEmail($registro["email"]);
                $cliente->setNome($registro["nome"]);
                $cliente->setCpf($registro["cpf"]);
                
            }
            else if($registro["tipo"] == "J")
            {
                
                $cliente = new ClientePJ();
                $cliente->setId($registro["id"]);
                $cliente->setNomeSocial($registro["nome_social"]);
                $cliente->setEmail($registro["email"]);
                $cliente->setRazaoSocial($registro["razao_social"]);
                $cliente->setCnpj($registro["cnpj"]);
                
            }
            
            return $cliente;
            
        }
        
        public function listarClientes()
        {
            
            $con = Conexao::getCon();
            
            $sql = "SELECT * FROM clientes";
            
            $stm = $con->prepare($sql);
            $stm->execute();
            $registros = $stm->fetchAll();            
            
            foreach ($this->mapClientes($registros) as $cliente)
            {
                
                print("ID: " . $cliente->getId() . "\n");
                print("Nome Social: " . $cliente->getNomeSocial() . "\n");
                print("E-mail: " . $cliente->getEmail() . "\n");
                
                if($cliente instanceof ClientePF)
                {
                    
                    print("Nome: " . $cliente->getNome() . "\n");
                    print("CPF: " . $cliente->getCpf() . "\n \n");
                    
                }
                else if($cliente instanceof ClientePJ)
                {
                    
                    print("Razão Social: " . $cliente->getRazaoSocial() . "\n");
                    print("CNPJ: " . $cliente->getCnpj() . "\n \n");
                    
                }
                
            }
            
        }
        
        public function excluirCliente(int $id)
        {
            
            $con = Conexao::getCon();
            
            $sql = "DELETE FROM clientes WHERE id = ?";
            
            $stm = $con->prepare($sql);
            $stm->execute(array($id));
            
        }
        
        private function mapClientes(array $registros)
        {
            
            $clientes = array();
            
            foreach ($registros as $registro)
            {
                
                $cliente = NULL;
                
                if($registro["tipo"] == "F")
                {
                    
                    $cliente = new ClientePF();
                    $cliente->setId($registro["id"]);
                    $cliente->setNomeSocial($registro["nome_social"]);
                    $cliente->setEmail($registro["email"]);
                    $cliente->setNome($registro["nome"]);
                    $cliente->setCpf($registro["cpf"]);
                    
                }
                else if($registro["tipo"] == "J")
                {
                    
                    $cliente = new ClientePJ();
                    $cliente->setId($registro["id"]);
                    $cliente->setNomeSocial($registro["nome_social"]);
                    $cliente->setEmail($registro["email"]);
                    $cliente->setRazaoSocial($registro["razao_social"]);
                    $cliente->setCnpj($registro["cnpj"]);
                    
                }
                
                array_push($clientes, $cliente);
                
            }
            
            return $clientes;
            
        }
        
    }
    
?>