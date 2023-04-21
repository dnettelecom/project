
<?php
//função para mudar a senha
function alterar_senha($cpf,$password){

    $parceiro = 'D-NET';
    $token = DNET_TOKEN;

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sistema.playmovel.com.br/api/alterarsenha',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'cpf='.$cpf.'&parceiro='.$parceiro.'&password='.$password.'&token='.$token.'',
));

$response = curl_exec($curl);
// Check HTTP status code
if (!curl_errno($curl)) {
    switch ($http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE)) {
      case 230:  # Success
        echo '<div class="alert alert-success" role="alert">
        A senha do cliente: <b>'.$cpf.'</b> foi modificada! Nova senha:  <b>'.$password.'</b>
        </div>';
        break;
    case 500:  # CPF Inválido
        echo '<div class="alert alert-warning" role="alert">
        <b>CPF inválido!</b> A senha não pode ser modificada!
        </div>';
        break;
    case 401:  # Token error
        echo '<div class="alert alert-warning" role="alert">
        <b>O token não foi autorizado!</b> Contate seu administrador!
        </div>';
        break;

      default:
      echo '<div class="alert alert-danger" role="alert">
    Algo deu errado! <b>Status:'.$http_code.'</b>
  </div>';
       
       
    }
  }
curl_close($curl);

}

?>

<!doctype html>
<html lang="en">
  <head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="">
	  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	  <meta name="generator" content="Hugo 0.98.0">
	  <title>Password</title>
	  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="https://sistema.dnet.net.br/css/font-awesome.css">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	  <link rel="shortcut icon" href="img/dnetmovel.jpeg">

	  <!-- <script>
		  function validarPost(){
			  if(grecaptcha.getResponse() != "") return true;

			  // alert("Prove que vpocê não é um robo!")
			  swal("Assim não da!", "Você precisa provar que não é um robo!", "error");
			  return false
		  }
    </script> -->
 
	  
	  <style>
      body{
        background-color: #ebebeb;
        color: #000;
      }

      .container{
        padding-top: 20px;
        width: 800px;
        
      }
      .text-muted{
        color: #fff;
      }
		 
      
      .button{
        background-color: #001863;
        border: 0;
        border-radius: 40px;
        height: 50px;
      }
		  .my-float{
			  margin-top:16px;
		  }
		  .form-check-label{
			  float:left;
		  }
      .form-control{
        margin-top: 20px;
      }
      .form-label{
        margin-top: 10px;

      }
	  </style>

  </head>
  <body class="text-center">
    <!--conteudo  -->
   
<div class="container">
<form id="form_password" class="form" method="post" onsubmit="return validarPost()" action="./alterar_senha.php">
  <div>
    <img class="mb-4" src="img/dnetmovel.jpeg" alt="" width="150" >
    <h1>Alterar senha cliente</h1>
    </div>
  
    <div class="row">
   
<?php

if (isset($_POST['cpf']) && !empty($_POST['password'])) {
	
	$cpf = addslashes($_POST['cpf']);
	$password = addslashes($_POST['password']);

	alterar_senha($cpf,$password);
    
}else{
	echo '<h1>Não enviado!</h1>';
}

?><br>
    <p class="mt-5 mb-3 text">Todos os direitos reservados &copy; D-NET TELECOM </p>
  </form>
</div>

</a>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>
