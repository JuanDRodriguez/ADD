<div class="container">
       <div class="row">
           <div class="col-lg-12">
            <button id="btnNuevo" type="button" class="btn btn-success">Nuevo</button>
           </div>
       </div>
   </div>
   <br> 
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width: 100%;">
                        <thead class="text-center">
                            <?php
                            InicioController::getList();
                            ?>
                        </tbody>
                    </table>
                </div>
           </div>
       </div>
   </div>