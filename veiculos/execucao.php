<?php
    
    require_once("modelo/Carro.php");
    require_once("modelo/Moto.php");
    
    require_once("dao/VeiculosDAO.php");
    
    $opcao = "";
    
    do
    {
        
        echo "\033[1;44m ╔══════════════════════════════════════════════╗ \033[m\n";
        echo "\033[1;44m ║ \033[m          🚗 CADASTRO DE VEÍCULO 🏍️          \033[1;44m ║ \033[m\n";
        echo "\033[1;44m ╠══════════════════════════════════════════════╣ \033[m\n";
        echo "\033[1;44m ║ \033[m 1 - CADASTRO DE CARRO                      \033[1;44m ║ \033[m\n";
        echo "\033[1;44m ║ \033[m 2 - CADASTRO DE MOTO                       \033[1;44m ║ \033[m\n";
        echo "\033[1;44m ║ \033[m 3 - LISTAR VEÍCULOS                        \033[1;44m ║ \033[m\n";
        echo "\033[1;44m ║ \033[m 4 - BUSCAR UM VEÍCULO                      \033[1;44m ║ \033[m\n";
        echo "\033[1;44m ║ \033[m 5 - EXCLUIR UM VEÍCULO                     \033[1;44m ║ \033[m\n";
        echo "\033[1;44m ║ \033[m 0 - SAIR                                   \033[1;44m ║ \033[m\n";
        echo "\033[1;44m ╚══════════════════════════════════════════════╝ \033[m\n";
        
        //outra possivel opção de menu, 
        // print("\033[1;44m ╔══════════════════╣\033[m  Cadastro de Veículos  \033[1;44m╠═════════════════╗ \033[m \n");
        // print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                     Escolha uma opção:                    \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                     1- Cadastrar Carro                    \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                     2- Cadastrar Moto                     \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                    3- Listar Veículos                     \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                     4- Buscar Veículo                     \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                    5- Excluir Veículo                     \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                          0- Sair                          \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        // print("\033[1;44m ╚═════════════════════════════════════════════════════════════╝ \033[m \n");
        $opcao = readline();
        system("clear");
        
        switch ($opcao) 
        {
            
            case 1:
                
                $carro = new Carro();
                $carro->setMarca(readline("INFORME A MARCA : "));
                system("clear");
                
                $carro->setModelo(readline("INFORME O MODELO : "));
                system("clear");
                
                $carro->setAno(readline("INFORME O MOTOR : "));
                system("clear");
                
                $carro->setMotor(readline("INFORME O MOTOR : "));
                system("clear");
                
                $carro->setTracao(readline("INFORME A TRAÇÃO : "));
                system("clear");
                
                $carro->setCilindrada(readline("INFORME A CILINDRADA : "));
                system("clear");
                
                $carro->setHp(readline("INFORME A POTÊNCIA (HPs): "));
                system("clear");
                
                $VeiculosDAO = new VeiculosDAO();
                $VeiculosDAO->inserirVeiculo($carro);    
                
                
                
                print("CARRO CADASTRADO COM SUCESSO ! \n");
                readline("PRESSIONE ENTER PARA CONTINUAR ... ");
                system("clear");
                
            break;
            
            case 2:
                
                $moto = new Moto();
                $moto->setMarca(readline("INFORME A MARCA : "));
                system("clear");
                
                $moto->setModelo(readline("INFORME O MODELO : "));
                system("clear");
                
                $moto->setAno(readline("INFORME O ANO : "));
                system("clear");
                
                $moto->setMotor(readline("INFORME O MOTOR : "));
                system("clear");
                
                $moto->setCilindrada(readline("INFORME A CILINDRADA : "));
                system("clear");
                
                $moto->setHp(readline("INFORME A POTÊNCIA (HPs) : "));
                system("clear");
                
                $moto->setCor(readline("INFORME A COR : "));
                system("clear");
                
                $VeiculosDAO = new VeiculosDAO();
                $VeiculosDAO->inserirVeiculo($moto);
                
                print("MOTO CADASTRADA COM SUCESSO ! \n");
                readline("PRESSIONE ENTER PARA CONTINUAR ... ");
                system("clear");
                
            break;
            
            case 3:
                
                $veiculoDAO = new VeiculosDAO();
                
                print("VEÍCULOS CADASTRADOS : \n\n");
                
                $veiculoDAO->listarVeiculos();
                
                readline("PRESSIONE ENTER PARA CONTINUAR ... ");
                system("clear");
                
            break;
            
            case 4:
                
                $veiculoDAO = new VeiculosDAO();
                
                print($veiculoDAO->buscarVeiculoPorId(readline("INFORME O ID DO VEÍCULO : ")));
                
                readline("PRESSIONE ENTER PARA CONTINUAR ... ");
                system("clear");
                
            break;
            
            case 5:
                
                $veiculoDAO = new VeiculosDAO();
                
                $veiculoDAO->excluirVeiculo(readline("INFORME O ID DO VEÍCULO : "));
                
                print("VEÍCULO EXCLUIDO COM SUCESSO ! \n");
                readline("PRESSIONE ENTER PARA CONTINUAR ... ");
                system("clear");
                
            break;
            
            case 0:
                
                system("clear");
                
                print("SALVANDO ALTERAÇÕES ... \n");
                sleep(rand(1, 3));
                
                system("clear");
                
            break;
            
            default:
                
                print ("O VALOR INFORMADO FOI INVALIDADO ! \n");
                
                readline("PRESSIONE ENTER PARA CONTINUAR ... ");
                system("clear");
                
            break;
            
        }
        
    } while ($opcao != 0)
    
    
    
    
    
    
    
    
    
    
    
    // Teste de Conexão
    
    // require_once("util/conexao.php");
    
    // $conexao = new Conexao();
    // $con = $conexao->getCon();
    
    // print_r($con);
    
?>
