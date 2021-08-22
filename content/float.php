<?php require("connection/db.php");?>
<?php require("connection/agensi.php");?>

 <!-- Floating Social Media bar Starts -->
 <div class="float-sm social-links">
 <div class="fl-fl float-tw">
    <i class="fab fa-twitter" style= "font-size: 40px; color:white;"></i>
    <a href="<?php echo $result ['twitter'];?>" target="_blank">Ikuti Kami!</a>
  </div>
  <div class="fl-fl float-fb">
    <i class="bx bxl-facebook" style= "font-size: 40px; color:white;"></i>
    <a href="<?php echo $result ['facebook'];?>" target="_blank">Ikuti Kami!</a>
  </div>  
  <div class="fl-fl float-yt">
    <i class="bx bxl-youtube" style= "font-size: 40px; color:white;"></i>
    <a href="<?php echo $result ['youtube'];?>" target="_blank">Lanjut</a>
  </div>
</div>
<!-- Floating Social Media bar Ends -->