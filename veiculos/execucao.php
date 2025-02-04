<?php
    
    require_once("modelo/Carro.php");
    require_once("modelo/Moto.php");
    
    require_once("dao/VeiculosDAO.php");
    
    $opcao = "";
    
    do
    {
        
        print("\033[1;44m ╔══════════════════╣\033[m  Cadastro de Veículos  \033[1;44m╠═════════════════╗ \033[m \n");
        print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                     Escolha uma opção:                    \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                     1- Cadastrar Carro                    \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                     2- Cadastrar Moto                     \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                    3- Listar Veículos                     \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                     4- Buscar Veículo                     \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                    5- Excluir Veículo                     \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                          0- Sair                          \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                           \033[1;44m ║ \033[m \n");
        print("\033[1;44m ╚═════════════════════════════════════════════════════════════╝ \033[m \n");
        $opcao = readline();
        system("clear");
        
        switch ($opcao) 
        {
            
            case 1:
                
                $carro = new Carro();
                $carro->setMarca(readline("Informe a marca: "));
                system("clear");
                
                $carro->setModelo(readline("Informe o modelo: "));
                system("clear");
                
                $carro->setAno(readline("Informe o ano: "));
                system("clear");
                
                $carro->setMotor(readline("Informe o motor: "));
                system("clear");
                
                $carro->setTracao(readline("Informe a tração: "));
                system("clear");
                
                $carro->setCilindrada(readline("Informe a cilindrada: "));
                system("clear");
                
                $carro->setHp(readline("Informe os HP: "));
                system("clear");
                
                $VeiculosDAO = new VeiculosDAO();
                $VeiculosDAO->inserirVeiculo($carro);    
                
                
                
                print("Carro inserido com sucesso! \n");
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 2:
                
                $moto = new Moto();
                $moto->setMarca(readline("Informe a marca: "));
                system("clear");
                
                $moto->setModelo(readline("Informe o modelo: "));
                system("clear");
                
                $moto->setAno(readline("Informe o ano: "));
                system("clear");
                
                $moto->setMotor(readline("Informe o motor: "));
                system("clear");
                
                $moto->setCilindrada(readline("Informe a cilindrada: "));
                system("clear");
                
                $moto->setHp(readline("Informe os HP: "));
                system("clear");
                
                $moto->setCor(readline("Informe a cor: "));
                system("clear");
                
                $VeiculosDAO = new VeiculosDAO();
                $VeiculosDAO->inserirVeiculo($moto);
                
                print("Moto inserido com sucesso! \n");
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 3:
                
                $veiculoDAO = new VeiculosDAO();
                
                print("Veículos Cadastrados: \n\n");
                
                $veiculoDAO->listarVeiculos();
                
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 4:
                
                $veiculoDAO = new VeiculosDAO();
                
                print($veiculoDAO->buscarVeiculoPorId(readline("Informe o ID do veiculo: ")));
                
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 5:
                
                $veiculoDAO = new VeiculosDAO();
                
                $veiculoDAO->excluirVeiculo(readline("Informe o ID do veiculo: "));
                
                print("Veiculo excluído com sucesso! \n");
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 0:
                
                system("clear");
                
                print("Salvando Alterações... \n");
                sleep(rand(1, 3));
                
                system("clear");
                
            break;
            
            default:
                
                print ("Valor informado errado! \n");
                
                readline("Pressione Enter para continuar...");
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