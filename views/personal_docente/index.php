 
 
<?php
       require 'views/utils/funcionTemplate.php';
     
    $pageHeader =true;
    $pageHeaderProgramas =false;
    $pageHeaderPrincipal =false;
    $titlePage = 'Personal Docente - 2023';

    incluirTemplate('header');
   
?>

    <main>
    
    <?php
     include 'views/utils/titulos.php';
    ?>

<div class="container" data-wow-delay="0.4s">
    <div class="row g-0 team-items">
        <?php foreach ($personalDocente as $docente): ?>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative">
                <div class="position-relative">
                    <img class="img-fluid" src="/img/docentes/<?php echo $docente['imagen']; ?>" alt="">
                    <div class="team-social text-center">
                        <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php echo $docente['facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary border-2 m-1" href="<?php echo $docente['whatsapp']; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
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
    </div>
</div>

        
    </div>



    </main>

    <?php incluirTemplate('footer')?>