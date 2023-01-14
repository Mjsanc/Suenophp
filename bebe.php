<?php

require'includes/funciones.php';
IncluirTemplate('header');
?>

    <main>
        

      <div id="what">
        <a href="https://wa.me/+54651302674?text=Hola,%20en%20que%20puedo%20ayudarte
        "><i class="fa-brands fa-square-whatsapp"></i>
        </a>
      </div>

      
      <article class="lois-container">
        <p>Esta es una pequeña representación de toda la variedad de ropa que disponemos en nuestra tienda.</p>
        <span>Nuestra colección de bebe desde la talla 0 meses hasta la 36 meses.</span>
      </article>
        
        <div class="slideshow-container">

            <div class="mySlides">
              <div class="numbertext">1 / 4</div>
                <img src="./img/bebe/1670756607773[848].jpg" alt="bebe"></img>
            </div>
       

            <div class="mySlides">
              <div class="numbertext">2 / 4</div>
                <img src="./img/bebe/1670756607783[847].jpg"alt="bebe"></img>
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 4</div>
                <img src="./img/bebe/1670756764269[849] (2).jpg"alt="bebe"></img>
            </div>

            <div class="mySlides">
              <div class="numbertext">4 / 4</div>
                  <img src="./img/bebe/1670756858586[850] (2).jpg"alt="bebe"></img>
              </div>
        
          <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
      

        <!-- The dots/circles -->
        <div id="circulo">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>

    </main>  
   
    <?php
   IncluirTemplate('footer');
   
   ?>

</body>


</html>