<?php 

include("connection/db.php");
  $tajuk = $_GET['tajuk'];
  $tajuk = filter_var($tajuk, FILTER_SANITIZE_STRING);
  $tajuk = mysqli_real_escape_string($conn_cpanel, $tajuk);
  
?>
<!DOCTYPE html>
<?php include("mainframe/head.php"); ?>
<html lang="en" class="responsive">
<body>

<?php include("mainframe/navbar2.php"); ?>
   
<main id="main">
    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <?php  
            $sql_glr ="SELECT * FROM galeri WHERE url_agensi = '$url_agensi' AND tajuk='$tajuk'";
            $queryglr = mysqli_query($conn_cpanel, $sql_glr);
            $result_glr  = mysqli_fetch_array($queryglr,MYSQLI_ASSOC);
            ?>
        <div class="d-flex justify-content-between align-items-center">          
          <h2><?php echo $result_glr ['sub'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><a href="#"><?php echo $result_glr ['menu'];?></a></li>
            <li><?php echo $result_glr ['sub'];?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->
    <?php
    $sql = "SELECT * FROM galeri WHERE url_agensi = '$url_agensi' AND tajuk='$tajuk'";
    $queryglr = mysqli_query($conn_cpanel,$sql);
    ?>
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class=" portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">
              <?php while($result_glr = mysqli_fetch_array($queryglr,MYSQLI_ASSOC)){?>
                <div class="boxes swiper-slide">
                  <img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/galeri/<?php echo $result_glr ['tajuk'];?>/<?php echo $result_glr ['fail'];?>" alt="">               
                  <div class="boxes-content">
                      <div class="inner-content">
                        <h3 class="title"><?php echo $result_glr ['tajuk'];?><br><?php echo $result_glr ['tarikh'];?></h3>
                        <span class="post"><?php echo $result_glr ['deskripsi'];?></span>
                      </div>                   
                  </div>   
                </div>                
              <?php } ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?php echo $tajuk ?></h3>  
              <?php
                $sql = "SELECT * FROM galeri WHERE url_agensi = '$url_agensi' AND tajuk='$tajuk' ";
                $queryglr = mysqli_query($conn_cpanel,$sql);
                $result_glr = mysqli_fetch_array($queryglr,MYSQLI_ASSOC);
              ?>            
             
              <ul>
                <li><strong>Tarikh</strong>: <?php echo $result_glr ['tarikh'];?></li>
                <li><strong>Deskripsi</strong>: <?php echo $result_glr ['deskripsi'];?></li>           
              </ul>                    
            </div>
            <!-- <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
            </div> -->
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("mainframe/footer.php"); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php include("mainframe/scripts.php"); ?>

</body>

</html>
