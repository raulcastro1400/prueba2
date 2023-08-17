 
<?php
       require 'views/utils/funcionTemplate.php';
     
    $pageHeader =true;
    $pageHeaderProgramas =false;
    $pageHeaderPrincipal =false;
    $titlePage = 'Personal Administrativo';

    incluirTemplate('header');
   
?>

    <main>
    
    <?php
     include 'views/utils/titulos.php';
    ?>

<div class="container" data-wow-delay="0.4s">
    <div class="row g-0 team-items">
        <?php foreach ($personal as $miembro): ?>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative">
                <div class="position-relative">
                    <img class="img-fluid" src="img/administrativo/<?php echo $miembro['imagen']; ?>" alt="">
                    <div class="team-social text-center">
                        <a class="btn btn-square btn-outline-primary border-2 m-1"
                            href="<?php echo $miembro['facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-primary border-2 m-1"
                            href="<?php echo $miembro['linkedin']; ?>"><i class="fab fa-linkedin"></i></a>
                        <a class="btn btn-square btn-outline-primary border-2 m-1"
                            href="<?php echo $miembro['youtube']; ?>"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="mt-2"><?php echo $miembro['nombre']; ?></h5>
                    <span><?php echo $miembro['cargo']; ?></span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

        
    </div>



    </main>

    <?php incluirTemplate('footer')?>