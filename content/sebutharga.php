
<!-- ======= Features Section ======= -->
<section class="tender" data-aos="fade-up">    
      <div class="container">   
        <div class="section-title">         
          <a href="#0" class="bar-anchor" onclick="myFunction()" title="Lanjut"><span><h2>Tender /  Sebutharga</h2></span><div class="transition-bar"></div></a> 
        </div>      
        <div id="show" style="display: none;" data-aos="zoom-in">
        <div class="table-responsive">
        <table class="table table-hover table-bordered rounded table-responsive" style="background-color:white;">
          <thead>
            <tr  style="background-image: linear-gradient(to right, #a79ce5, #e597a0);">
              <th scope="col">No.</th>
              <th scope="col">No Rujukan</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Jenis Perolehan</th>
              <th scope="col">Tarikh Tutup</th>
              <th scope="col">Borang</th>
              <th scope="col">Makluman</th>
            </tr>
          </thead>
          <tbody>
          <?php
                  $counter =1;
                  $sql_sh ="SELECT * FROM sebutharga WHERE  url_agensi = '$url_agensi'";
                  $querysh = mysqli_query($conn_cpanel, $sql_sh);
                  while($result_sh  = mysqli_fetch_array($querysh,MYSQLI_ASSOC)){
                  ?>         
            <tr>                            
                  <th scope="row"><?php echo $counter++;?></th>
                  <td><?php echo $result_sh ['rujukan'];?></td>
                  <td><?php echo $result_sh ['keterangan'];?></td>
                  <td><?php echo $result_sh ['perolehan'];?></td>
                  <td><?php echo $result_sh ['tarikh'];?></td>
                  <td><a href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/sebutharga_tender/<?php echo $result_sh ['fail'];?>">Klik Sini</a></td>
                  <td><?php echo $result_sh ['makluman'];?></td>                    
            </tr>     
            <?php } ?>        
          </tbody>
        </table>  
        </div>
        </div>
          
      </div>
      <script>
        function myFunction() {
          var x = document.getElementById("show");
          if (x.style.display === "none") {
            x.style.display = "block";
          } else {
            x.style.display = "none";
          }
      }
      </script>
   
</section><!-- End Features Section -->
