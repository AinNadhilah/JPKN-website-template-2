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
            $sql_carta ="SELECT DISTINCT menu,sub FROM carta WHERE url_agensi = '$url_agensi' AND menu='$menu' AND sub='$sub'";
            $querycarta = mysqli_query($conn_cpanel, $sql_carta);
            //$result_carta  = mysqli_fetch_array($querycarta,MYSQLI_ASSOC);
            while($result_carta  = mysqli_fetch_array($querycarta,MYSQLI_ASSOC)){
              if (empty($result_carta['sub'])){                 
          ?>
          <h2 ><?php echo $result_carta ['menu'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><?php echo $result_carta ['menu'];?></a></li>            
          </ol>
          <?php } else { ?>
          <h2><?php echo $result_carta ['sub'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><a href=""><?php echo $result_carta ['menu'];?></a></li>
            <li><?php echo $result_carta ['sub'];?></li>
          </ol>
        <?php }} ?>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
    <section class="chart"  data-aos="fade-up">
          <?php  
            $sql_carta ="SELECT * FROM carta WHERE  url_agensi = '$url_agensi'AND menu='$menu' AND sub='$sub' ";
            $querycarta = mysqli_query($conn_cpanel, $sql_carta);
            while($result_carta  = mysqli_fetch_array($querycarta,MYSQLI_ASSOC)){           
          ?> 
           
            <img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/carta_organisasi/<?php echo $result_carta ['fail'];?>"><br><br>
          <?php } ?>       
    </section>


    