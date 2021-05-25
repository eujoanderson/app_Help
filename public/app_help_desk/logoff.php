<?php

    session_start();

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';


    //remover indeicces do array d sessão
    //unset(Array, indice);

    unset($_SESSION['x']);//para remover o indice apneas se existir

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';


    //destriur a variavel de sessão
    //session_destroy();


    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */

    session_destroy();//será destruída
    //forçar um redirecionamento:
    header('Location:index.php');

?>