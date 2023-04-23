<?php
include('includes/header.php');
include('includes/navbar.php');
require_once("baglan.php");
?>


<!-- Begin Page Content -->

<div class="col-xl-11 mt-2 col-lg-5 col-md-8 ml-5 items-align-center">


    <div class="row">
                


        <div class="card shadow mb-4 col-xl-8 mr-2 mt-5 ">
            <div class="card-header bg-dark py-3 mt-3">
                <h6 class="m-0 font-weight-bold text-light"><i class="fa fa-fire ml-0 mr-2"
                        style="font-size:17px;color:orange"></i>Forumda Neler Oluyor?</h6>

            </div>
            <?php
            for ($i = 1; $i <= 6; $i++) {
                ?>
                <hr class="mb-2 mt-2">
                <p class="text-xs font-weight-bold mb-1 ml-3 mr-4 text-primary">Konu · <span
                        class="text-dark">Turnuva</span> </p>
                <p class="text-xl font-weight-bold ml-3 mr-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Minima eaque est iste, ex animi velit debitis doloremque atque a, rerum ullam incidunt commodi! Qui quae
                    saepe tempora nisi adipisci necessitatibus.</p>
                <?php $username = "MIKBALL";
                if ($username == "MIKBALL") {
                    ?>
                    <p class="text-xs ml-3 mr-4 text-info"><img src="https://owcdn.net/img/626ab49e6c7f1.png" width="16px" height="16px" alt="MIKBALL" class=" rounded-circle "></i>
                        <?php echo $username ?> · 28.02.2023
                    </p>
                <?php } ?>
                <?php if ($username == "ARG28") {
                    ?>
                    <p class="text-xs ml-3 mr-4 text-success"><i class="fas fa-angry mr-2"></i>
                        <?php echo $username ?> · 28.02.2023
                    </p>
                <?php } ?>
                <?php if ($username == "YASIN1926") {
                    ?>
                    <p class="text-xs ml-3 mr-4 text-danger"><img src="https://im.cdn.md/img/logo/buyuk/553.gif" width="20px" height="20px" alt="MIKBALL" class=" rounded-circle mr-2">
                        <?php echo $username ?> · 28.02.2023
                    </p>
                <?php } ?>
                <?php if ($username == "OMER941") {
                    ?>
                    <p class="text-xs ml-3 mr-4 text-warning"><i class="fas fa-wind mr-2"></i>
                        <?php echo $username ?> · 28.02.2023
                    </p>
                <?php } ?>

            <?php } ?>
        </div>
        <div class="card shadow mb-4 col-xl-3 ml-2 mt-5 ">
            <div class="card-header text-secondary bg-light py-3">
                <h6 class="m-0 font-weight-bold text-dark">Üyeler</h6>
            </div>
            <?php
            $db = new database();
            $uyelerQuery = $db->getRows("SELECT * FROM members ORDER BY memberID DESC LIMIT 10");
            foreach($uyelerQuery as $items){
            ?>
            <p class="ml-1 mt-2 text-xl font-weight-bold text-info text-uppercase"><?php if ($items->memberID == 1) { ?><img src="https://owcdn.net/img/626ab49e6c7f1.png" width="18px" height="18px" alt="" class=" rounded-circle mr-2"><?php }?>
             <?php if ($items->memberID == 2) { ?><img src="https://owcdn.net/img/61b8888cc3860.png" width="20px" height="20px" alt="ARGALI22" class=" rounded-circle mr-2"><?php }?>
             <?php if ($items->memberID == 3) { ?><img src="https://im.cdn.md/img/logo/buyuk/553.gif" width="20px" height="20px" alt="MIKBALL" class=" rounded-circle mr-2"><?php }?>
             <?php if ($items->memberID == 4) { ?><img src="https://owcdn.net/img/62efc0067ed80.png" width="20px" height="20px" alt="MIKBALL" class=" rounded-circle mr-2"><?php }?>
            <?php echo $items->memberTakimAdi;?></p><?php } ?>
                    
                

            <div class="card-header text-secondary bg-light py-3">
                <h6 class="m-0 font-weight-bold text-dark">Forum İstatistik</h6>
            </div>
            <?php $sumMembers = $db->getColumn("SELECT COUNT(memberID) FROM members"); ?>
            <p class="ml-1 mt-2">Üyeler : <?php echo $sumMembers; ?></p>
            <p class="ml-1">Başlık :</p>
            <p class="ml-1 mb-5">Mesajlar :</p>
            

            <div class="card-header text-secondary bg-light py-3">
                <h6 class="m-0 font-weight-bold text-primary mb-3">Saat</h6>
                <?php include("saat.php"); ?>
            </div>


        </div>
    </div>
    <div class="card shadow mb-5 col-xl-11 ml-2 mt-5">
        <div class="mt-3 ml-5 mr-5">
            <form class="mb-5">
                <div class="mb-2">
                    <label for="konu" class="form-label">Konu</label>
                    <input type="text" class="form-control" id="konu">
                </div>
                <div class="mb-2">
                <textarea class="form-control" placeholder="Yorum" id="floatingTextarea "style="height: 150px" ></textarea>
                </div>
                
                <button type="submit" class="btn btn-warning mt-1 "><i class='far fa-comments mr-2'></i>Yorum Yap</button>
            </form>
        </div>
    </div>


</div>








<?php
include('includes/scripts.php');
include('includes/footer.php');
?>