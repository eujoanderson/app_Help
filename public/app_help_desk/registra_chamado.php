<?php

    session_start();

    //implode('#', $_POST); //estamos trabalhando na montagem do texto
    $titulo = str_replace('#', ' -', $_POST['titulo']);
    $categoria = str_replace('#', ' - ', $_POST['categoria']);
    $descricao = str_replace('#', ' - ', $_POST['descricao']);


    $texto = $_SESSION['id']. '#' .$titulo. '#' .$categoria. '#' .$descricao. PHP_EOL;
    
    //nome do arquivo(caso nao exista ele será criado)
    //abrindo o arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

    //escrevendo o arquivo
    fwrite($arquivo, $texto);
    fclose($arquivo);
    //fechando o arquivo
    header('Location: abrir_chamado.php');
?>