<?php include("mainframe/head.php"); ?>
<?php require("connection/agensi.php");?>

<body onload="createCaptcha()">

<?php include("mainframe/navbar2.php"); ?>

  <main id="main">
  <?php include("content/float.php"); ?> 
    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Maklum Balas</h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li>Maklum Balas</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p><?php echo $result ['alamat'];?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Emel</h3>
                  <p><?php echo $result ['emel'];?></p>
                  <br><br>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Hubungi Kami</h3>
                  <strong>No Tel:</strong>&nbsp;<?php echo $result ['notel'];?><br>
                  <strong>No Faks:</strong>&nbsp;<?php echo $result ['nofaks'];?><br>                  
                  <strong>Emel:</strong>&nbsp;<?php echo $result ['emel'];?><br>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/insert.php" method="post" role="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="emel" placeholder="Emel" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="tel" pattern="[0-9]{3}-[0-9]{8}" class="form-control" name="notel" placeholder="No. Tel Format:123-4567890" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="mesej" rows="5" placeholder="Mesej/Cadangan/Aduan/Maklumbalas" required></textarea>
              </div>              
              <br>
              <div class="row">
                <div id="captcha" class="text-center" style="background:white;"></div>
                <div id="cp" class="col-md-10 form-group">
                  <input type="text" class="form-control" placeholder="captcha"  id="cpatchaTextBox"/> 
                </div>
                <div id="cp" class="col-md-2 form-group mt-3 mt-md-0">
                  <button onclick="validateCaptcha()">Sahkan</button>
                </div>
              </div>
              <div id="tapuk" class="text-center"><br><br><button type="submit" name="submit" >Hantar</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

   
    
  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->
  <?php include("mainframe/footer.php"); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include("mainframe/scripts.php"); ?>


  </body>
</html>