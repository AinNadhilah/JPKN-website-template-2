
       <!-- Slider -->
<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">

<div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <!-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
      <?php
         $count=1;
         $counter=2;
         $sql_idc = "SELECT *, COUNT(*) AS total FROM slider WHERE url_agensi = '$url_agensi' ";
         $queryidc = mysqli_query($conn_cpanel,$sql_idc);
        while($result_idc = mysqli_fetch_array($queryidc,MYSQLI_ASSOC)){            
        if ( $result_idc['total']>1){
        ?>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $count++ ?>" aria-label="Slide <?php echo $counter++ ?>"></button>
        <?php }} ?>     
    </div>
  <div class="carousel-inner">   
        <?php
            $sql_logo = "SELECT * FROM slider WHERE url_agensi = '$url_agensi' ORDER BY ai ASC LIMIT 1";
            $querylogo = mysqli_query($conn_cpanel, $sql_logo);
            $result_slider  = mysqli_fetch_array($querylogo,MYSQLI_ASSOC);
            ?>
        
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/slider/<?php echo $result_slider ['gambar'];?>" class="d-block w-100" alt="..."><a href="<?php echo $result_slider['link'];?>"class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      <div class="carousel-caption d-none d-md-block"></div>   
    </div>
    <?php
        $sql_logo = "SELECT * FROM slider WHERE url_agensi = '$url_agensi'  AND ai != '".$result_slider['ai']."' ORDER BY ai ASC";
        $querylogo = mysqli_query($conn_cpanel,$sql_logo);
        while($result_slider = mysqli_fetch_array($querylogo,MYSQLI_ASSOC)){
        for($interval = 2000; $interval < 10000; $interval++) {
        $interval = $interval + 1000;
        ?>
    <div class="carousel-item" data-bs-interval=" <?php echo $interval;  }; ?>     ">
      <img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/slider/<?php echo $result_slider ['gambar'];?>" class="d-block w-100" alt="..."><a href="<?php echo $result_slider['link'];?>"class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
      <div class="carousel-caption d-none d-md-block">
      <?php } ?>
      </div>
    </div>
    
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</section><!-- End Why Us Section -->