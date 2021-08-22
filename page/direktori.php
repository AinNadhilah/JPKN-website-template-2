
  <!-- start head -->
  
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
            $sql_dr ="SELECT * FROM direktori  WHERE url_agensi = '$url_agensi' GROUP BY sub AND menu='$menu' AND sub='$sub'";
            $querydr = mysqli_query($conn_cpanel, $sql_dr);           
            while($result_dr  = mysqli_fetch_array($querydr,MYSQLI_ASSOC)){
              if (empty($result_dr['sub'])){                 
          ?>
          <h2 ><?php echo $result_dr ['menu'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><?php echo $result_dr ['menu'];?></a></li>            
          </ol>
          <?php } else { ?>
          <h2><?php echo $result_dr ['sub'];?></h2>
          <ol>
            <li><a href="index.php">Utama</a></li>
            <li><a href=""><?php echo $result_dr ['menu'];?></a></li>
            <li><?php echo $result_dr ['sub'];?></li>
          </ol>
        <?php }} ?>
        </div>

      </div>
    </section><!-- End Contact Section -->

  <section>      
      <div class="container table-responsive"  data-aos="fade-up">
        <table id="myTable" style="background-color:white;" class="table  table-hover table-bordered rounded table-responsive " cellspacing="0" width="100%">
        
        <thead>
        <tr style="background-color: #fba8a4; background-image: linear-gradient(315deg, #fba8a4 0%, #dad2f3 74%);">
          <th>No.</th>
          <th>Nama Kakitangan</th>
          <th>Sambungan</th>
          <th>No. tel</th>
          <th>Bahagian/Cawangan/KSIT</th>
          <th>Gambar</th>
        </tr>
        </thead>
        <tbody style="background-color: #fba8a4; background-image: linear-gradient(315deg, #fba8a4 0%, #dad2f3 74%);">
          <?php
                  $counter =1;
                  $sql_dr ="SELECT * FROM direktori WHERE  url_agensi = '$url_agensi'";
                  $querydr = mysqli_query($conn_cpanel, $sql_dr);
                  while($result_dr  = mysqli_fetch_array($querydr,MYSQLI_ASSOC)){
                  ?>
          <tr>
          <td><?php echo $counter++;?></td>
          <td><?php echo $result_dr ['nama'];?></td>
          <td><?php echo $result_dr ['sambungan'];?></td>
          <td><?php echo $result_dr ['notel'];?></td>
          <td><?php echo $result_dr ['bahagian'];?></td>
          <td><a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/direktori/<?php echo $result_dr ['gambar'];?>" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $result_dr ['nama'];?>"><img height=100px; width=100px; src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/direktori/<?php echo $result_dr ['gambar'];?>"></a></td>
          </tr>
          <?php } ?>
        </tbody>
        </table>       
      </div>
      <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
      </script>    
  </section><!-- End perutusan Section -->
 
