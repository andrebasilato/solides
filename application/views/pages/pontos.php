<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Solides | Registro de Pontos</title>
	</head>
	<body>
    <ul class="breadcrumb">
        <a href="/dashboard"><li class="disabled">Dashboard</li></a>
         > <li class="active">Registro de Pontos</li>
    </ul>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="<?= base_url() ?>Ponto/store">
						
						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
                                    <label for="">Chegada na Empresa</label>
									<input type="datetime-local" class="form-control" name="entry" id="name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
                                <label for="">Saída para Almoço</label>
									<input type="datetime-local" class="form-control" name="elunch" id="email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
                                <label for="">Retorno do Almoço</label>
									<input type="datetime-local" class="form-control" name="rlunch" id="username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="cols-sm-10">
								<div class="input-group">
                                <label for="">Saída da Empresa</label>
									<input type="datetime-local" class="form-control" name="exit" id="password"/>
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
</html>

<style>

body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #d3d3d3;
 	font-family: 'Oxygen', sans-serif;
}

.main{
 	margin-top: 70px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
    width: 100%;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

input[type="time"] {
    width: 100%;
    height: 25%;
}

input[type="datetime-local"] {
    width: 100%;
    height: 25%;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 40px 40px;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}


</style>