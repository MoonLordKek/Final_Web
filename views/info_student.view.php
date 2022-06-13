<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About Us - Brand</title>
    <link rel="stylesheet" href="views/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/assets/css/Montserrat.css">
    <link rel="stylesheet" href="views/assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="views/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="views/assets/css/Scrollspy.css">
    <link rel="stylesheet" href="views/assets/css/vanilla-zoom.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark clean-navbar" style="height: 80.266px;">
        <div class="container-fluid"><a class="navbar-brand logo" href="https://www.escom.ipn.mx/" style="font-weight: bold;margin: -20px;"><img src="views/assets/img/escudoESCOM.png" style="width: 86px;padding: 7px;margin: 6px;">ESCOM</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                <?php 
                        if(!isset($_SESSION['boleta'])){
                            $messsage = '<li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                            
                            <li class="nav-item dropdown" data-aos="fade"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">INFORMACIÓN</a>
                                <div class="dropdown-menu text-uppercase" style="width: 183.875px;height: 131px;margin: 0px;font-size: 14px;text-align: center;"><a class="dropdown-item" href="info_protocolo.php">Protocolo</a><a class="dropdown-item" href="info_tt-1.php">Trabajo Terminal 1</a><a class="dropdown-item" href="info_tt-2.php">Trabajo Terminal 2</a><a class="dropdown-item" href="info_protocolo.php">Trabajo Terminal R</a></div>
                            </li>
                            <li class="nav-item d-xl-flex flex-row justify-content-xl-center"><a class="nav-link" href="login.php" style="color: var(--bs-white);">LOGIN</a><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="fs-3" style="color: rgb(255,255,255);width: 25px;height: 36px;">
                                <path d="M14 6C14 7.10457 13.1046 8 12 8C10.8954 8 10 7.10457 10 6C10 4.89543 10.8954 4 12 4C13.1046 4 14 4.89543 14 6Z" fill="currentColor"></path>
                                <path d="M14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12Z" fill="currentColor"></path>
                                <path d="M14 18C14 19.1046 13.1046 20 12 20C10.8954 20 10 19.1046 10 18C10 16.8954 10.8954 16 12 16C13.1046 16 14 16.8954 14 18Z" fill="currentColor"></path>
                                </svg><a class="nav-link" href="registration_student.php" style="color: var(--bs-white);">registrarse</a>
                            </li>';
                        }else{
                            $messsage = '<li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="protocolo_registro.php">REGISTRO PROTOCOLO</a></li>
                            <li class="nav-item dropdown" data-aos="fade"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">INFORMACIÓN</a>
                                <div class="dropdown-menu text-uppercase" style="width: 183.875px;height: 131px;margin: 0px;font-size: 14px;text-align: center;"><a class="dropdown-item" href="info_protocolo.php">Protocolo</a><a class="dropdown-item" href="info_tt-1.php">Trabajo Terminal 1</a><a class="dropdown-item" href="info_tt-2.php">Trabajo Terminal 2</a><a class="dropdown-item" href="info_protocolo.php">Trabajo Terminal R</a></div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="info_student.php">PROTOCOLO</a></li>
                            <li class="nav-item d-xl-flex flex-row justify-content-xl-center"><a class="nav-link" href="close_ses.php" style="color: var(--bs-white);">Cerrar sesion</a><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="fs-3" style="color: rgb(255,255,255);width: 25px;height: 36px;">
                                
                            </li>';
                        }
                        echo $messsage;
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page">
        <section class="clean-block about-us" style="height: 699.594px;">
            <div class="container" style="margin-top: 14px;">
                <div class="row">
                    <div class="col-md-8 offset-md-0 text-center align-self-center m-auto" style="width: 440px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="fs-1 text-primary">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z" fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z" fill="currentColor"></path>
                        </svg>
                        <h3 style="margin-top: 14px;">CUENTA</h3>
                        <p>NOMBRE: &nbsp;<?php echo $_SESSION['usuario']?>
                            <br>BOLETA: <?php echo $_SESSION['boleta']?>
                            <br>EMAIL: <?php echo $_SESSION['email']?>
                            <br>CELULAR: <?php echo $_SESSION['tel']?>
                            <br>
                            <br>
                        </p><button class="btn btn-primary" type="button">Actualiza tus datos</button>
                    </div>
                    <div class="col-md-4" style="width: 694px;">
                        <?php
                            
                            if(isset($result['errores'])){
                                if($result['errores']=="No hay protócolo inscrito")
                                    echo '<div class="col-md text-center"><br><h1>'.$result['errores'].'</h1><br><a href="protocolo_registro.php"><button class="btn btn-primary" type="button">Inscribir protócolo</button></a><div>';
                                else
                                    echo '<br><br><div class="col-md text-center"><br><p><h1>'.$result['errores'].'</h1></p><br><h3>MANTENTE AL PENDIENTE DE TU CORREO INSTITUCIONAL PARA SABER TU ESTATUS

                                    </h3></div>';
                            }
                            else{ 
                                $tmpi = "";
                                $tmps = "";
                                $tmpd = "";
                                foreach ($integrantes as $key) {
                                    $tmpi.="<p>".$key."</p>";
                                }
                                foreach ($sinodales as $key) {
                                    $tmps.="<p>".$key."</p>";
                                }
                                foreach ($directivos as $key) {
                                    $tmpd.="<p>".$key."</p>";
                                }
                                $htm = '<h2>Protocolo Activo</h2>
                                <div class="card">
                                    <div class="card-body d-flex flex-column align-content-stretch justify-content-xl-start align-items-xl-start">
                                        <b><h4 class="card-title" style="width: 271px;">'.$res[2].'</h4></b>
                                        <b><p class="card-text">Número TT</b>:&nbsp;</p>
                                            '.$res[0].'
                                        <b><p class="card-text">Resumen TT</p></b>
                                            '.$res[3].'
                                        <b><p class="card-text">Integrantes del Protocolo</p></b>
                                            '.$tmpi.'
                                        <b><p class="card-text">Sinodales</p></b>
                                            '.$tmps.'
                                        <b><p class="card-text">Directivos</p></b>
                                            '.$tmpd.'
                                        <b><p class="card-text">Rol en el Protocolo:</b> '.$rol.'</p>
                                    </div>
                                </div>';
                                echo $htm;
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-top: 27px;"><div>
    <iframe src="" width="100%" height="500px"></iframe>
</div></div>
        
        </section>
    </main>
    <footer class="page-footer dark">
        <div class="container d-xl-flex flex-column justify-content-xl-center align-items-xl-center">
            <ul class="list-inline">
                <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook text-light">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></li>
                <li class="list-inline-item me-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter text-light">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></li>
                <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram text-light">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg></li>
            </ul>
        </div>
        <div class="footer-copyright">
            <p>© 2022 Copyright Text</p>
        </div>
    </footer>
    <script src="views/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="views/assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="views/assets/js/vanilla-zoom.js"></script>
    <script src="views/assets/js/theme.js"></script>
    <script src="views/assets/js/funciones.js"></script>
</body>

</html>