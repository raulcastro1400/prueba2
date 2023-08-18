 
<?php 

require 'views/utils/funcionTemplate.php';
//include 'views/includes/header.php';

incluirtemplate('header');
incluirTemplate('carrusel');
?>

<main>
    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-user text-white"></i>
                            </div>

                            <a href="https://classroom.google.com/" target="_blank">
                                <div class="ps-4">
                                    <h5>AULA VIRTUAL</h5>
                                    <p>Desde aquí puedes acceder a tu aula Virtual</p>
                                </div>
                            </a>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-users text-white"></i>
                            </div>

                            <a href="https://aulavirtual.cetprojct.edu.pe/virtual/" target="_blank">
                               <div class="ps-4">
                                <h5>AULA DE SUSTENTACIONES</h5>
                                <p>Para accder a tu Sustentación Virtual desde aquí</p>
                            </div>  
                            </a>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square bg-primary">
                                <i class="fa fa-book text-white"></i>
                            </div>
                            <a href="">
                                    <div class="ps-4">
                                <h5>SEGUIMIENTO A EGRESADOS</h5>
                                <p>Informate que es lo que sigue para tí cuando termines tu formación</p>
                            </div>
                            </a>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl pageHeaderPrincipal py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="img/soldadura1.jpg" alt=""
                            style="object-fit: cover;">
                        <img class="position-absolute top-0 start-0 bg-white pe-2 pb-2" src="img/gradudo2.jpg"
                            alt="" style="width: 180px; height: 250px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">Sobre Nosotros</h6>
                        <h1 class="display-6 mb-4">Capacitando Técnicos Emprendedores</h1>
                        <p class="parrafos">Todas estas opciones ocupacionales estan orientados al desarrollo de las competencias y capacidades de los estudiantes que permitirán su inserción laboral, la generación de emprendimientos empresariales, en el marco de una perspectiva de desarrollo sostenible, competitiva y ética</p>
                        <p class="mb-4 parrafos">El Centro de Educación Técnico Productiva Julio C. tello, brinda un servicio educativo de calidad, desarrollando competencias laborales y el emprendimiento a jóvenes, adultos de nuestra región de Pasco</p>
                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Titulo Técnico en 2 años
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Certificación Módular
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Docentes altamente calificados en formación Técnica
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Gestión insitucional de Primera calidad
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <a class="btn btn-primary py-3 px-5" href="">Leer más</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2"
                                    href="tel:+51945516844">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">+51 945 516 844</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Programas de Estudios</h6>
                <h1 class="display-6 mb-4">De Acuerdo al Catálogo Nacional de Ofertas Formativas</h1>
            </div>
            
            <div class="row g-4 justify-content-center">

            <?php foreach ($programas as $programa) : ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-3">
                        <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"><?php echo $programa['nombre']; ?></div>
                        <h5 class="mb-3">Certificación Modular</h5>
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Ciclo <?php echo $programa['ciclo']; ?></li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo $programa['duracion']; ?></li>
                        </ol>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="/img/programasEstudio/<?php echo $programa['imagen_programa']; ?>" alt="">
                        <div class="courses-overlay">
                            <a class="btn btn-outline-primary border-2" href="/programaEstudio/show/<?php echo $programa['id']; ?>">Leer Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>      
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Features Start -->
    <div class="container-xxl pageHeaderPrincipal py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">¡Por qué Elegirnos!</h6>
                    <h1 class="display-6 mb-4">Cetpro Julio C. Tello Primero en Formación Técnica en la Región Pasco</h1>
                    <p class="mb-5">Fomentamos la colaboración y el trabajo en equipo en un ambiente de aprendizaje. </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Liderazgo</h5>
                            </div>
                            <span>Formamos líderes técnicos altamente capacitados para el éxito profesional.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Excelencia</h5>
                            </div>
                            <span>Nuestra institución es un centro de innovación y excelencia técnica.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Actualidad</h5>
                            </div>
                            <span>Brindamos una educación integral que incluye habilidades técnicas y blandas</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Acceso a la educación</h5>
                            </div>
                            <span>Ofrecemos una educación accesible y asequible para todos.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 300px;">
                        <img class="position-absolute w-100 h-100" src="img/titulado.jpg" alt="Titulados cetpro Julio c. Tello" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/titulados.jpg" alt="Titulados cetpro Julio c. Tello" style="width: 350px; height: 250px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">EQUIPO DE GESTIÓN INSTITUCIONAL</h6>
                <h1 class="display-6 mb-4">LA CAPACIDAD EN GESTIÓN PARA LA FORMACIÓN TÉCNICA</h1>
            </div>

            <div class="container" data-wow-delay="0.4s">
        <div class="row g-0 team-items">
        <?php foreach ($personaldirectivo as $directivo): ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative">
                <div class="position-relative">
                    <img class="img-fluid" src="img/directivos/<?php echo $directivo['imagen']; ?>" alt="">
                    <div class="team-social text-center">
                        <a class="btn btn-square btn-outline-primary border-2 m-1"
                            href="<?php echo $directivo['facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary border-2 m-1"
                            href="<?php echo $directivo['linkedin']; ?>"><i class="fab fa-linkedin"></i></a>
                        <a class="btn btn-square btn-outline-primary border-2 m-1"
                            href="<?php echo $directivo['youtube']; ?>"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="mt-2"><?php echo $directivo['nombre']; ?></h5>
                    
                    <span><?php echo $directivo['cargo']; ?></span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
        </div>
    </div>
    <!-- Team End -->

</main>

<?php 
incluirtemplate('footer')
?>
