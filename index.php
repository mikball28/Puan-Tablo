<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
 require_once("baglan.php")
?>


<!-- Begin Page Content -->

<div class="col-xl-11 mt-2 col-lg-5 col-md-8 ml-5 items-align-center">
      
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
          
          <?php $db=new database();
          ?>
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            
                            <td>Sıra</td>
                            <th></th>
                            <th>Atılan Gol</th>
                            <th>Yenilen Gol</th>
                            <th>Averaj</th>
                            <th>Puan</th>
                            
                          
                        </tr>
                    </thead>
                    <tbody>
                      
                      <?php 
                      $memberCT = $db->getRows("SELECT * FROM members ");
                    
                      foreach($memberCT as $items){
                        $toplamAtilanGol = $db->getRow("SELECT SUM(atilangol) AS toplamdaAtilanGol  FROM scorestable WHERE memberID=$items->memberID AND sezon=1 ");
                        $toplamYenilenGol = $db->getRow("SELECT SUM(yenilengol) AS toplamdaYenilenGol   FROM scorestable WHERE memberID=$items->memberID AND sezon=1");
                        $averaj = $db->getRow("SELECT SUM(averaj) AS averaj   FROM scorestable WHERE memberID=$items->memberID AND sezon=1 ");
                        $genelPuan = $db->getRow("SELECT SUM(genelpuan) AS genelpuan  FROM scorestable WHERE memberID=$items->memberID AND sezon=1 ");?>
                     
                        
                            <tr class="text-center">
                                <td>
                                <?php if ($items->memberID == 1) { ?> <span class="badge badge-success ml-1"><?php echo "1"; } ?></span>
                                <?php if ($items->memberID == 2) { ?> <span class="badge badge-warning ml-1"><?php echo "2"; } ?></span>
                                <?php if ($items->memberID == 3) { ?> <span class="badge badge-warning ml-1"><?php echo "3"; } ?></span>
                                <?php if ($items->memberID == 4) { ?> <span class="badge badge-danger ml-1"><?php echo "4"; } ?></span>
                                </td>
                                <td> <?php echo $items->memberTakimAdi; ?></td>
                                <td> <?php echo $toplamAtilanGol->toplamdaAtilanGol; ?> </td>
                                <td> <?php echo $toplamYenilenGol->toplamdaYenilenGol; ?></td>
                                <td> <?php echo $averaj->averaj; ?> </td>
                                <td> <?php echo $genelPuan->genelpuan; ?> </td>
                                
                            </tr>
                      <?php }?>
                    </tbody>
                    

                </table>

            </div>

        </div>
        
        
    </div class="card border-left-info">
    <div class="card shadow mb-5 ml-5 mt-5 mr-5  ">
    <p class="ml-4 mt-2 font-weight-bold text-dark">Açıklama</p> 
    <p><span class="badge badge-success ml-3">Champion Tour Şampiyonu</p>
    <p><span class="badge badge-warning ml-3">Champion Tour 2. ve 3. leri</p>
    <p><span class="badge badge-danger ml-3">Champion Tour Sonuncusu</p>
    <p class="ml-4 font-weight-bold text-dark ">Averaj Hesabı</p>  
    <p class="ml-3"><b>1.</b> İki takım arasındaki ikili averaj</p>
    <p class="ml-3"><b>2.</b> Gol averajı</p>
    <p class="ml-3"><b>3.</b> En fazla gol atan</p>                                         
    </div>




    <div class=" ml-5 mt-5 mr-5 text-info text-center">
                <h4><b>Champions Tour İstatistik</b></h4>
              </div>
        <div class="card shadow mb-5 ml-5 mt-5 mr-5  ">
        <div class="container-fluid row ">

<!-- DataTales Example -->

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
<div class="card shadow mb-4 col-xl-6 ">
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
          </div>
        </div>
      </div>








  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>