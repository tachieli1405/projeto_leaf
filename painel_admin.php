<?php 

session_start();
include('verificar_login.php');


if($_SESSION['cargo_usuario'] != 'Administrador' && $_SESSION['cargo_usuario'] != 'Gerente'){
	header('Location:index.php');
	exit();
}

 ?>


<!DOCTYPE html>

<html lang="pt-br">

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


  <title>
    Dashboard
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->


  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->


  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->


  <link href="./assets/css/arq.css" rel="stylesheet" />


</head>


<body class="">


  <div class="wrapper ">

    <div class="main-panel y">


      <!-- Navbar -->

      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent tt">

        <div class="container-fluid tt"> 

          <div class="logo ui"> 

        <img src="imagens/logo.png" class="simple-text  logoinig logo-mini"   alt="Logo">
       
      </div>
         
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">
             
              <li class="nav-item btn-rotate dropdown"> 

                <a class="nav-link dropdown-toggle dd tt" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                	<?php echo $_SESSION['nome_usuario']; ?>
                  
                  <p>

                    <span class="d-lg-none d-md-block">Some Actions</span>
                    
                  </p>

                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

                  <a class="dropdown-item" href="logout.php">Sair</a>

                </div>

              </li>
             
            </ul>

          </div>

        </div>

      </nav>



      <!-- Fim Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->

<div class="content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">


                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-globe text-warning"></i>
                                    </div>

                                </div>


                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Cpu</p>
                                        <p class="card-title">Processamento
                                        <p>

                                    </div>

                                </div>

                             </div>


                            <div>
                                <canvas id="myChart" style="max-width: 500px; height: 400px"></canvas>
                            </div>

                        </div>

                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-refresh"></i> Atualização

                            </div>

                        </div>

                   </div>

                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">

                                <div class="col-5 col-md-4">

                                    <div class="icon-big text-center icon-warning">

                                        <i class="nc-icon nc-money-coins text-success"></i>

                                    </div>

                                </div>


                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Dolar</p>
                                        <p class="card-title">Monitoramento
                                        <p>

                                    </div>

                                </div>

                            </div>

                            <div>
                                <canvas id="myChart2" style="max-width: 500px; height: 400px"></canvas>
                            </div>

                        </div>

                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                            <i class="fa fa-refresh"></i> Atualização

                            </div>

                        </div>

                    </div>

                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">


                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">

                                        <i class="nc-icon nc-vector text-danger"></i>

                                    </div>

                                </div>


                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Acertos e Erros</p>
                                        <p class="card-title">Processando
                                        <p>

                                    </div>

                                </div>

                            </div>

                            <div>
                                <canvas id="myChart3" style="max-width: 500px;"></canvas>
                            </div>

                        </div>

                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                            <i class="fa fa-refresh"></i> Atualização

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">


                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">

                                        <i class="nc-icon nc-favourite-28 text-primary"></i>

                                    </div>

                                </div>

                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Batimentos Cardiacos</p>
                                        <p class="card-title">Monitoramento
                                        <p>

                                    </div>

                                </div>

                            </div>

                            <div>
                                <canvas id="myChart4" style="max-width: 500px; height: 400px"></canvas>
                            </div>

                        </div>

                        <div class="card-footer ">
                            <hr>
                            <div class="stats">

                                <i class="fa fa-refresh"></i> Atualização

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                    
                                <li>
                                    <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                                </li>

                            </ul>

                        </nav>

                        <div class="credits ml-auto">

              <span class="copyright">
                ©


                <script>
                  document.write(new Date().getFullYear())
                </script>, Projeto <i class="fa fa-heart heart"></i> Tachieli


              </span>
                        </div>

                    </div>

                </div>

            </footer>

        </div>

    </div>


    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>


    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>


    <!-- Chart JS -->
    <script src="assets/js/plugins/chartjs.min.js"></script>


    <!--  Notifications Plugin    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->


    <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>


    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>

    

    <script src="assets/demo/demo.js"></script>

    <script>

        const ctxP = document.getElementById("myChart").getContext("2d");
        const ctxP2 = document.getElementById("myChart2").getContext("2d");
        const ctxP3 = document.getElementById("myChart3").getContext("2d");
        const ctxP4 = document.getElementById("myChart4").getContext("2d");

        const datas = [
            '12:00',
            '13:40',
            '14:40',
            '15:40',
            '16:40',
            '17:40'
        ]

        new Chart(ctxP, {
            type: 'line',
            data: {
                labels: datas,
                datasets: [{
                    data: [300, 50,13,19,39,42,34],
                    backgroundColor: "#fbc658",
                    hoverBackgroundColor: "#fbc658",
                    borderColor: '#fbc658'
                }]
            },


            fill: true,
            tension: 0.1,
            options: {
                responsive: true,
                scales:{
                    xAxes: [{
                        type: 'time',
                        time: {
                            unit: 'hour',
                            displayFormats: {
                                hour: 'HH:mm'
                            }
                        }
                    }]
                }
            }
        });


        const data = {
            labels: [
                'Erros',
                ''
            ],
            datasets: [{
                label: '...',
                data: [0, 100],
                backgroundColor: [
                    'rgb(255,0,0)',
                    'rgb(38,245,13)'
                ],
                hoverOffset: 4
            }]
        };


        const config2 = {
            type: 'bubble',
            data: data,
        };


        const config3 = {
            type: 'doughnut',
            data: data,
        };


        const config4 = {
            type: 'bubble',
            data: data,
        };


        new Chart(ctxP2, config2);
        new Chart(ctxP3, config3);
        new Chart(ctxP4, config4);


    </script>


</div>


</body>


</html>
