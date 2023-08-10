<?php
    require 'views/utils/funcionTemplate.php';
    $pageHeader =true;
    $pageHeaderProgramas =false;
    $pageHeaderPrincipal =false;
    $titlePage = $programa['nombre'];

    incluirTemplate('header');

?>

<main>

    <?php
    include 'views/utils/titulos.php';
    ?>

<div class="container contenido-parrafo " data-wow-delay="0.4s">

    <div class="descripcion col-12 " data-wow-delay="400ms">
        <p><?php echo $programa['descripcion']; ?></p>
    </div>

    <div class="text-center">
        <h2>NUESTRAS CIFRAS</h2>
    </div>

    <div class="contador">
        <div class="counter-container">
            <i class="fa fa-users fa-3x"></i>
            <div class="counter" data-target="<?php echo $programa['estudiantes']; ?>"></div>
            <span>ESTUDIANTES</span>
        </div>
        <div class="counter-container">
            <i class="fa fa-graduation-cap fa-3x"></i>
            <div class="counter" data-target="<?php echo $programa['egresados']; ?>"></div>
            <span>EGRESADOS</span>
        </div>
        <div class="counter-container">
            <i class="fa fa-briefcase fa-3x"></i>
            <div class="counter" data-target="<?php echo $programa['titulados']; ?>"></div>
            <span>TITULADOS</span>
        </div>
    </div>

    
        <div class="text-center pt-4">
            <h2>MÓDULOS FORMATIVOS</h2>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($modulos as $modulo):?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                    <div class="text-center p-4 pt-3">
                        <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"><?php echo $modulo['nombre']; ?></div>
                        <h5 class="mb-3">MÓDULO <?php echo $modulo['nro_modulo']; ?></h5>
                        
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i><?php echo $modulo['creditos']; ?> CRÉDITOS</li>
                            <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo $modulo['Total_horas_Teo_prac']; ?>  HORAS TEÓRICAS Y PRÁCTICAS</li>
                        </ol>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="<?php echo $modulo['imagen_modulo']; ?>" alt="Gestión de Soporte técnico">
                        <div class="courses-overlay">
                            <a class="btn btn-outline-primary border-2" href="index.php?page=unidadDidactica&action=show&moduloId=<?php echo $modulo['id']; ?>">Leer Más</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

            <!-- FIN DE MODULOS -->


            <div class="text-center pt-4">
                <h2>NUESTROS DOCENTES</h2>
            </div>

        <div class="row g-0 team-items pt-4">
            <?php foreach ($docentes as $docente): ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo $docente['imagen']; ?>" alt="">
                    <div class="team-social text-center">
                        <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php echo $docente['facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php echo $docente['linkedin']; ?>"><i class="fab fa-linkedin"></i></a>
                        <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php echo $docente['youtube']; ?>"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="mt-2"><?php echo $docente['nombre']; ?></h5>
                    
                    <span><?php echo $docente['especialidad']; ?></span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
            <!-- FIN DE DOCENTES DE ESPECIALIDAD -->
        </div>
</div>

 </main>

 <?php incluirTemplate('footer')?>