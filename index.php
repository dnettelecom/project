
<?php

//$curl = curl_init();

//curl_setopt_array($curl, array(
//  CURLOPT_URL => 'https://sistema.playmovel.com.br/api/alterarsenha',
//  CURLOPT_RETURNTRANSFER => true,
//  CURLOPT_ENCODING => '',
//  CURLOPT_MAXREDIRS => 10,
//  CURLOPT_TIMEOUT => 0,
//  CURLOPT_FOLLOWLOCATION => true,
//  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//  CURLOPT_CUSTOMREQUEST => 'POST',
//  CURLOPT_POSTFIELDS => 'cpf=29093498886&parceiro=D-NET&password=dnet963812&token=5abb6f5663c2258a85dfd1d92ad5ef0ae7a28e8e5443456658',
//));
//
//$response = curl_exec($curl);

//curl_close($curl);
//echo $response;

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
	  <link rel="shortcut icon" href="img/dnetmovel.jpeg">

	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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

<script>
  function getPassword() {
      var chars = "0123456789abcdefghijklmnopqrstuvwxyz";
      var passwordLength = 8;
      var password = "";

      for (var i = 0; i < passwordLength; i++) {
        var randomNumber = Math.floor(Math.random() * chars.length);
        password += chars.substring(randomNumber, randomNumber + 1);
      }
      document.getElementById('password').value = password
    }
</script>
  </head>
  <body class="text-center">
    
    <!--conteudo  -->
   
<div class="container">

  <form id="form_password" class="form" method="post" onsubmit="return validarPost()" action="./alterar_senha.php">
  <div>
    <img class="mb-4" src="img/dnetmovel.jpeg" alt="" width="150" >
    <h1>Alterar Senha Cliente</h1>
    </div>
  

    <div class="row">
      <div class="col">
        <!-- <label for="exampleInputEmail1" class="form-label">Nome (Sem Abreviar)</label> -->
       <!-- <label title="29093498886"> 29093498886</label> -->
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" required >
        <input type="text" class="form-control" name="password" id="password" placeholder="Senha"  required >

      </div>
   
    </div>  <!-- fecha row -->
  
  <br>
  <div class="d-grid gap-2">
  <button id="btn" class="btn btn-secondary" onclick="getPassword()" type="button">Gerar Senha</button>
  <button  id="submit" class="btn btn-primary" type="submit">Alterar Senha</button>
</div>
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

