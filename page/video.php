<?php 
  $menu = $_GET['menu'];
  $menu = filter_var($menu, FILTER_SANITIZE_STRING);
  $menu = mysqli_real_escape_string($conn_cpanel, $menu);

  $sub =  $_GET['sub'];
  $sub = filter_var($sub, FILTER_SANITIZE_STRING);
  $sub = mysqli_real_escape_string($conn_cpanel, $sub);

   ?>
<!-- ======= Our Portfolio Section ======= -->
<section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Video</h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li>Video</li>
          </ol>
        </div>

      </div>
</section><!-- End Our Portfolio Section -->
<section class="service-details">
  <div class="container">
        <div class="row">
            <?php                  
                $sql_v ="SELECT DISTINCT tajuk, pautan  FROM video WHERE  url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' ";
                $queryv = mysqli_query($conn_cpanel, $sql_v);
                while($result_v  = mysqli_fetch_array($queryv,MYSQLI_ASSOC)){
                if(strpos($result_v['pautan'],'youtu') !== false) {
             ?>   
            <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
              <a href="<?php echo $result_v ['pautan'];?>" data-galleryery="portfolioGallery" class="portfolio-lightbox"><img src="assets/img/vid.png" alt="..."></a>                   
              
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#"><?php echo $result_v ['tajuk'];?></a></h5>               
              </div>
            </div>
          </div>   
          <?php } else {?>      
            <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/ezgif-3-fdb9a057bb63.png" alt="video"><a href="<?php echo $result_v ['pautan'];?>" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>             
                </div>
                <div class="card-body">
                <h5 class="card-title"><a href="#"><?php echo $result_v ['tajuk'];?></a></h5>                
              </div>
            </div>
          </div>   
          <?php }}//END WHILE ?> 
        </div>
    </div>
</section>