</main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">                            
                            <div>                                                         
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?= URL ?>public/js/jquery-3.5.1.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> 
        <script src="<?=URL?>public/js/plantilla/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> 
        <!-- <script src="assets/demo/chart-area-demo.js"></script> -->
        <!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
        <script type="text/javascript" src="<?= URL ?>public/dataTables/datatables.min.js"></script>
        <script src="<?=URL?>public/js/tablas/tablas.js"></script>    

        <!-- sweetalert2 -->
         <script type="text/javascript" src="<?php echo URL; ?>plugins/sweetalert2/dist/sweetalert2.min.js"></script> 
        <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
        <script src="<?php echo URL;?>public/js/application.js"></script>  
        <script>
            var url = "<?php echo URL; ?>"
        </script> 
        
        <!-- validaciones  -->
        <script type="text/javascript" src="<?php echo URL; ?>plugins/jqueryvalidator/jquery.validate.min.js"></script> 
        <script type="text/javascript" src="<?php echo URL; ?>plugins/jqueryvalidator/localization/messages_es.min.js"></script> 
        <script src="<?php echo URL;?>public/js/validaciones/validaciones.js"></script>  
        <!-- ****************** -->


        <script>        
            $(function(){
                <?php if (isset($_SESSION["registro"]) && $_SESSION["registro"] != null ):?>
                                        
                    Swal.fire({
  
                        icon: 'success',
                        title: '<?= $_SESSION["registro"] ?>',                        
                        showConfirmButton: false,
                        timer: 1800
                    })
                    
                    <?php $_SESSION["registro"] = null; ?>          
    
                    // Swal.fire({
                    //     icon: 'error',
                    //     title: 'Oops...',
                    //     text: 'Something went wrong!',                       
                    // })       
                <?php endif; ?>
            })
        </script>  
    
        <script>

            $(function(){
                
                <?php if (isset($_SESSION["editar"]) && $_SESSION["editar"] != null ):?>
                    
                    Swal.fire({
  
                        icon: 'success',
                        title: '<?= $_SESSION["editar"] ?>',                        
                        showConfirmButton: false,
                        timer: 1800
                    })
                    
                    <?php $_SESSION["editar"] = null; ?>          
    
                    // Swal.fire({
                    //     icon: 'error',
                    //     title: 'Oops...',
                    //     text: 'Something went wrong!',                       
                    // })       
                <?php endif; ?>
            })
        </script>          
                
        
        
    </body>
</html>
