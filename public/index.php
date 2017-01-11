<?php 
include 'assets/js/reporter.php';
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script type="text/javascript" src="assets/js/reporter.js"></script> 
        <title>Reporteador</title>
    </head>

    <body> 
           <section>
           <div class="container">
           <div class="row"></div>
           <div  class="col-sm-12 header">
             <header><img src="assets/img/header.jpg"></header>
           </div>
           </div>
           </div>
           </section>

           <section>
           <div class="container">
           <div class="row">
          <!-- tab toggle -->
          <ul class="nav nav-tabs" >
            <li class="nav-item" >
            <a href="#conglo" class="nav-link  active" role="tab" data-toggle="tab">Conglomerado</a>
            </li>

            <li  class="nav-item">
            <a href="#aves" class="nav-link"  role="tab" data-toggle="tab">Conteo de Aves</a>
            </li>

            <li  class="nav-item">
            <a href="#messages" class="nav-link" role="tab" data-toggle="tab">Messages</a>
            </li>

            <li  class="nav-item">
            <a href="#settings" class="nav-link" role="tab" data-toggle="tab">Settings</a>
            </li>
          </ul>
          </div>
          </div>
          </section>

            <!-- Tab panes -->
          
            <section class="blueBg">
            <div class="container">
            <div class="row">
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="conglo"><br>

            <div class="title m-b-md">
               Reporteador
             </div>

             <div class="col-sm-12" id="bienvenido">Bienvenido al cliente de captura
             </div>


            <form id="reporteador">
            <div class="form-group">
            <div class="col-sm-6">
            <input  type="text" class="form-control"  placeholder="Por institución"></input>
            </div>
            </div>
             

             <div class="form-group col-sm-6">
              <input  type="text" class="form-control pickVisita"  placeholder="Fecha de visita"></input>
             </div>
             <div class="form-group col-sm-6">
              <input type="text" class="form-control"  placeholder="Año"></input>
             </div>
             <div class="form-group col-sm-3">
              <input  id="datepickerInicial"  type="text" class="form-control pick"  placeholder="Fecha inicial"></input>
             </div>
             <div class="form-group col-sm-3">
              <input id="datepickerFinal" type="text" class="form-control pick"  placeholder="Fecha final"></input>
             </div>

         


             <div class="form-group col-sm-6">
              <select type="text" class="form-control"  >
               <option value="" disabled selected>Por entidad</option>
               <option value="Ciudad de MÃ©xico">Aguascalientes</option>
               <option value="Ciudad de MÃ©xico">Baja California</option>
               <option value="Ciudad de MÃ©xico">Baja California Sur</option>
               <option value="Ciudad de MÃ©xico">Campeche</option>
               <option value="Ciudad de MÃ©xico">Coahuila de Zaragoza</option>
               <option value="Ciudad de MÃ©xico">Colima</option>
               <option value="Ciudad de MÃ©xico">Chiapas</option>
               <option value="Ciudad de MÃ©xico">Chihuahua</option>
               <option value="Ciudad de MÃ©xico">Distrito Federal</option>
               <option value="Ciudad de MÃ©xico">Durango</option>
               <option value="Ciudad de MÃ©xico">Guanajuato</option>
               <option value="Ciudad de MÃ©xico">Guerrero</option>
               <option value="Ciudad de MÃ©xico">Hidalgo</option>
               <option value="Ciudad de MÃ©xico">Jalisco</option>
               <option value="Ciudad de MÃ©xico">Ciudad de MÃ©xico</option>
               <option value="Ciudad de MÃ©xico">MichoacÃ¡n</option>
               <option value="Ciudad de MÃ©xico">Morelos</option>
               <option value="Ciudad de MÃ©xico">Nayarit</option>
               <option value="Ciudad de MÃ©xico">Nuevo LeÃ³n</option>
               <option value="Ciudad de MÃ©xico">Oaxaca</option>
               <option value="Ciudad de MÃ©xico">Puebla</option>
               <option value="Ciudad de MÃ©xico">QuerÃ©taro</option>
               <option value="Ciudad de MÃ©xico">Quintana Roo</option>
               <option value="Ciudad de MÃ©xico">San Luis PotosÃ­</option>
               <option value="Ciudad de MÃ©xico">Sinaloa</option>
               <option value="Ciudad de MÃ©xico">Sonora</option>
               <option value="Ciudad de MÃ©xico">Tabasco</option>
               <option value="Ciudad de MÃ©xico">Tamaulipas</option>
               <option value="Ciudad de MÃ©xico">Tlaxcala</option>
               <option value="Ciudad de MÃ©xico">Veracruz</option>
               <option value="Ciudad de MÃ©xico">YucatÃ¡n</option>
               <option value="Ciudad de MÃ©xico">Zacatecas</option>
             
              </select>
            </div>

             <div class="form-group col-sm-6">
              <input type="text" class="form-control"  placeholder="Por compañía"></input>
             </div>

              <div  class="form-group col-sm-6" >
               <input type="checkbox" name="check_list[]" value="Uploads"><label>Uploads</label>
              </div>

              <div  class="form-group col-sm-6" >
               <input type="checkbox" name="check_list[]" value="Database"><label>Database</label>
              </div>
           
             <button type="submit" class="btn btn-primary">Enviar Datos</button>
             </form>

              <?php
              $uploads = 'cliente_snmb/applications/init/uploads';
              $slite = 'cliente_snmb/applications/init/databases';
              $conglo = 'conglomerados';

              if(is_dir($slite))
              {
              if(is_dir($uploads))
              {
              if(is_dir($conglo))
              {
                echo  "<hr/>";
                echo "<br>".$conglo."<br><br>";

              }
              else
              { 
          
              
              }
                echo  "<hr/>";
                echo "<br>".$uploads."<br><br>";
              }
               else
              {
               echo 'No es una ruta';
              }
                echo  "<hr/>";
                echo "<br>".$slite."<br><br>";
              }
              else
              {
               echo 'No es una ruta';
              }
               ?>

             </div>
          
           
            <div role="tabpanel" class="tab-pane fade" id="aves">Conteo de aves</div>
            <div role="tabpanel" class="tab-pane fade" id="messages">Messages</div>
            <div role="tabpanel" class="tab-pane fade" id="settings">Settings</div>

            </div>
            </div>
            </section>

           <section>
           <div class="container">
           <div class="row">
           <div  class="col-sm-12 header">
             <footer><img src="assets/img/footer.jpg"></footer>
           </div>
           </div>
           </div>
           </section>
    </body>
</html>



<script>  
$('.pick').each(function(){
    $(this).datepicker({ dayNamesMin: [ "Dom", "Lun", "Ma", "Mie", "Ju", "Ve", "Sa" ]});
});

$('.pickVisita').each(function(){
    $(this).datepicker({ dayNamesMin: [ "Dom", "Lun", "Ma", "Mie", "Ju", "Ve", "Sa" ]});
});
</script>