
<?php 
  $menu = $_GET['menu'];
  $menu = filter_var($menu, FILTER_SANITIZE_STRING);
  $menu = mysqli_real_escape_string($conn_cpanel, $menu);

  $sub =  $_GET['sub'];
  $sub = filter_var($sub, FILTER_SANITIZE_STRING);
  $sub = mysqli_real_escape_string($conn_cpanel, $sub);

   ?>
   
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
        <?php  
            $sql_np ="SELECT DISTINCT menu,sub FROM text_nopic WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querynp = mysqli_query($conn_cpanel, $sql_np);
            //$result_np  = mysqli_fetch_array($querynp,MYSQLI_ASSOC);
            while($result_np  = mysqli_fetch_array($querynp,MYSQLI_ASSOC)){
              if (empty($result_np['sub'])){                 
          ?>
          <h2 ><?php echo $result_np ['menu'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><?php echo $result_np ['menu'];?></a></li>            
          </ol>
          <?php } else { ?>
          <h2><?php echo $result_np ['sub'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><a href=""><?php echo $result_np ['menu'];?></a></li>
            <li><?php echo $result_np ['sub'];?></li>
          </ol>
        <?php }} ?>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
<!-- ======= Services Section ======= -->
<section id="nopic" class="services">
      <div class="container">

        <div class="row align-items-start">
          <?php  
            $sql_np ="SELECT * FROM text_nopic WHERE  url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querynp = mysqli_query($conn_cpanel, $sql_np);
            while($result_np  = mysqli_fetch_array($querynp,MYSQLI_ASSOC)){           
          ?>
          <div class="col-6 col-md-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-blue">
            
              <h4 class="title"><a href=""><?php echo $result_np ['tajuk'];?></a></h4>
              <p class="desc"><?php echo nl2br($result_np ['deskripsi']);?></p>
                <div class="button-container-1">
                  <span class="mas">Lanjut</span>
                  <button onclick="location.href='<?php echo $result_np ['link'];?>'" type="button" name="Hover">Lanjut</button>
                </div>
            </div>
          </div>
          <?php } ?>
          
        </div>

      </div>
</section><!-- End Services Section -->
   