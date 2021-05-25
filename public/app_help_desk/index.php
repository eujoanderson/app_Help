
<html>
  <head>
	<meta charset="utf-8" />
	<title>App Help Desk</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style>
	  .card-login {
		padding: 30px 0 0 0;
		width: 350px;
		margin: 0 auto;
	  }
	</style>

	<!--<script src="//code.jivosite.com/widget/qgJO1iVJsX" async></script>-->
  </head>

  <body>

	<nav class="navbar navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">
		<img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
		App Help Desk
	  </a>
	</nav>

	<div class="container">    
	  <div class="row">

		<div class="card-login">
		  <div class="card">
			<div class="card-header">
			  Login
			</div>
			<div class="card-body">
			  <!-- Destino de um submit de um formulario, ou seja para onde esse formulario será submetido (metodo usado POST) --> 
			  <form action="http://localhost/app_help_desk/valida_login.php" method="post">  
				<div class="form-group">
				  <input name="email" type="email" class="form-control" placeholder="E-mail">
				</div>
				<div class="form-group">
				  <input name="senha" type="password" class="form-control" placeholder="Senha">
				</div>

				<?php
					  //funcao Nativa - verifica se um determinado indice está setado
					  if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>
				<div class="text-danger">
					Usuario ou senha Invalido(s)
				</div>

				<? } ?>

				<? 
					//funcao Nativa - verifica se um determinado indice está setado
				if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>
				<div class="text-danger">
					Faça login antes de acessar as paginas protegida(s)
				</div>

				<? } ?>

				<button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
			  </form>

			</div>
		  </div>
		</div>
	</div>
  </body>
</html>