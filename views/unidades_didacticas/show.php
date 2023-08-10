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

    <div class="container">
        <h2>Unidades Didácticas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($unidadesDidacticas as $unidadDidactica) : ?>
                <tr>
                    <td><?php echo $unidadDidactica['id']; ?></td>
                    <td><?php echo $unidadDidactica['nombre']; ?></td>
                    <td><?php echo $unidadDidactica['descripcion']; ?></td>
                    <td>
                        <a href="<?php echo $unidadDidactica['silabus']; ?>" class="btn btn-primary" target="_blank">Descargar Sílabo</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</main>

<?php incluirTemplate('footer')?>