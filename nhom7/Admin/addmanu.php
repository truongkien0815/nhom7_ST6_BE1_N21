
   <?php 
   // <form action="addmanu2.php" method="post">
   // <input type="text" name="manu_id" id="">
   // <input type="text" name="manu_name" id="">
   // <input type="submit" name ="submit" value="">
   // </form>?>



<?php include "header.php" ?>
<?php
require "models/config.php";
 require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manufactures.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manufacture add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manufacture Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="addmanu2.php" method="post">
            <div class="card-body">
             
             
              <div class="form-group">

                <label for="inputName">Manufacture_Name</label>
                <input type="text" name="manu_name" id="" class="form-control">
              </div>
           
            
   
   
             
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      
      </div>
      <div class="row">
        <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" name= "submit" value="Add Manufacture" class="btn btn-success float-right">
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.html" ?>
     




</body>
</html>
 