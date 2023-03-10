<?php

require'includes/funciones.php';
IncluirTemplate('header');

 $error = array();
 $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $comentario = trim($_POST['comentario']);
        $articulo = $_POST ['articulo'];

  if (isset($_POST['ok'])){
       
        if($nombre == "" || strlen($nombre) < 4){
            array_push($error, "El campo nombre no puede estar vacio o ser menor de 4 caracteres");
            }
        if($apellidos == "" || strlen($apellidos) < 4){
            array_push($error, "El campo apellido no puede estar vacio o ser menor de 4 caracteres");
              }

        if (!preg_match('/\d{9}/',$telefono)){
          array_push($error, "Debe escribir su número de telefono");       }

        if (!preg_match('/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/',$email)){
            array_push($error, "Debe de escribir su email correctamente");
          }

        if ($comentario == "" || strlen($comentario) > 400){
          array_push($error, "Debe de escribir un comentario y este no puede superar los 400 caracteres.");
        }     
        
        if($articulo == "") {
          array_push($error,"Seleccione un elemento de la lista");
         }

        if(count($error) > 0){
          echo "<div class='error'>";
            for ($i = 0; $i < count($error); $i++){
              echo "<li>".$error[$i]."</i>";
            }
          }
          echo "</div>";
      }
?>

     
      <div class="contacto">
        <article class="form">
          <form action="contacto.php" method="post" id="formulario" name="prueba" novalidate>

            <fieldset>
              <legend>Campo personal</legend> 

              <div>
                <label for="nombre">Nombre*</label>
                <input type="text" name="nombre" id="nombre" autocomplete="on" required autofocus placeholder="Nombre" value="<?php echo $nombre; ?>">
              </div>

              <div>
                <label for="Apellidos">Apellidos*</label>
                <input type="text" autocomplete="on" placeholder="Apellido" name="apellidos" id="apellidos" value="<?php echo $apellidos; ?>">
              </div>

              <div>   
                <label for="telefono">Telefono*</label>
                <input type="tel" id="telefono" name="telefono" placeholder="611111111" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required value="<?php echo $telefono; ?>">
              </div>

              <div>  
                <label for="email">Email*</label>
                <input type="email" name="email" id="email" autocomplete="on" placeholder="Email" value="<?php echo $email; ?>">
              </div>

              <div>
                <label for="cliente">Eres cliente nuestro</label><br>
                <input type="radio" name="cliente" id="cliente" value="si" checked>Si</label><br>
                <input type="radio" name="cliente" id="paciente" value="no">No</label>  
              </div>

              <div>
                <label for="articulo">Artículo del que esta interesado</label>
            
                <select name="articulo" id="articulo">
                  <option value="0">Elija un articulo</option>
                  <option value="1">Ropa bebe</option>
                  <option value="2">Ropa niño</option>
                  <option value="3">Ropa de niña</option>
                  <option value="4">Abrigos</option>
                  <option value="5">Vestidos</option>
                  <option value="6">Pantalones</option>
                </select>
              </div>
            </fieldset>
              <br>
            <fieldset>
                  <legend>Quieres reservar una cita fuera de nuestro horario comercial.</legend>
              
                  <div>
                  <label for="fecha">Fecha</label>
                  <input type="date" id="fecha" name="fecha" value="2022-01-01" min="2022-01-01" max="2023-12-30">
              </div>

              <div>
                  <label for="hora">Hora</label>
                  <input type="time" id="hora" name="hora" value="09:00" min="09:00" max="21:00"><br></br>
              </div>

              <div>
                  <textarea id="comentario" name="comentario" rows="5" cols="19" placeholder="Motivo de su contacto."></textarea>
              </div> 

              <div>
                  <input class="enviar" type="submit" id="btn-enviar" name="ok" value="Enviar" >
                  
                </div>

            </fieldset>
              
          </form> 
          
        </article>
      </div>

      <div id="frase">
        <h3>En sueños nos convertiremos en tu tienda de ropa infantil de referencia, para que tus peques luzcan a la perfección en cualquier evento.</h3>
        <h3>Nuestra pasión por las últimas tendencias, la satisfacción para nuestros clientes y la confianza de las mejores firmas nacionales de confección infantil.</h3>
        <h3>Para cualquier duda, reserva o cita contacta con nosotros rellenando este cuestionario.</h3>
      </div>

          <div class="imagen">
           <figure >
            <img src="./img/imgTienda/tienda-interior.jpg" alt="imagen de nuestra tienda">    
            <figcaption>Nuestra tienda, siempre preparada para cumplir tus sueños.</figcaption>
            </figure>
          </div>
          
    </main>

    <?php
   IncluirTemplate('footer');
   
   ?>

</body>
</html>






    