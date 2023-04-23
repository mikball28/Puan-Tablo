<?php
include('includes/header.php');
include('includes/navbar.php');
require_once("baglan.php");
?>


<!-- Begin Page Content -->

<div class="col-xl-11 mt-2 col-lg-5 col-md-8 ml-5 items-align-center">

  <div class="card o-hidden border-5 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-12">
        <div class=" mt-5 mb-5 text-center">
                        <h6 class="m-0 font-weight-bold text-dark"> KUPALAR</h6>
                    </div>

          <div class=" mb-5 ml-5 mt-5 mr-5 ">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center  justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-500 "></h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <?php
               $db = new database();
                 $memberCount = $db->getColumn("SELECT COUNT(memberID) FROM members ");
                 $memberTeam = $db->getRows("SELECT * FROM members ");
                 foreach($memberTeam as $items){
                  
                 
            ?>
               
              <div class="col-xl-6 col-md-6 mb-4 ">
                <div class="card border-left-secondary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-danger text-uppercase mb-1 text-center">
                        <?php echo $items->memberTakimAdi; ?></div>
                        <div class="h5 mb-5 font-weight-bold text-gray-800 text-center">
                          <?php if($items->memberID ==1){?>
                        <img src="https://owcdn.net/img/626ab49e6c7f1.png" width="25px" height="25px" alt="MIKBALL"
                            class=" rounded-circle mr-2"><?php } ?>
                            <?php if($items->memberID ==2){?>
                              <img src="https://owcdn.net/img/61b8888cc3860.png" width="20px" height="20px" alt="ARGALI22" class=" rounded-circle mr-2">
                            
                            <?php } ?>
                            <?php if($items->memberID ==3){?>
                              <img src="https://im.cdn.md/img/logo/buyuk/553.gif" width="20px" height="20px" alt="MIKBALL" class=" rounded-circle mr-2">
                            
                            <?php } ?>
                            <?php if($items->memberID ==4){?>
                              <img src="https://owcdn.net/img/62efc0067ed80.png" width="20px" height="20px" alt="MIKBALL" class=" rounded-circle mr-2">
                            <?php } ?>

                        </div>
                        <div class="container-fluid row ">
                          <div class="mt-3">
                          <div class="mt-2">
                            <i class="fa fa-trophy text-warning" style="font-size:35px"></i>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
              

            </div>




          </div>
        </div>

      </div>




    </div>
  </div>


</div>









<?php
include('includes/scripts.php');
include('includes/footer.php');
?>