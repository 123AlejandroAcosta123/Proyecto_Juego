<?php include ("base_datos.php")?>

<?php include ("includes/header.php")?>

<div class="container p-4">
    
  <div class="row">

    <div class="col-md-4">

        <?php if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-<?=$_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

         <div class ="card card-body ">

            <form action="Guardar.php" method="POST">

                <div class ="form-group">
                    <input type="text" name="Nombre" class="form-control" 
                     placeholder="Nombre del juego" autofocus>
                </div>

                <div class ="form-group">
                    <textarea name="Caracteristica" row="4" class="form-control" placeholder="Caracteristica"> 
                    </textarea>
                </div>

                <input type="submit" class="btn btn-success btn-block" name = "Guardar" 
                value = "Guardar juego" >

                <div class="col-md-8">

                  echo "hola";

                </div>
                
            </form>
         </div>
        
    </div>

  </div>
  
</div>




<?php include("includes/footer.php") ?>

