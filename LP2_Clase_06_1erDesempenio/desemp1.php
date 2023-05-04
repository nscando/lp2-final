<?php

require_once './src/datos/array.php';
require_once './src/funciones/funciones.php';

?>

<!DOCTYPE html>
<html lang="es">
<!-- ======= Head======= -->
<?php
require_once './src/componentes/head.php';
?>


<body>

   <!-- ======= Header ======= -->
   <?php
   require_once './src/componentes/header.php';
   ?>
   <!-- ======= Sidebar ======= -->
   <?php
   require_once './src/componentes/menu.php';
   ?>

   <main id="main" class="main">

      <div class="pagetitle">
         <h1>Listado de Productos</h1>
         <nav>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Productos</a></li>
               <li class="breadcrumb-item active">Desempeño 1 Nicolás Scandizzo</li>
            </ol>
         </nav>
      </div><!-- End Page Title -->

      <section class="section dashboard">
         <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
               <div class="row">


                  <!-- Top Selling -->
                  <div class="col-12">
                     <div class="card top-selling overflow-auto">

                        <div class="card-body pb-0">
                           <h5 class="card-title">Los mas vendidos </h5>

                           <table class="table table-borderless">
                              <thead>
                                 <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Preview</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Valoración</th>
                                    <th scope="col">Financiación</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $TotalVotosPositivos = 0;
                                 $TotalVotosNegativos = 0;
                                 $SumaTotalVotos = 0;
                                 ?>

                                 <?php
                                 for ($i = 0; $i < $CantidadProductos; $i++) {
                                    $TotalVotosPositivos += $Productos[$i]['VotosPositivos'];
                                    $TotalVotosNegativos += $Productos[$i]['VotosNegativos'];
                                    $SumaTotalVotos = SumarVotos($Productos[$i]['VotosPositivos'], $Productos[$i]['VotosNegativos']);
                                    $PorcentVotosPositivos = number_format(PorcentajeVotosPositivos($Productos[$i]['VotosPositivos'], $SumaTotalVotos), 2);
                                    $ColorTexto = ColorTextoPorcentaje($PorcentVotosPositivos);
                                    $CantidadCuotas = CantidadCuotas($PorcentVotosPositivos);
                                    $ColorCuotas = ColorCuotasPorcentaje($PorcentVotosPositivos);
                                 ?>

                                    <tr>
                                       <th scope="row"><?php echo $Productos[$i]['id']; ?></th>
                                       <th scope="row">
                                          <a href="#"> <img src="<?php echo $Productos[$i]['Img']; ?>" alt="foto-producto"> </a>
                                       </th>

                                       <td>
                                          <a href="#" class="text-primary fw-bold">
                                             <?php echo $Productos[$i]['Nombre']; ?>
                                          </a>
                                          <div class="progress mt-3">
                                             <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: 94%" aria-valuenow=" 94" aria-valuemin="0" aria-valuemax="100" title='Stock Final: 94'></div>
                                          </div>
                                       </td>


                                       <td>
                                          <h3>
                                             <span title='Votos: Positivos <?php echo $Productos[$i]['VotosPositivos']; ?> y Negativos <?php echo $Productos[$i]['VotosNegativos']; ?>' class="badge border-warning border-1 <?php echo $ColorTexto ?>">
                                                <?php echo $PorcentVotosPositivos  ?> %
                                                <i class="bi bi-heart-fill danger"></i>
                                             </span>
                                          </h3>
                                          Total votos: <?php echo $SumaTotalVotos ?>
                                       </td>


                                       <td>
                                          <h4>
                                             <span class="badge <?php echo $ColorCuotas ?>"><i class="bi bi-check-circle me-1"></i> <?php echo  $CantidadCuotas ?> </span>
                                          </h4>
                                       </td>
                                    </tr>



                                 <?php }     ?>


                              </tbody>
                           </table>

                        </div>

                     </div>
                  </div><!-- End Top Selling -->



                  <div class="col-xxl-4 col-md-6">
                     <div class="card info-card revenue-card">

                        <div class="card-body">
                           <h5 class="card-title">Votos <span>| Total positivos</span></h5>

                           <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                 <i class="bi bi-hand-thumbs-up-fill"></i>
                              </div>
                              <div class="ps-3">
                                 <?php echo '<h6>' . $TotalVotosPositivos . '</h6>'; ?>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>

                  <div class="col-xxl-4 col-md-6">
                     <div class="card info-card revenue-card">

                        <div class="card-body">
                           <h5 class="card-title">Votos <span>| Total negativos</span></h5>

                           <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                 <i class="bi bi-hand-thumbs-down-fill"></i>
                              </div>
                              <div class="ps-3">
                                 <?php echo '<h6>' . $TotalVotosNegativos . '</h6>'; ?>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>


               </div><!-- End Left side columns -->
            </div>

      </section>

   </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <?php
   require_once './src/componentes/footer.php';
   ?>

   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files 2023-->
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Template Main JS File 2023-->
   <script src="assets/js/main.js"></script>

</body>

</html>