<div id="slide" class="slider" data-ride="carousel" data-interval="500" data-pause="hover">
	<div class="slide-track" >

		<div class="slide"  >
                  <?php
                  $sql_logo ="SELECT * FROM pautan_agensi WHERE  url_agensi = '$url_agensi'";
                  $querylogo = mysqli_query($conn_cpanel, $sql_logo);
                  while($result_menu  = mysqli_fetch_array($querylogo,MYSQLI_ASSOC)){
                  ?>
                        <a href="<?php echo $result_menu ['pautan'];?>"><img title="<?php echo $result_menu ['tajuk'];?>" src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/pautan_agensi/<?php echo $result_menu ['logo'];?>" height="100"/></a>
                  
                   <?php } ?>    
 	 	
		</div>		
	</div>
</div>