 
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- ICONO -->
    <link href="img/cetpro.ico" rel="icon">

    <!-- FUNETES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- FUNETE DE ICONOS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 

    <!-- LIBRERIAS PARA ESTILOS-->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



    <!-- ESTILOS DE PAGINA -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

    <!-- TITULO DE LA PAGINA -->
    <title>CETPRO JULIO C. TELLO</title>
</head>

<body>

    <!-- CARGANDO -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- CARGANDO END -->


    <!-- BARRA SUPERIOR -->
    <div class="container-fluid bg-dark text-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>Av. Minero N° 500 - Yanacancha - Pasco</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Lunes - Viernes : 09.00 AM - 05.30 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">


                <a href="https://api.whatsapp.com/send?phone=945516844&text=Deseo%20informaci%C3%B3n%20Sobre%20las%20inscripciones" target="_blank">
                    <div class="h-100 d-inline-flex align-items-center me-4">
                        <small class="fa fa-phone-alt text-primary me-2"></small>
                        <small>+051 945 516 844</small>
                    </div>

                </a>
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.facebook.com/CetproJulioCtello">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.youtube.com/cetprojulioctello">
                        <i class="fab fa-youtube"></i>
                    </a>
                  
                    <a class="btn btn-square btn-link rounded-0" href="">
                        <i class="fab fa-battle-net"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN BARRA SUPERIOR -->


    <!-- INICIO NAVEGACIÓN-->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <div class="logo">
                <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
                   <img src="img/Logo_cetpro.png" alt="">
                </a>
        </div>
  
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Inicio</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nosotros</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="index.php?page=vision" class="dropdown-item">Visión - Misión</a>
                        <a href="index.php?page=personalDirectivo" class="dropdown-item">Personal Directivo</a>
                        <a href="index.php?page=personalAdmin" class="dropdown-item">Personal Administrativo</a>
                        <a href="index.php?page=personalDocente" class="dropdown-item">Personal Docente</a>
                        <a href="index.php?page=programaEstudio" class="dropdown-item">Nuestros Programas de Estudio</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Formación</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="index.php?page=programaEstudio&action=show&id=1" class="dropdown-item">Plataformas y Servicios TI</a>
                        <a href="index.php?page=fabricacion" class="dropdown-item">Fabricación de Prendas de Vestir</a>
                        <a href="index.php?page=mantenimiento" class="dropdown-item">Mantenimiento de Sistemas Eléctricos</a>
                        <a href="index.php?page=estilismo" class="dropdown-item">Estilismo</a>
                        <a href="index.php?page=cocina" class="dropdown-item">Cocina</a>
                        <a href="index.php?page=soldadura" class="dropdown-item">Soldadura</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tramites</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="index.php?page=titulacion" class="dropdown-item">Titulación</a>
                        <a href="index.php?page=certificacion" class="dropdown-item">Certificación</a>
                       
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Servicios</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="" class="dropdown-item">Aula Virtual</a>
                        <a href="" class="dropdown-item">Sustentación</a>
                        <a href="index.php?page=contactos" class="dropdown-item">Ubicación</a>
 
                    </div>
                </div>
                <a href="contactos.html" class="nav-item nav-link">Contacto</a>
            </div>
        </div>
    </nav>
    <!-- FIN NAVEGACIÓN -->
