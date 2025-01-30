<?php
    
    require_once("dao/VeiculosDAO.php");
    require_once "modelo/Carro.php";
    require_once "modelo/Moto.php";
    
    
    $opcao = "";
    
    do
    {
        
        print("\033[1;44m ╔═══════════════╣\033[m  Cadastro de Veiculos  \033[1;44m╠══════════════════╗ \033[m \n");
        print("\033[1;44m ║ \033[m                                                         \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                    Escolha uma opção:                   \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                         \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                   1- Cadastrar Carro                    \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                         \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                    2- Cadastrar Moto                    \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                         \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                   3- Listar Veiculos                    \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                         \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                    4- Buscar Veiculo                    \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                         \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                   5- Excluir Veiculo                    \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                         \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                         0- Sair                         \033[1;44m ║ \033[m \n");
        print("\033[1;44m ║ \033[m                                                         \033[1;44m ║ \033[m \n");
        print("\033[1;44m ╚═══════════════════════════════════════════════════════════╝ \033[m \n");
        $opcao = readline();
        system("clear");
        
        switch ($opcao) 
        {
            
            case 1:
                
                
                $veiculoDAO = new VeiculoDAO();
                $veiculoDAO->inserirVeiculo($veiculo);
                
                print("Carro inserido com sucesso! \n");
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 2:
                
                
                $veiculoDAO = new VeiculoDAO();
                $veiculoDAO->inserirVeiculo($veiculo);
                
                print("Veiculo inserido com sucesso! \n");
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 3:
                
                $veiculoDAO = new VeiculoDAO();
                
                $veiculos = $veiculoDAO->listarVeiculos();
                
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 4:
                
                $veiculoDAO = new VeiculoDAO();
                
                print($veiculoDAO->buscarVeiculoPorId(readline("Informe o ID do Veiculo: ")));
                
                readline("Pressione Enter para continuar...");
                system("clear");
                
            break;
            
            case 5:
                
                $veiculoDAO = new VeiculoDAO();
                
                $veiculoDAO->excluirVeiculo(readline("Informe o ID do Veiculo: "));
                
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