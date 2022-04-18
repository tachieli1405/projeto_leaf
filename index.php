<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>

   
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <title>Login Leaf Agriculture</title>

</head>

<body>



<div class="container">
    <div class="card card-login mx-auto text-center bg-light">
        <div class="card-header mx-auto bg-light">

            <span class="ds"> <img src="imagens/logo.png" class="w-75" alt="Logo"> </span><br/>

                        <h1 class="gh"> Faça Seu Login</h1>



                        <?php 
                        if(isset($_SESSION['nao_autenticado'])): ?>
                            <p><small><small> Usuário ou Senha Inválidos!  </small></small></p>
                       <?php 
                        endif;
                        unset($_SESSION['nao_autenticado']);
                        ?>
                         
                        
    </div>



        <div class="card-body">

            <form action="login.php" method="post">
                <div class="input-group form-group">
                                    
                    <input type="text" name="usuario" class="form-control" placeholder="Usuário">

                </div>



                <div class="input-group form-group">
                    
                    <input type="password" name="senha" class="form-control" form-control-lg placeholder="Senha">

                </div>
                


                <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->

      <div class="form-check">

        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />

        <label class="form-check-label hy" for="form2Example31"> Lembre me </label>

      </div>

    </div>


    <div class="col-esqueceu">

   <a  class="hy" href="esquecisenha.php">Esqueceu sua senha?</a>

    </div>

  </div>

                <div class="form-group">

                    <input type="submit" name="btn" value="Login" class="btn btn-outline-vr btn-block  login_btn">

                </div> 


                <div class="hy"> 

                        Não é Cadastrado? <a class="hy" href="cadastro.php " >Crie uma Conta</a>
                </div>

            </form>
       

</body>


</html>
