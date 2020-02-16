<body>
<ul class="breadcrumb">
	<a href="<?= base_url() ?>Dashboard"><li class="disabled">Dashboard </li></a>
		<li class="active">| Registro de Pontos</li>
</ul>
	<div class="container">
		<div class="row main">
			<div class="main-login main-center">
				<form class="form-horizontal" method="post" action="<?= base_url() ?>Ponto/store">
					
					<div class="form-group">
						<div class="cols-sm-10">
							<div class="input-group">
								<label for="">Chegada na Empresa</label>
								<input type="datetime-local" class="form-control" name="entry" id="entry"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="cols-sm-10">
							<div class="input-group">
							<label for="">Saída para Almoço</label>
								<input type="datetime-local" class="form-control" name="elunch" id="elunch"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="cols-sm-10">
							<div class="input-group">
							<label for="">Retorno do Almoço</label>
								<input type="datetime-local" class="form-control" name="rlunch" id="rlunch"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="cols-sm-10">
							<div class="input-group">
							<label for="">Saída da Empresa</label>
								<input type="datetime-local" class="form-control" name="exit" id="exit"/>
							</div>
						</div>
					</div>

					<div class="form-group ">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Registrar</button>
					</div>
				
				</form>
			</div>
		</div>
	</div>
</body>