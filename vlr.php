<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<!-- Begin Page Content -->

<div class="col-xl-11 mt-2 col-lg-5 col-md-8 ml-5 items-align-center">


  <div class="row">


    <div class="card shadow mb-4 col-xl-8 mr-2 mt-5 ">
    <div class="card-body">
    <div class="card o-hidden border-5 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
              <div class=" ml-5 mt-5 mr-5 text-danger text-center">
                <h4><b>TURNUVA TAKIM RANK :</b> Sezon 1</h4>
              </div>
              <div class=" mb-2 ml-5 mt-5 mr-5 text-center text-dark">
                <h4><b>Champions Tour</b></h4>
              </div>
              <div class="card shadow mb-5 ml-5 mt-2 mr-5 text-center ">
     
        <div class="card-body">
            

        
    </div>





    <div class="card shadow mb-4 col-xl-3 ml-2 mt-5 ">
      <div class="card-header text-secondary bg-light py-3">
        <h6 class="m-0 font-weight-bold text-dark">Son Haftanın Puan Durumu</h6>
      </div>
      <div class="card-body">
          
          
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <td>Takım</td>
                            <th>Puan</th>
                            
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <tr class="text-center">
                                <td>
                                <span class="badge badge-success ml-1"><?php if ($i == 1) { echo $i;} ?></span>
                                <span class="badge badge-warning ml-1"><?php if ($i == 2 || $i==3) { echo $i;} ?></span>
                                <span class="badge badge-danger ml-1"><?php if ($i == 4) { echo $i;} ?></span>
                                
                                </td>
                                <td> MIKBALL </td>
                                
                                <td>6</td>
                               



                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>
        <?php for($i=1;$i<=5;$i++){
  if($i==1){
    $day = "Gol Krallığı";
  }
  else if($i==2){
    $day = "Birincilik";
  }
  else if($i==3){
    $day = "İkincilik ";
  }
  else if($i==4){
    $day = "Üçüncülük";
  }
  else if($i==5){
    $day = "Dördüncülük";
  }
  
 ?>
<div class="card shadow mb-4  ">
  <div class="card-header bg-info py-3">
    <h6 class="m-0 font-weight-bold text-light"><?php echo $day  ?>
    
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
      
        <tbody>
          <?php for($a=1;$a<=4;$a++){ ?>
          <tr>
            <td> MIKBALL </td>
            <td> <?php if($day=="Birincilik"){
              echo "22";
            }
            elseif($day=="İkincilik"){
              echo "22";
            }
            elseif($day=="Üçüncülük"){
              echo "22";
            }
            elseif($day=="Dördüncülük"){
              echo "22";
            }
            elseif($day=="Gol Krallığı"){
              echo "22";
            } ?></td>
          </tr>
          <?php }?>
        
        </tbody>
      </table>

    </div>
    
  </div>
</div>
<?php } ?>

</div>

      
      


    </div>
  </div>
  


</div>








<?php
include('includes/scripts.php');
include('includes/footer.php');
?>