<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
    }
    else{
        $logado = $_SESSION['email'];
    }  
  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-1GTMN8YX7Z"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1GTMN8YX7Z');
        </script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cedro News</title><!-- Google tag (gtag.js) -->
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #EEAD2D;">
            <div class="container">
                <a class="navbar-brand" href="index.php">Cedro news</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contato</a></li>
                        <?php 
                            if((isset($_SESSION['email']) == true) and (isset($_SESSION['senha']) == true)){
                                echo "<li class='nav-item'><a class='nav-link' href='perfil.php'  style='color: white; font-weight: bold;'>Conta</a></li>";
                                echo "<li class='nav-item'><a class='nav-link' href='sair.php'  style='color: white; font-weight: bold;'>Sair</a></li>";
                                
                            }else{
                                echo "<li class='nav-item'><a class='nav-link' href='login.php'  style='color: white; font-weight: bold;'>Login</a></li>";
                            }
                            ?>
                        <!-- <li class="nav-item"><a class="nav-link" href="login.php"  style="color: white; font-weight: bold;">Login</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container row">
                <div class="row">
                    <!--Pre??o do dolar hoje-->
                    <div class="text-center">
                        <marquee behavior="" direction="">Agora, bandidos tentam assalto a carro forte e proj??teis atingem Instituto Federal</marquee>
                    </div>
                    
                </div>
                
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <div class="card mb-4">
                        <a href="materiadodia.php"><img class="card-img-top" src="assets/assalt.jpg" alt="" /></a>
                        <div class="card-body">
                            <div class="small text-muted">18 de Janeiro, 2023</div>
                            <h2 class="card-title">Troca de tiros entre policiais e assaltantes deixa 2 mortos e um ferido</h2>
                            <p class="card-text">Na tarde desta quarta feira assaltantes planejavam assalto a carro forte por??m foram abordados por uma blitz e...</p>
                            <a class="btn btn-primary" href="materiadodia.php">Continuar lendo ???</a>
                        </div>
                    </div>
                    
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="campeonatos.php"><img class="card-img-top" src="assets/camp-15.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">15 de Janeiro, 2023</div>
                                        <h2 class="card-title h4">Acontece a primeira rodada do Campeonato dos viajantes</h2>
                                        <p class="card-text">A primeira rodada do campeonato dos viajantes ocorreu no ultimo dia 15, no balneario paraiso dos amigos, com um total de 5 confrontos das equipes masculinas..</p>
                                        <a class="btn btn-primary" href="campeonatos.php">Veja os resultados ???</a>
                                    </div>
                                </div> 
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="assets/sec.jpeg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">16 de Janeiro, 2023</div>
                                    <h2 class="card-title h4">Secretaria de Sa??de ir?? come??ar a vacina????o com crian??as de 1 a 2 anos contra Covid-19</h2>
                                    <p class="card-text">O cuidado com a sa??de das nossas crian??as ?? prioridade. Por isso, a gest??o municipal est?? iniciando a vacina????o de crian??as de 1 a 2 anos contra a Covid-19. .</p>
                                    <a class="btn btn-primary" href="#!">Continuar lendo ???</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="assets/matricula.png" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">16 de Janeiro, 2023</div>
                                    <h2 class="card-title h4">Pr??ximo ao inicio do ano letivo de 2023, as escolas p??blicas de cedro tem matriculas abertas at?? o dia 20 de Janeiro, nesta sexta.</h2>
                                    <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p> -->
                                    <a class="btn btn-primary" href="#!">Continuar lendo ???</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="assets/camp-22.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">22 de Janeiro, 2023</div>
                                    <h2 class="card-title h4">Segunda rodada do campeonato dos viajantes acontece no pr??ximo domingo.</h2>
                                    <p class="card-text">Segue o mata mata com mais de 40 times no ??guas Park paraiso dos amigos.</p>
                                    <a class="btn btn-primary" href="#!">Continuar lendo ???</a>
                                </div>
                            </div>
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" src="assets/jovem.jpg" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">17 de Janeiro, 2023</div>
                                    <h2 class="card-title h4">Jovem de Cedro entre as finalistas do Concurso da nova voz feminina da banda Mastruz com Leite</h2>
                                    <p class="card-text">A jovem Layanne Soares ?? a ??nica representante do Cear?? na fase final??ssima do concurso, que ter?? transmiss??o ao vivo nesta ter??a-feira (17/01).</p>
                                    <a class="btn btn-primary" href="#!">Continuar lendo ???</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Atual</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <!-- <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Mais antiga</a></li> -->
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Pesquisar</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Procure um tema..." aria-label="Procure um tema..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categorias</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Noticias gerais</a></li>
                                        <li><a href="receitas.php">Receitas</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Futebol</a></li>
                                        <li><a href="#!">Campeonatos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <!-- <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; <a href="https://devsicon.herokuapp.com" style="text-decoration: none; color: white;">Devs Icon 2023</a></p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
