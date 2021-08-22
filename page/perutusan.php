   
  <?php 
  $menu = $_GET['menu'];
  $menu = filter_var($menu, FILTER_SANITIZE_STRING);
  $menu = mysqli_real_escape_string($conn_cpanel, $menu);

  $sub =  $_GET['sub'];
  $sub = filter_var($sub, FILTER_SANITIZE_STRING);
  $sub = mysqli_real_escape_string($conn_cpanel, $sub);

   ?>
    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">     
        <div class="d-flex justify-content-between align-items-center">
          <?php  
            $sql_pr ="SELECT DISTINCT menu,sub FROM perutusan WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querypr = mysqli_query($conn_cpanel, $sql_pr);
            //$result_pr  = mysqli_fetch_array($querypr,MYSQLI_ASSOC);
            while($result_pr  = mysqli_fetch_array($querypr,MYSQLI_ASSOC)){
              if (empty($result_pr['sub'])){                 
          ?>
          <h2 ><?php echo $result_pr ['menu'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><?php echo $result_pr ['menu'];?></a></li>            
          </ol>
          <?php } else { ?>
          <h2><?php echo $result_pr ['sub'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><a href=""><?php echo $result_pr ['menu'];?></a></li>
            <li><?php echo $result_pr ['sub'];?></li>
          </ol>
        <?php }} ?>
        </div>

      </div>
    </section><!-- End About Us Section -->
    <?php  
            $sql_perts ="SELECT * FROM perutusan WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $queryperts = mysqli_query($conn_cpanel, $sql_perts);
            while($result_perts  = mysqli_fetch_array($queryperts,MYSQLI_ASSOC)){
            ?>
     <!-- ======= Perutusan Section ======= -->
    <section id="about" class="about">      
      <div class="container align-perutusan" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
            
            <a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/perutusan_sejarah/<?php echo $result_perts ['gambar'];?>" data-galleryery="portfolioGallery" class="portfolio-lightbox" ><img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/perutusan_sejarah/<?php echo $result_perts ['gambar'];?>"></a>
              <div class="box-content">
                <h3 class="title"></h3>
                <span class="post"></span>
              </div>  
            </div>            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3 class="text-start"><?php echo $result_perts ['tajuk'];?></h3>
            <p class="justify"><br><br><?php echo nl2br($result_perts ['deskripsi']);?></p>
           
            <!-- <p class="justify"><br><br>Terima kasih kepada para pengunjung laman web rasmi Jabatan Perkhidmatan Komputer Negeri (JPKN). Semoga laman web ini dapat memberikan maklumat yang tepat dan lengkap kepada para pengunjungnya.<br><br>JPKN adalah sebuah jabatan yang telah diberi mandat untuk merancang dan melaksanakan pembangunan serta pelaksanaan Teknologi Maklumat dan Komunikasi (ICT) dalam negeri Sabah. Justeru, JPKN komited dalam memberikan maklumat terkini mengenai perkembangan terkini pembangunan dan pelaksanaan ICT dalam Kerajaan Negeri Sabah.<br><br>JPKN juga sentiasa terbuka kepada teguran positif dan cadangan penambahbaikan yang berterusan daripada para pengunjung dan para pelanggannya. Semoga laman web ini menjadi pusat rujukan kepada para pelawat dan maklumat di dalamnya dapat memberikan manfaat kepada semua.
            <b><br><br>Sekian dan terima kasih.<br>Ernywati Dewi Abas<br>Pengarah Jabatan Perkhidmatan Komputer Negeri</b></p> -->
          </div>   
        </div>
        
      </div>
    
  </section>
  <?php } ?>
      <!-- End Perutusan Section -->
    


    <!-- ======= About Section ======= -->
   <!-- End About Section -->

    <!-- End Facts Section -->
