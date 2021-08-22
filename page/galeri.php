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
        <?php  
            $sql_gl ="SELECT DISTINCT menu,sub FROM galeri WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querygl = mysqli_query($conn_cpanel, $sql_gl);
            //$result_gl  = mysqli_fetch_array($querygl,MYSQLI_ASSOC);
            while($result_gl  = mysqli_fetch_array($querygl,MYSQLI_ASSOC)){
              if (empty($result_gl['sub'])){                 
          ?>
          <h2 ><?php echo $result_gl ['menu'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><?php echo $result_gl ['menu'];?></a></li>            
          </ol>
          <?php } else { ?>
          <h2><?php echo $result_gl ['sub'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><a href=""><?php echo $result_gl ['menu'];?></a></li>
            <li><?php echo $result_gl ['sub'];?></li>
          </ol>
        <?php }} ?>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Galeri Section ======= -->
    <section class="portfolio">
      <div class="container">

        <!-- <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>          
            </ul>
          </div>
        </div> -->
        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
          <?php  
            
            $sql_gl ="SELECT * FROM galeri WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' GROUP BY tajuk";
            $querygl = mysqli_query($conn_cpanel, $sql_gl);
            while($result_gl  = mysqli_fetch_array($querygl,MYSQLI_ASSOC)){
          ?>
          <div class="col-lg-4 col-md-6 portfolio-wrap">        
            <div class="portfolio-item">
              <a href=""><img style="min-height: 200px;"src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/galeri/<?php echo $result_gl ['tajuk'];?>/<?php echo $result_gl ['fail'];?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><?php echo $result_gl ['tajuk'];?><br><?php echo $result_gl ['tarikh'];?></h3>
                <div>
                  <a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/galeri/<?php echo $result_gl ['tajuk'];?>/<?php echo $result_gl ['fail'];?>" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $result_gl ['deskripsi'];?>"><i class="bx bx-plus"></i></a>
                  <a href="albumdetail.php?tajuk=<?php echo $result_gl['tajuk']; ?>"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>          
          </div>
          <?php } ?>          
        </div>
        
      </div>
    </section><!-- End Galeri Section -->