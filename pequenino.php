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
            <p class="title">Estas son algunas prendas que pueden encontrar en nuestra tienda.</p>
            <p>Lois talla de 8 a 16 años</p>
            <p>Street monkey talla de 6 a 16 años</p>
        </article>

        <div class="slideshow-container">

          <div class="mySlides">
            <div class="numbertext">1 / 6</div>
              <img src="./img/lois 8,16/1670371088188.jpg"alt="lois"></img>
              <div class="text">Lois</div>
            </div>

          <div class="mySlides">
             <div class="numbertext">2 / 6</div>
                <img src="./img/lois 8,16/1670371088197.jpg"alt="lois"></img>
                <div class="text">Lois</div>
            </div> 

          <div class="mySlides">
            <div class="numbertext">3 / 6</div>
              <img src="./img/st boy/1670625617488 (2).jpg"alt="street monkey"></img>
              <div class="text">Street monkey </div>
            </div>  
            
          <div class="mySlides">
            <div class="numbertext">4 / 6</div>  
              <img src="./img/st boy/1670625617497 (2).jpg"alt="street monkey"></img>
              <div class="text">Street monkey </div>
          </div>

            <div class="mySlides">
              <div class="numbertext">5 / 6</div>
                <img src="./img/st boy/1670625617506 (2).jpg"alt="street monkey"></img>
                <div class="text">Street monkey </div>
              </div>
            
            <div class="mySlides">
              <div class="numbertext">6 / 6</div>
                <img src="./img/st boy/1670625617514 (2).jpg"alt="street monkey"></img>
                <div class="text">Street monkey</div>
              </div>
         
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>

          <div id="circulo">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
  
    </main>

        <article class="video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/zsofgIMyWco" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
          <h4>Video de nuestra colección.</h4>
        </article>

        <?php
        IncluirTemplate('footer');
        
        ?>

  </body>
</html>