<?  session_start();

	//Se não existir retornará true, caso exista retornará false
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'Sim'){ //se $_session é diferente de Sim, caso seja forçar o redirecionamento
		header('Location: index.php?login=erro2');
    }
?>