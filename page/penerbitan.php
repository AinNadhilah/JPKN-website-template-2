
<?php 
  $menu = $_GET['menu'];
  $menu = filter_var($menu, FILTER_SANITIZE_STRING);
  $menu = mysqli_real_escape_string($conn_cpanel, $menu);

  $sub =  $_GET['sub'];
  $sub = filter_var($sub, FILTER_SANITIZE_STRING);
  $sub = mysqli_real_escape_string($conn_cpanel, $sub);

   ?>
<!-- ======= Contact Section ======= -->
<section class="breadcrumbs">
      <div class="container">
        <?php  
            $sql_bt ="SELECT * FROM penerbitan WHERE  url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querybt = mysqli_query($conn_cpanel, $sql_bt);
            $result_bt  = mysqli_fetch_array($querybt,MYSQLI_ASSOC);        
          ?>
        <div class="d-flex justify-content-between align-items-center">
           <?php  
            $sql_bt ="SELECT * FROM penerbitan WHERE url_agensi = '$url_agensi' GROUP BY sub AND menu='$menu' AND sub='$sub'";
            $querybt = mysqli_query($conn_cpanel, $sql_bt);           
            while($result_bt  = mysqli_fetch_array($querybt,MYSQLI_ASSOC)){
              if (empty($result_bt['sub'])){                 
          ?>
          <h2 ><?php echo $result_bt ['menu'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><?php echo $result_bt ['menu'];?></a></li>            
          </ol>
          <?php } else { ?>
          <h2><?php echo $result_bt ['sub'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><a href=""><?php echo $result_bt ['menu'];?></a></li>
            <li><?php echo $result_bt ['sub'];?></li>
          </ol>
        <?php }} ?>
        </div>

      </div>
    </section><!-- End Contact Section -->

<section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">
        
          <div class="col-lg-8 entries" style="display:inline-block">      
           
            <div class="content">
            <?php  
            $sql_bt ="SELECT * FROM penerbitan WHERE  url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querybt = mysqli_query($conn_cpanel, $sql_bt);
            while($result_bt  = mysqli_fetch_array($querybt,MYSQLI_ASSOC)){  
            if(strpos($result_bt['type'],'gambar') !== false) {         
            ?>  
                <a class="cardss" href="#!">
                    <div class="fronts"  style="background-image: url(assets/img/penerbitancard.png)">
                        <p class="text-shadow"><?php echo $result_bt ['tarikh'];?><br><?php echo $result_bt ['tajuk'];?></p>
                    </div>
                    <div class="backs">
                        <div>
                            <p><?php echo $result_bt ['deskripsi'];?></p>
                            <button onclick="location.href='../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/penerbitan/<?php echo $result_bt ['fail'];?>'" data-galleryery="portfolioGallery" class="button portfolio-lightbox">Lanjut</button>
                        </div>
                    </div>
                </a>  
                <?php } else { ?>   
                  <a class="cardss" href="#!">
                    <div class="fronts"  style="background-image: url(assets/img/penerbitancard.png)">
                        <p class="text-shadow"><?php echo $result_bt ['tarikh'];?><br><?php echo $result_bt ['tajuk'];?></p>
                    </div>
                    <div class="backs">
                        <div>
                            <p><?php echo $result_bt ['deskripsi'];?></p>
                            <button onclick="location.href='../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/penerbitan/<?php echo $result_bt ['fail'];?>'" class="button">Lanjut</button>
                        </div>
                    </div>
                </a>  
                <?php }}//END WHILE ?> 
            </div>
         
        </div>
          <div class="col-lg-4">

            <div class="sidebar"> 
             
             

              <h3 class="sidebar-title">Terbaru</h3>
              <div class="sidebar-item recent-posts">
              <?php  
                  $sql_bt1 ="SELECT * FROM penerbitan WHERE  url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub' LIMIT 3 ";
                  $querybt1 = mysqli_query($conn_cpanel, $sql_bt1);
                  while($result_bt1  = mysqli_fetch_array($querybt1,MYSQLI_ASSOC)){  ?>
              <div class="post-item clearfix">
                  <img src="assets/img/penerbitancard.png" alt="">
                  <h4><a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/penerbitan/<?php echo $result_bt1 ['fail'];?>"><?php echo $result_bt1 ['tajuk'];?></a></h4>
                  <time datetime="<?php echo $result_bt1 ['tarikh'];?>"></time>
                </div>                
              <?php } ?>
              </div><!-- End sidebar recent posts-->             

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->