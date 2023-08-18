 <?php
       require 'views/utils/funcionTemplate.php';
     
    $pageHeader =true;
    $pageHeaderProgramas =false;
    $pageHeaderPrincipal =false;
    $titlePage = 'Programas de Estudios';

    incluirTemplate('header');
   
?>

 <main>

     <?php
     include 'views/utils/titulos.php';
    ?>

     <div class="container-xxl courses pt-0 my-6 py-6 pb-0">
         <div class="container">
             <div class="row g-4 justify-content-center">
                 <?php foreach ($programas as $programa) : ?>
                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                         <div class="text-center p-4 pt-3">
                             <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4"><?php echo $programa['nombre']; ?></div>
                             <h5 class="mb-3">Certificación Modular</h5>
                             <ol class="breadcrumb justify-content-center mb-0">
                                 <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Ciclo <?php echo $programa['ciclo']; ?></li>
                                 <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo $programa['duracion']; ?>
                                 </li>
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

 </main>

 <?php incluirTemplate('footer')?>