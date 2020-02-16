<body>
	<div class="container">
		<div class="row main">
			<div class="panel-heading">
				<div class="panel-title text-center">
					<h1 class="title">Login</h1>
					<hr />
				</div>
			</div> 
			<div class="main-login main-center">
				<form class="form-horizontal" method="post" action="<?= base_url() ?>Welcome/store">
					
					<div class="form-group">
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="login" id="login"  placeholder="Digite seu Login"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="password" id="password"  placeholder="Digite sua Senha"/>
							</div>
						</div>
					</div>

					<div class="form-group ">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Entrar</button>
					</div>
					<div class="login-register">Ainda não tem registro? 
						<a href="<?= base_url() ?>Cadastro/index">Clique aqui</a>
						</div>
				</form>
			</div>
		</div>
	</div>
</body>