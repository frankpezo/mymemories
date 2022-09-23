<?php
  //Incluimos la cabezera
  include('templates/cabezera.php');
?>

<div class="img-header">
  <?php foreach($resul as $fo): ?>  
  <?php if($fo['id'] == $id_actual):  ?>
<div class="head">
<section class="foto-3">
          <div class="contenedor">
                <h1 class="titulo"><?php echo $fo['titulo']?></h1>
            </div>
             
  </section>

<!-- Estructura de las fotos --->
<div class="contenedor-sub">
    <div class="foto">
         <img src="fotos/normal/<?php echo $fo['imagen'] ?>" alt="">
         <p class="texto"><?php echo $fo['texto']; ?></p>
         <div class="re">
         <a href="normal.php" class="regresar"><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
         </div>

        </div>
</div>


</div>
 <?php endif; ?>   
<?php  endforeach; ?>


</div>



<?php 
//Incluimos el footer
include('templates/footer.php');

?>
