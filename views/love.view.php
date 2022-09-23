<?php
  //Incluimos la cabezera
  include('templates/cabezeralove.php');
?>

<!--Img header-->
<div class="img-header">

<!-- Estructura de las fotos --->
 <section class="fotos">
      <div class="contenedor">
       <!--- PARA MOSTRAR LAS FOTOS--->
       <?php foreach($fotos as $foto): ?>
         <div class="thumb">
           <a href="fotolove.php?id=<?php echo $foto['id']; ?>">
            <img src="fotos/love/<?php echo $foto['imagen'] ?>" alt="">
           </a>
         </div>
       <?php endforeach;?>
        
     <!--Paginación-->
          <div class="paginacion">
                <a href="?p=<?php echo $pagina_actual + 1?>" class="derecha">Página siguiente<i class="fa fa-long-arrow-right"></i> </a>             
               
            <?php if($pagina_actual==1): ?>
            <a href="#" class="izquierda"><i class="fa-solid fa-arrow-left-long"></i> Página anterior</a>
            <?php  else: ?>
              <a href="?p=<?php echo $pagina_actual-1 ?>" class="izquierda"><i class="fa-solid fa-arrow-left-long"></i> Página anterior</a>
            <?php endif; ?>    
               
             
           


         <!--   <a href="#" class="izquierda"><i class="fa-solid fa-arrow-left-long"></i> Página anterior</a>
            <a href="#" class="derecha">Página siguiente<i class="fa fa-long-arrow-right"></i> </a>-->
          </div>
          
      </div>
 </section>


<?php 
//Incluimos el footer
include('templates/footer.php');

?>

