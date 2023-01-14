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
          <p>Lois tallas de 8 a 16 años</p>
          <p>Coco Aqua tallas de 3 a 10 años</p>
          <p>Street monkey tallas de 6 a 16 años</p>
          </article>

          <div class="slideshow-container">

            <div class="mySlides">
              <div class="numbertext">1 / 9</div>
                <img src="./img/lois 8,16/1670371088165 (2).jpg" alt="lois"></img>
                <div class="text">Lois</div>
              </div>
            
            <div class="mySlides">
              <div class="numbertext">2 / 9</div>
                 <img src="./img/lois 8,16/1670371088180 (2).jpg" alt="lois"></img>
                 <div class="text">Lois</div>
                </div>

              <div class="mySlides">
                <div class="numbertext">3 / 9</div>  
                 <img src="./img/lois 8,16/1670371088172 (2).jpg" alt="lois"></img>
                 <div class="text">Lois</div>
                </div>
            
            <div class="mySlides">
              <div class="numbertext">4/ 9</div>
                <img src="./img/street monkey 6-16/1670370754762.jpg" alt="street monkey"></img>
                <div class="text">Street monkey </div>
              </div>  
            
            <div class="mySlides">
                <div class="numbertext">5 / 9</div>   
                  <img src="./img/street monkey 6-16/1670370754787.jpg" alt="street monkey"></img>
                  <div class="text">Street monkey </div>
                  </div>

            <div class="mySlides">
              <div class="numbertext">6 / 9</div>
                  <img src="./img/street monkey 6-16/1670370754817.jpg" alt="street monkey"></img>
                  <div class="text">Street monkey </div>
                  </div>

            <div class="mySlides">
              <div class="numbertext">7 / 9</div>
              <img src="./img/Coco Aqua 3-10/1670370643750.jpg" alt="Coco"></img>
              <div class="text">Coco Aqua </div>
            </div>  
            
            <div class="mySlides">
              <div class="numbertext">8 / 9</div>
                <img src="./img/Coco Aqua 3-10/1670370643729.jpg" alt="Coco"></img>
                <div class="text">Coco Aqua </div>
              </div>  
              
            <div class="mySlides">
              <div class="numbertext">9 / 9</div>
                <img src="./img/Coco Aqua 3-10/1670370643715.jpg" alt="Coco"></img>
                <div class="text">Coco Aqua </div>
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