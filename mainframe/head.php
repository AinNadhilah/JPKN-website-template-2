<?php require("connection/agensi.php"); ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  

  <title><?php echo $result ['nama'];?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  

  <!-- Favicons -->
  <link href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/maklumat_agensi/<?php echo $result ['logo'];?>" rel="icon">
  <link href="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/maklumat_agensi/<?php echo $result ['logo'];?>" rel="icon">

  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"/>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/external.css" rel="stylesheet">
  <link href="assets/css/slider.css" rel="stylesheet">

  <link href="assets/css/logo.css" rel="stylesheet">
  <link href="assets/css/penerbitan.css" rel="stylesheet">
  <link href="assets/css/float.css" rel="stylesheet">

  <!-- Template Paging CSS File -->
  <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
  <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />

  <script src="assets/js/cap.js"></script>
  <script src="assets/js/jquery 3.6.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
     $.noConflict();
    jQuery( document ).ready(function( $ ) {
    $('#myTable').DataTable();
});
    </script> 
    <style>    

#tapuk { display: none;
}
</style>
<?php //include("unable_print.php"); ?>






  

</head>