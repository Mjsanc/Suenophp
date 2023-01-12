<?php

try{

    if( !file_exists('ofertas.csv')){
        throw new Exception('ERROR: Datos de propiedades no encontrados!');
    }
    if (($gestor = fopen('ofertas.csv','rb')) == FALSE){
        throw new Exception('Error al recibir los datos');
    }

}
catch (Exception $e){
    echo 'ERROR: ', $e->getCode(),' - ',$e->getMessage(),'<br />';
}

?>


<section id="offert">
        

<?php
        $titulos = ["id","imgNombre","Seccion","descripcion","precio"];
        while($datos = fgetcsv($gestor)):
            $propiedad = array_combine($titulos, $datos);
?>

        <div class="oferta">
          <figure>
            <img src="<?= WEBROOT ?>./imgOferta/" <?php echo $propiedad['imagen']; ?> alt="conjunto-nino">
              <figcaption><?php echo $propiedad['seccion']; ?></figcaption>
              <figcaption><?php echo $propiedad['descripcion']; ?><h5>Precio <?php echo $propiedad['precio']; ?> €</h5></figcaption>
             
          </figure>
        </div>
<?php endwhile; ?>    
      </section>