
<?php// include "headerproducts.php"; ?>
<?php include "header.php"; ?>
<?php







require "models/config.php";
 require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/user.php";
$product = new User;

$getAllProducts = $product->getAccount();



?>
   

<?php

$protype= new Protype();
$getAllProtype = $protype->getAllProtype();
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Account</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Account</li>
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Account</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                     
                     
                     
                      <th>id</th>
		<th>Name</th>
		<th>Password</th>
       <th>so ĐT</th>
       <th>Gmail</th>

		
		<th>Role_id</th>
                     
                  </tr>
              </thead>
              <tbody>
                <?php
                
                foreach($getAllProducts as $value)
                {
             
  ?>
  
 
 
 
                  <tr>

                  <td><?php  echo $value['user_id']; ?></td>
                                <td><?php echo $value['user_name'] ?></td>
                              

                            
                                <td><?php echo $value['password1']; ?></td>
                                <td><?php echo $value['soDT']; ?></td>
                                <td><?php echo $value['gmail']; ?></td>


                                <td><?php echo $value['role_id']; ?></td>
                                   
                    
                  
                 
                      
                      
                      
                      <td>
                  
                      </td>
                      
                        <?php
}
?>
                     
                      
                  </tr>
           
                 
                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include "footer.html"; ?>
  <?php// include "footerproducts.html"; ?>
  




    
       
   
          
   

                     
            
         
	