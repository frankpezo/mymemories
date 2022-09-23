<?php
  //Incluimos la cabezera
  include('templates/cabezera.php');
?>


<div class="img-header">


  <!-- Contenedor del formulario--->
<section class="fotos-2"> 
<div class="contenedor-sub">
  
    <!-- FORMULARIO
  Para cuando necesitamos subir un archivo, el formulario debe contener  
  el método enctype="multipart/form-data", sino no podremos subir nada 
-->
    <form  class="formulario" method="POST" enctype="multipart/form-data"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] );  ?>">
        <label for="foto">Selecciona tu foto</label>
        <input type="file" id="foto" name="foto">
        
        <label for="titulo">Título de la foto</label>
        <input type="text" id="titulo" name="titulo">

        <label for="text">Descripción:</label>
        <textarea name="texto" id="texto" placeholder="Descripción de la foto"></textarea>
        <!-- Colocamos el error-->
         <?php if(isset($error)):?>
            <p class="error"><?php  echo $error; ?></p>
         <?php endif ?>
        <input type="submit" class="submit" value="Subir foto ">
    </form>
   
</div>



</section>
<div class="sgv2">
          
          <img src="img/foto4.svg" alt="">
                    </div>

</div>


<?php 
//Incluimos el footer
include('templates/footer.php');

?>
