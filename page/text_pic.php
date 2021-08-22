 <?php 
  $menu = $_GET['menu'];
  $menu = filter_var($menu, FILTER_SANITIZE_STRING);
  $menu = mysqli_real_escape_string($conn_cpanel, $menu);

  $sub =  $_GET['sub'];
  $sub = filter_var($sub, FILTER_SANITIZE_STRING);
  $sub = mysqli_real_escape_string($conn_cpanel, $sub);

   ?>
<section class="breadcrumbs">
      <div class="container">
      <div class="d-flex justify-content-between align-items-center">
      <?php  
            $sql_tp ="SELECT DISTINCT menu,sub FROM text_pic WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querytp = mysqli_query($conn_cpanel, $sql_tp);
            //$result_tp  = mysqli_fetch_array($querytp,MYSQLI_ASSOC);
            while($result_tp  = mysqli_fetch_array($querytp,MYSQLI_ASSOC)){
              if (empty($result_tp['sub'])){                 
          ?>
          <h2 ><?php echo $result_tp ['menu'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><?php echo $result_tp ['menu'];?></a></li>            
          </ol>
          <?php } else { ?>
          <h2><?php echo $result_tp ['sub'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><a href=""><?php echo $result_tp ['menu'];?></a></li>
            <li><?php echo $result_tp ['sub'];?></li>
          </ol>
        <?php }} ?>
        </div>

      </div>
    </section><!-- End About Us Section -->
    <section>
       
<div id="pictext"  data-aos="fade-up">
<div class="container">
<div class="row">
        <?php  
            $sql_tp ="SELECT * FROM text_pic WHERE  url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querytp = mysqli_query($conn_cpanel, $sql_tp);
            while($result_tp  = mysqli_fetch_array($querytp,MYSQLI_ASSOC)){           
        ?> 
        <div class="col-md-4 col-sm-6">
            <div class="box">
                <img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/text_pic/<?php echo $result_tp ['gambar'];?>">
                <div class="box-content">
                    <h3 class="title"><?php echo $result_tp ['tajuk'];?></h3>
                    <span class="post"><marquee behavior="scroll" direction="up" scrollamount="2" class="height" onmousedown="this.stop();" onmouseup="this.start();"><?php echo $result_tp ['deskripsi'];?></marquee></span>
                </div>
                <ul class="icon">
                    <li><a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/text_pic/<?php echo $result_tp ['gambar'];?>" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $result_tp ['deskripsi'];?>"><i class="bx bx-plus"></i></a></li>
                    <li><a href="<?php echo $result_tp ['link'];?>"><i class="fa fa-link"></i></a></li>
                </ul>
            </div>
        </div>
       <?php } ?>
    </div>
</div>
</div>

</section>