<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
require_once("baglan.php")
?>


<!-- Begin Page Content -->

<div class="col-xl-11 mt-2 col-lg-5 col-md-8 ml-5 items-align-center">
      
        
        <div class="card o-hidden border-5 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
              <div class="mb-5 ml-5 mt-5 mr-5 text-center text-warning">
                <h4><b>HAFTALIK PUAN DURUMU </h4>
              </div>
       
              <div class="card shadow mb-5 ml-5 mt-5 mr-5 text-center ">
              
        
        <?php for($hsayi=1;$hsayi<=10;$hsayi++){?>
        <div class="card-header  py-3">
            <h6 class="m-0 font-weight-bold text-dark"><?php echo $hsayi ?>.Hafta</h6>
        </div>
        
        <div class="card-body">
        
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        
                        <tr>
                            <th>Sıra</th>
                            
                            <th></th>
                            <th>Oynanan</th>
                            <th>Galibiyet</th>
                            <th>Beraberlik</th>
                            <th>Mağlubiyet</th>
                            <th>Atılan Gol</th>
                            <th>Yenilen Gol</th>
                            <th>Averaj</th>
                            <th>Puan</th>
                            
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                               $db = new database();
                           $haftalikPuanQuery = $db->getRows("SELECT * FROM scorestable WHERE hafta=$hsayi and sezon=1  ORDER BY sira ASC");
                            foreach ($haftalikPuanQuery as $items) {
                                ?>
                            <tr class="text-center">
                                <td>
                                <span class="badge badge-success ml-1"><?php if ($items->sira == 1) {
                                    echo $items->sira;
                                } ?></span>
                                <span class="badge badge-warning ml-1"><?php if ($items->sira == 2 || $items->sira == 3) {
                                    echo $items->sira;
                                } ?></span>
                                <span class="badge badge-danger ml-1"><?php if ($items->sira == 4) {
                                    echo $items->sira;
                                } ?></span>
                                 
                                </td>
                                
                                <td> <b><?php if ($items->memberTakimAdi == "MIKBALL") { ?> <img src="https://owcdn.net/img/626ab49e6c7f1.png" width="20px" height="20px" alt="MIKBALL" class=" rounded-circle mr-2"><?php }?>
                                    <?php if ($items->memberTakimAdi == "ARGALI22") { ?> <img src="https://owcdn.net/img/61b8888cc3860.png" width="20px" height="20px" alt="MIKBALL" class=" rounded-circle mr-2"><?php }?>
                                        <?php if ($items->memberTakimAdi == "YASIN1926") { ?> <img src="https://im.cdn.md/img/logo/buyuk/553.gif" width="20px" height="20px" alt="MIKBALL" class=" rounded-circle mr-2"><?php }?>
                                            <?php if ($items->memberTakimAdi == "OMER941") { ?> <img src="https://owcdn.net/img/62efc0067ed80.png" width="20px" height="20px" alt="MIKBALL" class=" rounded-circle mr-2"><?php }?>
                                    <?php echo $items->memberTakimAdi ?></b> </td>
                                <td> <?php echo $items->oynan?></td>
                                <td> <?php echo $items->galibiyet?></td>
                                <td> <?php echo $items->beraberlik?>  </td>
                                <td> <?php echo $items->maglubiyet?></td>
                                <td> <?php echo $items->atilangol?></td>
                                <td> <?php echo $items->yenilengol?></td>
                                <td> <?php echo $items->averaj?></td>
                                <td class="text-danger"><b><?php echo $items->puan?></b></td>
                                
                            </tr>
                            
                        <?php } ?>
                        
                        
                    </tbody>
                    
                </table>
                
                
            </div>
          
        </div>
        <?php }?>
        
    </div>
    <div class="card shadow mb-5 ml-5 mt-5 mr-5  ">
    <p class="ml-4 mt-2 font-weight-bold text-dark">Açıklama</p>
    <p class="ml-4 mt-2 ">Haftalık yapılan maçlara göre;</p> 
    <p><span class="badge badge-success ml-3 mr-1">1</span> 4 Puan</p>
    <p><span class="badge badge-warning ml-3 mr-1">2</span> 2 Puan</p>
    <p><span class="badge badge-warning ml-3 mr-1">3</span> 1 Puan</p>
    <p><span class="badge badge-danger ml-3 mr-1">4</span> 0 Puan</p>
    <p class="ml-4 mt-2">olacak şekilde genel puana eklenir.</p>
    <p class="ml-4 font-weight-bold text-dark ">Averaj Hesabı</p>  
    <p class="ml-3"><b>1.</b> İki takım arasındaki ikili averaj</p>
    <p class="ml-3"><b>2.</b> Gol averajı</p>
    <p class="ml-3"><b>3.</b> En fazla gol atan</p>
    
                                                   
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