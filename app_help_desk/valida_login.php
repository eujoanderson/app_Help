<?php

    //Acessa a regiao de memoria relaciona a instancia do navegador
    session_start();


    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;

    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuario');

    //usuarios do sistema
    $usuarios_app = array(
        array('id'=> 1 ,'email' => 'adm@teste.com.br', 'senha' => '123', 'perfil_id' => 1),
        array('id'=> 2 ,'email' => 'user@teste.com.br', 'senha' => '123','perfil_id' => 1),
        array('id'=> 3 ,'email' => 'jose@teste.com.br', 'senha' => '123','perfil_id' => 2),
        array('id'=> 4 ,'email' => 'maria@teste.com.br', 'senha' => '123', 'perfil_id' => 2)
    );


    //pecorrer o array para ver se o usuario informado existe
    foreach($usuarios_app as $user){


            //recupeção dos indices nos arrays
        //echo 'usuario app: '. $user['email'] . '/' .$user['senha'];

                                //email passada via formulario
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        } 
    }

    if($usuario_autenticado){
        echo 'Usuario autenticado';
        $_SESSION['autenticado'] = 'Sim';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;


       header('Location: home.php');
    }
    else{

        $_SESSION['autenticado'] = 'Não';

        //funcao nativa para forçar o redirecionamento
        header('Location: index.php?login=erro');
    }

    




    
?>