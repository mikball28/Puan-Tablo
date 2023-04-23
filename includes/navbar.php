<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 mt-1 static-top shadow-lg">



      <!-- Topbar Header Başlıl -->
      <form class="d-none d-sm-inline-block form-inline  ml-md-3 mt-2 my-2 my-md-0 mw-100 navbar-search" >
        <!-- Nav Item - User Information -->
        <div class="nav-item dropdown no-arrow">
          <div class=" d-none d-lg-inline text-gray-1000 "></i>
            <p class="ml-1 mt-3 text-xl font-weight-bold text-danger text-lowercase">
              <i class="far fa-futbol items-align-center text-danger" style="font-size:12px"></i>
              turnuvam.com
            </p>
          </div>
        </div>
      </form>


      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav  mr-3">
          <nav class="nav">
            <a class="nav-link active" href="index.php">Champion Tour</a>
            <a class="nav-link action" href="haftalikPuan.php">Haftalık Puan Durumları</a>
            <a class="nav-link action" href="TakimBilgileri.php">Takım Bilgileri</a>
            <a class="nav-link action" href="forum.php">Forum</a>
            <a class="nav-link action" href="kupaMuzesi.php">Kupa Müzesi</a>

          </nav>
        </ul>
      </div>

      <div class="ribbon text-dark mr-3">
        <i class='fas fa-ribbon'></i>
      </div>


      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto mr-3 text-dark">
        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">+2</span>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow-lg animated--grow-in"
            aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
              MESAJLAR
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="font-weight-bold">
                <div class="small text-info"><i class="fas fa-window-close mt-2 text-xl text-info mr-2"></i>MIKBALL ·
                  ADMIN</div>
                <div class="ml-2">Arkdaşlar bu akşam düzenlenecek olan turnuvamız yarın akşam saat 20.45'e
                  ertelenmiştir!
                </div>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="font-weight-bold">
                <div class="small text-info"><i class="fas fa-window-close mt-2 text-xl text-info mr-2"></i>MIKBALL ·
                  ADMIN</div>
                <div class="ml-2">Bu Akşam Kepezde turnuvamı yapsak?
                </div>
              </div>
            </a>

            <a class="dropdown-item text-center " href="#"><i
                class="fas fa-envelope fa-fw text-xl text-primary"></i></a>
          </div>
        </li>

        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown">
            <i class='far fa-user text-primary' style='font-size:17px'></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow-lg animated--grow-in"
            aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
              ADMIN
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <div class="font-weight-bold">
                <div class="small text-info"><i class="fas fa-window-close mt-2 text-xl text-info mr-2"></i>MIKBALL ·
                  ADMIN</div>
                <div class="ml-2">
                  <form class="mb-2 mt-2" action="adminPanel.php" method="POST">
                    <div class="mb-2">
                      <input type="text" class="form-control mb-2" name="kullaniciAdi" placeholder="Kullanıcı Adı">
                      <input type="password" class="form-control" name="password" placeholder="Şifre">
                    </div>
                    <button type="submit" name="Agiris" class="btn btn-primary mt-1 "><i class='far fa-user mr-2'></i>Giriş
                      Yap</button>
                  </form>
                  <?php
                  if($_POST){
                    $kadi=$_POST['kullaniciAdi'];
                    $pass=$_POST['password'];

                    require_once("baglan.php");
                    $db=new database();
                    $admin=$db->getRows("SELECT * FROM members WHERE memberID=1");
                    foreach($admin as $i){
                      if($kadi==$i->memberKulanicilAdi and $pass == $i->memberPassword){
                        echo "Giris success";
                      }
                      else{
                        echo "failed";
                        
                      }
                    }
                    
                  }
                   ?>
                  
                </div>
              </div>
            </a>
            

            <a class="dropdown-item text-center " href="adminPanel.php"><i
                class="far fa-user fa-fw text-xl text-primary"></i></a>
          </div>
        </li>




      </ul>

    </nav>
    <!-- End of Topbar -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>