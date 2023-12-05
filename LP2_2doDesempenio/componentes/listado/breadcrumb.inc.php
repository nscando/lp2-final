 <div class="page-header">
     <div class="page-block">
         <div class="row align-items-center">
             <div class="col-md-12">
                 <div class="page-header-title">
                     <h5 class="m-b-10">Prestaciones</h5>
                 </div>
                 <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item"><a href="#!">Listados</a></li>
                     <?php
                        switch ($usuarioRol) {
                            case 4:
                                echo '<li class="breadcrumb-item">Todas las Prestaciones cargadas</li>';
                                break;
                            case 3:
                                echo '<li class="breadcrumb-item">Mis Turnos Asignados</li>';
                                break;
                            case 2:
                                echo '<li class="breadcrumb-item">Mis Prestaciones Cargadas</li>';
                                break;
                            case 1:
                                echo '<li class="breadcrumb-item">Todas las Prestaciones Cargadas</li>';
                                break;
                            default:
                                echo ' ';
                                break;
                        }
                        ?>

                     <!-- ver los titulos solicitados en el pdf-->

                 </ul>
             </div>
         </div>
     </div>
 </div>