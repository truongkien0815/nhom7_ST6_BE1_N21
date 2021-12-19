<?php
/*
<form action="editmanu2.php?id=<?php echo $_GET['id']; ?>" method="post">
   
    <label for="">manu name</label>
    <input type="text" name="type_name" id="">
    <input type="submit" name ="submit" value="Chỉnh sửa">
    </form>
    */
    ?>


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
            <h1>Manufacture Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manufacture Edit</li>
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

          
   
  
 
   <form action="editmanu2.php?id=<?php echo $_GET['id']; ?>" method="post">
           
            <div class="card-body">
              <div class="form-group">
              <label for="">manu name</label>
                <input type="text" name ='type_name' id="inputName" class="form-control">
              </div>
             
             
              
             
           
             
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      
      </div>
      <div class="row">
        <div class="col-12">
          <a href="products.php" class="btn btn-secondary">Cancel</a>
          <input type="submit" name= "submit" value="Chỉnh sửa manufacture" class="btn btn-success float-right">
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