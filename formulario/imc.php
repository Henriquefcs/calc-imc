<!DOCTYPE html>
<html>
<head>
	<title>Calculadora IMC - Desafio Inicial</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		body {
	padding-top: 50px;
	 }
 	.principal {
	padding: 40px 15px;
	text-align: center;
	}
	.retorno{
		padding:  20px;
		border: 1px solid #ccc;
	}
	</style>
    
	<div class="container">
		<div class="principal">
			<div class="row">
				<h1>Calculadora de IMC</h1>
                    <div class="retorno">
                        <?php 

                        if(isset($_POST['peso']) && isset($_POST['altura'])){
                            
                            $peso   = $_POST['peso'];
                            $altura = $_POST['altura'];
                            $imc	= $peso	/ ($altura * $altura);
                            $text   = "Sua situação é de... ";

                            echo "Peso : <strong>" . $peso. "</strong>";
                            echo '<br>';
                            echo "Altura : <strong>" . $altura . "</strong>";
                            echo '<br>';
                            echo "Seu IMC é de : <strong>" . number_format($imc, 2, '.','') . "</strong>";
                            echo '<br>';
                        };
                            
                            if(number_format($imc, 2, '.','') <= 16.99){
                                echo $text . "<strong>Muito abaixo do peso</strong>";
                            }elseif(number_format($imc, 2, '.','') == 17 or number_format($imc, 2, '.','') <= 18.49){
                                echo $text . "<strong>Abaixo do Peso</strong>";
                            }elseif(number_format($imc, 2, '.','') == 18.5 or number_format($imc, 2, '.','') <= 24.99){
                                echo $text . "<strong>Peso normal</strong>";
                            }elseif(number_format($imc, 2, '.','') == 25 or number_format($imc, 2, '.','') <= 29.99){
                                echo $text . "<strong>Acima do peso</strong>";
                            }elseif(number_format($imc, 2, '.','') == 30 or number_format($imc, 2, '.','') <= 34.99){
                                echo $text . "<strong>Obesidade I</strong>";
                            }elseif(number_format($imc, 2, '.','') == 35 or number_format($imc, 2, '.','') <= 39.99){
                                echo $text . "<strong>Obesidade II (severa)</strong>";
                            }else{
                                echo $text . "<strong>Obesidade III (mórbida)</strong>";
                            };
                        ?>
                    </div>
            </div>
		</div>	
 	</div>
 	<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>