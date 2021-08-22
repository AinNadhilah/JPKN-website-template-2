
       <!-- Slider -->
 <section  id="portfolio-details" class="portfolio-details w" style="background:#f3f8fa;" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row video-box">

          <div class="col-lg-12">
            <div class="portfolio-details-slider swiper-container">
              <div class="swiper-wrapper align-items-center">
              <?php
                $sql_logo = "SELECT * FROM slider WHERE url_agensi = '$url_agensi' ORDER BY ai ASC";
                $querylogo = mysqli_query($conn_cpanel, $sql_logo);
                while($result_slider = mysqli_fetch_array($querylogo,MYSQLI_ASSOC)){
              ?>

                <div class="swiper-slide">
                  <img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/slider/<?php echo $result_slider ['gambar'];?>" alt=""><a href="<?php echo $result_slider['link'];?>"class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>
              <?php } ?>                

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

  </section><!-- End Why Us Section -->
