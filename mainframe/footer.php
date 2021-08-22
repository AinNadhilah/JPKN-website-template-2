
<?php require("connection/db.php");?>
<?php require("connection/agensi.php");?>

<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
 <!-- ======= Map Section ======= -->
 <section class="map mt-2" style="background: white;" data-aos="fade-up">
      <div class="container-fluid p-0">
      <?php 
            $sql_mp     = "SELECT * FROM agensi WHERE  url_agensi = '$url_agensi'";
            $query_mp  = mysqli_query($conn_cpanel,$sql_mp);
            $result_mp  = mysqli_fetch_array($query_mp,MYSQLI_ASSOC);?>
        <iframe src="<?php echo $result_mp ['lokasi'];?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          <!-- https://maps.google.com/maps?q=PUSAT%20PENTADBORAN%20NEGERI%20SABAH&t=&z=13&ie=UTF8&iwloc=&output=embed -->
      </div>
    </section><!-- End Map Section -->
  
    <div class="footer-newsletter" data-aos="fade-up">
    <?php include("content/logo.php"); ?>
    </div>
    
    <div class="footer-top" data-aos="fade-up">
      <div class="container" data-aos="fade-up">
          <div class="row justify-content-around">
            <div class="col-6 col-md-4 footer-links">
              <h4>Pautan</h4>
              <ul>
                <?php  
                 $sql_url ="SELECT * FROM pautan_url WHERE  url_agensi = '$url_agensi'";
                 $queryurl = mysqli_query($conn_cpanel, $sql_url);
                 while($result_url  = mysqli_fetch_array($queryurl,MYSQLI_ASSOC)){
                 ?>
                    <li><i class="bx bx-chevron-right"></i> <a href="<?php echo $result_url ['pautan'];?>"><?php echo $result_url ['tajuk'];?></a></li>
                <?php } ?>                
              </ul>
              <div class="social-links mt-3">
                <a href="<?php echo $result ['twitter'];?>" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="<?php echo $result ['facebook'];?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="<?php echo $result ['youtube'];?>" class="youtube"><i class="bx bxl-youtube"></i></a>
               
              </div>  
           </div>

            <div class="col-6 col-md-4 footer-links">
              <h4>Waktu Pejabat</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <?php echo $result ['hari_bekerja'];?></li>
                <li><i class="bx bx-chevron-right"></i> <?php echo $result ['masa_bekerja'];?></li>
                <li><i class="bx bx-chevron-right"></i><?php echo $result ['waktu_rehat'];?></li>  
                <li><i class="bx bx-chevron-right"></i> <?php echo $result ['cuti'];?></li>  
              </ul>   
            </div>

            <div class="col-6 col-md-4 footer-contact">
              <h4>Alamat</h4>
                <p>
                  <?php echo $result ['alamat'];?><br><br>
                  <strong>No Tel:</strong>&nbsp;<?php echo $result ['notel'];?><br>
                  <strong>No Faks:</strong>&nbsp;<?php echo $result ['nofaks'];?><br>                  
                  <strong>Emel:</strong>&nbsp;<?php echo $result ['emel'];?><br>
                </p>
            </div>

            
          </div>
        </div>  
      </div>
      <div class="container">
        <div class="copyright " data-aos="fade-up">
            <?php 
            $sql_log     = "SELECT * FROM senarai_webmaster WHERE  url_agensi = '$url_agensi'";
            $query_log  = mysqli_query($conn_admin,$sql_log);
            $result_log  = mysqli_fetch_array($query_log,MYSQLI_ASSOC);
            ?>
          <p>Tarikh Akhir Dikemaskini : <?php echo date('d/m/Y | h:i A',strtotime($result_log['log_terakhir']))?>
          
          <!--COUNTER PELAWAT-->
          <?php 
            $sql_jum     = "SELECT pelawat FROM counter WHERE  url_agensi = '$url_agensi'";
            $query_jum  = mysqli_query($conn_cpanel,$sql_jum);
            $result_jum  = mysqli_fetch_array($query_jum,MYSQLI_ASSOC);
            

            $counter = $result_jum['pelawat']+1;

            $sql_up="UPDATE counter SET pelawat ='$counter' WHERE url_agensi = '$url_agensi' ";
            $query_up = mysqli_query($conn_cpanel,$sql_up);
          ?> 

          <br>Jumlah Pelawat : <br><span data-purecounter-start="0" data-purecounter-end="<?php echo $result_jum['pelawat'];?>" data-purecounter-duration="1" class="purecounter count"></span> Orang
          <!-- END PELAWAT -->
          <br>Hak Cipta @ (JPKN)-Sinaging Web. <a href="index.php" class="recolor">&copy; <?php echo $result ['nama']; ?></a></p>
          <!-- ################################################################################################ -->
          <br>
          <div id="menu" class="d-inline p-2">
            <ul style="margin-bottom:-2.5em;" class="clear list-inline">
            <?php 
            $sql_f     = "SELECT * FROM dasar_notis WHERE  url_agensi = '$url_agensi'";
            $query_f  = mysqli_query($conn_cpanel,$sql_f);
            $result_f  = mysqli_fetch_array($query_f,MYSQLI_ASSOC);
            ?>
              <li class="list-inline-item"><a class="list" href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/dasar_notis/<?php echo $result_f ['privasi'];?>">Dasar Privasi</a></li>
              <li class="list-inline-item"><a class="list" href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/dasar_notis/<?php echo $result_f ['keselamatan'];?>">Dasar Keselamatan </a></li>
              <li class="list-inline-item"><a class="list" href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/dasar_notis/<?php echo $result_f ['soalan_lazim'];?>">Soalan Lazim</a></li>
              <li class="list-inline-item"><a class="list" href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/dasar_notis/<?php echo $result_f ['notis_penafian'];?>">Notis Penafian</a></li>              
            </ul>
          </div>
        </div>        
      </div>
    </div>
</footer><!-- End Footer -->
