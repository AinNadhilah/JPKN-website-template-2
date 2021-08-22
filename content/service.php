 
 <!-- ======= Services Section ======= -->
 <section class="services">
      <div class="container ">

        <div class="row justify-space">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch right-space" data-aos="fade-up">
            <div id="test">
              <div class="wrappers">
                <div class="cards">
                  <div class="front ">
                    <h1>Berita</h1>      
                      <p class="price">Lebih lanjut</p>
                  </div>
                  <div class="right">
                    <h2>Berita</h2>
                    <marquee behavior="scroll" direction="up" scrollamount="2" onmousedown="this.stop();" onmouseup="this.start();">
                      <ul class="makluman-text">
                      <?php
                        $sql_aa ="SELECT * FROM berita WHERE  url_agensi = '$url_agensi'";
                        $queryaa = mysqli_query($conn_cpanel, $sql_aa);
                        while($result_aa  = mysqli_fetch_array($queryaa,MYSQLI_ASSOC)){
                      ?>                        
                        <li class="makluman-bottom"><div class="icon"><i class="fa fa-bullhorn icon" aria-hidden="true"></i></div> <?php echo $result_aa ['tarikh'];?> <br> <?php echo $result_aa ['tajuk'];?><br><?php echo $result_aa ['deskripsi'];?><br><a class="link" href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/berita_aktiviti/<?php echo $result_aa ['pautan'];?>"> Klik Sini </a></li>
                  
                      <?php } ?>                           
                      </ul>
                    </marquee>   
                  </div>
                </div>
                <div class="img-wrappers">
                  <img src='assets/img/Daco_6016434.png' alt=''>    
                </div>
              </div>
            </div>
          </div>         
        
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch right-space" data-aos="fade-up">
            <div id="test">
              <div class="wrappers">
                <div class="cards">
                  <div class="front ">
                    <h1>Hebahan</h1>      
                      <p class="price">Lebih lanjut</p>
                  </div>
                  <div class="right">
                    <h2>Hebahan / Pengumuman</h2>
                    <marquee behavior="scroll" direction="up" scrollamount="2" onmousedown="this.stop();" onmouseup="this.start();">
                      <ul class="makluman-text">
                      <?php
                        $sql_bb ="SELECT * FROM pengumuman WHERE  url_agensi = '$url_agensi'";
                        $querybb = mysqli_query($conn_cpanel, $sql_bb);
                        while($result_bb  = mysqli_fetch_array($querybb,MYSQLI_ASSOC)){
                      ?>                        
                        <li class="makluman-bottom"><div class="icon"><i class="fa fa-bullhorn icon" aria-hidden="true"></i></div> <?php echo $result_bb ['tarikh'];?><br><?php echo $result_bb ['tajuk'];?><br><?php echo $result_bb ['deskripsi'];?><br><a class="link" href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/hebahan_pengumuman/<?php echo $result_bb ['pautan'];?>"> Klik Sini </a></li>
                  
                      <?php } ?> 
                      </ul>
                    </marquee>   
                  </div>
                </div>
                <div class="img-wrappers">
                  <img src='assets/img/Daco_6016434.png' alt=''>    
                </div>
              </div>
            </div>
          </div>
         

        </div>
      </div>

      </div>
    </section><!-- End Services Section -->
