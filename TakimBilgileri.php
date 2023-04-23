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
                    <div class="card-header  py-3 mt-4 mb-5 text-center">
                        <h6 class="m-0 font-weight-bold text-dark"> TAKIM BİLGİLERİ</h6>
                    </div>
                    <div class=" mb-5 ml-5 mt-5 mr-5  ">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"></h1>
                        </div>
                        <!-- Content Row -->
                        <div class="row">
                        <?php
               $db = new database();
                 $memberCount = $db->getColumn("SELECT COUNT(memberID) FROM members ");
                 $memberTeam = $db->getRows("SELECT * FROM members ");
                        foreach ($memberTeam as $items) {


                            ?>
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-6 col-md-6 mb-4 ">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1 text-center">
                                                    <?php echo $items->memberTakimAdi; ?></div>
                                                <div class="h5 mb-4 font-weight-bold text-gray-800 text-center text-uppercase">
                                                <?php echo $items->memberNSurname; ?>
                                                </div>
                                                <div class="container-fluid row ">
                                                    
                                                <?php
                                                $db = new database();
                                                $toplamAtilanGol = $db->getRow("SELECT SUM(atilangol) AS toplamdaAtilanGol  FROM scorestable WHERE memberID=$items->memberID AND sezon=1 ");
                                                $toplamYenilenGol = $db->getRow("SELECT SUM(yenilengol) AS toplamdaYenilenGol   FROM scorestable WHERE memberID=$items->memberID AND sezon=1");
                                                $averaj = $db->getRow("SELECT SUM(averaj) AS averaj   FROM scorestable WHERE memberID=$items->memberID AND sezon=1 ");
                                                $Birinci = $db->getColumn("SELECT COUNT(sira) FROM scorestable WHERE memberID=$items->memberID AND sezon=1 AND sira=1");
                                                $İkinci = $db->getColumn("SELECT COUNT(sira) FROM scorestable WHERE memberID=$items->memberID AND sezon=1 AND sira=2");
                                                $Ucuncu = $db->getColumn("SELECT COUNT(sira) FROM scorestable WHERE memberID=$items->memberID AND sezon=1 AND sira=3");
                                                $Dorduncu = $db->getColumn("SELECT COUNT(sira) FROM scorestable WHERE memberID=$items->memberID AND sezon=1 AND sira=4");
                                                $genelPuan = $db->getRow("SELECT SUM(genelpuan) AS genelpuan  FROM scorestable WHERE memberID=$items->memberID AND sezon=1 ");


                                                ?>
                                                <?php for ($i = 1; $i <= 8; $i++) {
                                                    if ($i == 1) {
                                                        $baslik = "Atılan Gol";
                                                    } elseif ($i == 2) {
                                                        $baslik = "Yenilen Gol";
                                                    } elseif ($i == 3) {
                                                        $baslik = "Averaj ";
                                                    } elseif ($i == 4) {
                                                        $baslik = "1.lik ";
                                                    } elseif ($i == 5) {
                                                        $baslik = "2.lik ";
                                                    } elseif ($i == 6) {
                                                        $baslik = "3.lük ";
                                                    } elseif ($i == 7) {
                                                        $baslik = "4.lük ";
                                                    } elseif ($i == 8) {
                                                        $baslik = "CT Puan";
                                                    } ?>
                                                        
                                                            
                                                        <div class="card shadow p3  mr-2 mt-3 col-xl-3 ">
                                                            <div class="card-header bg-info py-3">
                                                                <h6 class="m-0 font-weight-bold text-light"> <?php echo $baslik; ?></h6>
                                                            </div>
                                                            <div class="golsayi text-center mt-1"><?php
                                                            if ($i == 1) {
                                                                echo $toplamAtilanGol->toplamdaAtilanGol;
                                                            } elseif ($i == 2) {
                                                                echo $toplamYenilenGol->toplamdaYenilenGol;
                                                            } elseif ($i == 3) {
                                                                echo $averaj->averaj;
                                                            } elseif ($i == 4) {
                                                                echo $Birinci;
                                                            } elseif ($i == 5) {
                                                                echo $İkinci;
                                                            } elseif ($i == 6) {
                                                                echo $Ucuncu;
                                                            } elseif ($i == 7) {
                                                                echo $Dorduncu;
                                                            } elseif ($i == 8) {
                                                                echo $genelPuan->genelpuan;
                                                            }
                                                            ?></div>
                                                        </div>
                                                        <?php } ?>
                                                       
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <?php if($items->memberID ==1){?>
                                           <img src="https://owcdn.net/img/626ab49e6c7f1.png" width="35px" height="35px" alt=""
                                            class=" rounded-circle mr-2"><?php } ?>
                                            <?php if($items->memberID ==2){?>
                                            <img src="https://owcdn.net/img/61b8888cc3860.png" width="35px" height="35px" alt="" class=" rounded-circle mr-2">
                                            
                                            <?php } ?>
                                            <?php if($items->memberID ==3){?>
                                            <img src="https://im.cdn.md/img/logo/buyuk/553.gif" width="35px" height="35px" alt="" class=" rounded-circle mr-2">
                                            
                                            <?php } ?>
                                            <?php if($items->memberID ==4){?>
                                            <img src="https://owcdn.net/img/62efc0067ed80.png" width="35px" height="35px" alt="" class=" rounded-circle mr-2">
                                            <?php } ?>
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