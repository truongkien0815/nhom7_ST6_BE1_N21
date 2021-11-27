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
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
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
            <form action="add.php" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">name</label>
                <input type="text" name ='name' id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">protype</label>
                <select id="inputStatus" class="form-control custom-select" name="type">
                  <?php $Procduct= new Protype(); 
                $getProtype= $Procduct->getAllProtype();
                   ?>
                    
                  <option selected disabled>Select one</option>
                  <?php foreach($getProtype as $value)
                  { ?>
                  <option value = <?php echo $value['type_id']; ?>> 
                  <?php echo $value['type_name'] ?>
                </option>
                  <?php }?>
                </select>
                
              </div>
              <div class="form-group">
                <label for="inputStatus">manufacture</label>
                <select id="inputStatus" class="form-control custom-select" name="manu">
                  <?php $manu= new Manufacture(); 
                $getmanu= $manu->getAllmanufacture();
                   ?>
                    
                  <option selected disabled>Select one</option>
                  <?php foreach($getmanu as $value)
                  { ?>
                  <option value = <?php echo $value['manu_id']; ?>>
                  <?php echo $value['manu_name']; ?>
                 </option>
                  <?php }?>
                </select>
                
              </div>
             
              <div class="form-group">
                <label for="inputClientCompany">description</label>
                <input type="text" name ='desc'  id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Price</label>
                <input type="text" name = "price" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">image</label>
               
                <input type="file" name="image" id="fileToUpload" class="form-control"> 
  
                  <?php // <input type="text" name ="image" id="inputProjectLeader" class="form-control"> ?> 
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Budget</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control">
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
          <input type="submit" name= "submit" value="Create new Product" class="btn btn-success float-right">
          </form>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "footer.html" ?>