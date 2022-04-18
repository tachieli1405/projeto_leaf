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
<link href="./assets/css/esqueci.css" rel="stylesheet" />

    <title>Resetar Senha Leaf Agriculture</title>


</head>
   

<body>

<div class="container">
    <div class="card card-resetar mx-auto text-center bg-light">
        <div class="card-header mx-auto bg-light">

            <span class="ds"> <img src="imagens/logo.png" class="w-75" alt="Logo"> </span><br/>

                        <h1 class="gh"> Resetar  senha</h1> 


                        <?php 
                        if(isset($_SESSION['nao_autenticado'])): ?>
                            <p><small><small> E-mail ou Senha Inválidos!  </small></small></p>
                       <?php 
                        endif;
                        unset($_SESSION['nao_autenticado']);
                        ?>
                         
                        

        </div>

        <div class="card-body">
            <form action="login.php" method="post">

                <div class="input-group form-group">
                                    
                     <input type="text" name="email" class="form-control" placeholder="Informe o seu E-mail">

               </div>
                

                <div class="form-group teste" >

                    <input type="submit" name="btn" value="Resetar Senha" class="btn btn-outline-resetar float-right resetar_btn">

                </div>

            </form>

        </div>

    </div>

</div>


</body>


</html>

