<?php require "vista/layout/header.php";?>
<h1>Lista de proyectos</h1>
<a href="index.php?p=nuevo">Nuevo proyecto</a>
<div>
    <table class="table">
        <thead class="thead-dark">
            <th>Id</th>
            <th>Clave</th>
            <th>Nombre del proyecto</th>
            <th>Caratula</th>
        </thead>
        <tbody>
            <?php
                foreach ($datos as $key => $value) {
                    foreach ($value as $item) {
                        echo '<tr>';
                        echo '<td>'.$item['Id'].'</td>';
                        echo '<td>'.$item['Clave'].'</td>';
                        echo '<td>'.$item['Nombre'].'</td>';
                        echo '<td>'.$item['Caratula'].'</td>';
                        echo '<td><a href=index.php?p=eliminar&id='.$item['Id'].'>Eliminar</a></td>';
                        echo '</tr>';
                    }
                    
                }
            ?>
        </tbody>
    </table>
<hr>
    <?php
                foreach ($datos as $key => $value) {
                    foreach ($value as $item) {
                        echo '<div  class="card" style="width: 18rem;">';
                        echo '<div class="card-header">'.$item['Id'].'</div>';
                        echo '<div class="card-body">';
                        echo '<p>'.$item['Clave'].'</p>';
  
                        echo '</div>';
                        echo '</div>';
                    }
                    
                }
    ?>

</div>
<?php require "vista/layout/footer.php";?>
