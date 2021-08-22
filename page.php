<!DOCTYPE html>
<?php require("connection/db.php")?>
<html lang="en">

<?php include("mainframe/head.php"); ?>

<body>
<?php include("mainframe/navbar2.php"); ?>
  <main id="main">  
   <?php 
   include("content/float2.php"); 
  include("page/switchcase.php");
  include("page/".$load);
  ?>
  </main><!-- End #main -->
  <?php include("mainframe/footer.php"); ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <?php include("mainframe/scripts.php"); ?>
</body>
</html>