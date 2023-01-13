<?php

require'includes/funciones.php';
IncluirTemplate('header');
?>



    <main>   
        <img src="./img/imgIndex/madera (4).jpg" alt="bebe"></img>
          <div class="enlace">
            <a href="./bebe.php"> <span id="bebes" class="boton">Bebes</span></a>
          </div>
      </div>


      <div class="menu">
          <img src="./img/imgIndex/pexels-norma-mortenson-8457621 (3).jpg" alt="nene"></img>
          <div class="enlace">
            <a href="./pequenino.php"> <span class="boton">Niños</span></a>
            <a href="./pequenina.php"> <span id="nina" class="boton">Niñas</span></a>
          </div>
      </div>
      
      <div class="tarjeta">
        <figure>
        <img src="./img/imgIndex/tarjeta regalo2.jpg" alt="tarjeta regalo"></img>
          <figcaption>Disponemos de tarjeta regalo para que hagan uso de ellas nuestros clientes</figcaption>
        </figure>
      </div>
        
      <div id="abajo">
        <a href="#subir-arriba">
          <i class="fa-solid fa-up-long"></i>
        </a>
      </div>
      
      <h2 class="ultima">Ofertas de última hora</h2>
      
      

    </main>

   <?php
   IncluirTemplate('footer');
   
   ?>
  
</body>
</html>