 <div class="col-xl-6 col-md-12">
     <div class="card flat-card">
         <div class="row-table">
             <div class="col-sm-6">
                 <div class="card prod-p-card background-pattern">
                     <div class="card-body">
                         <div class="row align-items-center m-b-0">
                             <div class="col">
                                 <h6 class="m-b-5">Cantidad de Prestaciones Complejas</h6>
                                 <h3 class="m-b-0"><?php echo $prestacionesComplejas ?></h3>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-tags text-primary"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-sm-6">
                 <div class="card prod-p-card bg-primary background-pattern-white">
                     <div class="card-body">
                         <div class="row align-items-center m-b-0">
                             <div class="col">
                                 <!-- En este punto modifique el texto para que el Usuario "Paciente" no vea como "Recaudado", sino como "Abonado" -->
                                 <h6 class="m-b-5 text-white">Total Reacudado</h6>
                                 <<h3 class="m-b-0 text-white">$<?php echo $recaudacion; ?></h3>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-money-bill-alt text-white"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </div>

 </div>