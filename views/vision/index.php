<?php
       require 'views/utils/funcionTemplate.php';
     
    $pageHeader =true;
    $pageHeaderProgramas =false;
    $pageHeaderPrincipal =false;
    $titlePage = 'Visión - Misión';

    incluirTemplate('header');
   
?>

    <main>
    
    <?php
     include 'views/utils/titulos.php';
    ?>

        <div class="container contenido-parrafo " data-wow-delay="0.4s">
            <div class="row text-justify">
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">

                    <h3>VISIÓN</h3>
                    <?php if ($vision): ?>
                    <p><?php echo $vision['contenido']; ?></p>
                    <?php else: ?>
                    <p>Visión no disponible.</p>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <h3>MISIÓN</h3>
                    <?php if ($mision): ?>
                    <p><?php echo $mision['contenido']; ?></p>
                    <?php else: ?>
                    <p>Misión no disponible.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        
            <section class="row">
                <div class="galleryContainer">
                    <div class="slideShowContainer">
                        
                        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
                        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
                        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>               
                        <?php foreach ($galleryImages as $image): ?>
                            <div class="imageHolder">
                                <img src="<?php echo $image['imagen']; ?>" alt="<?php echo $image['descripcion']; ?>">
                                <p class="captionText"><?php echo $image['descripcion']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div id="dotsContainer"></div>
                </div>
            </section>
       

        
    </div>



    </main>

    <?php incluirTemplate('footer')?>