<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
        <!-- <h1 class="text-light"><a href="index.php"><img src="../cpanel.sabah.gov.my/media_agensi/<?php //echo $url_agensi; ?>/maklumat_agensi/<?php //echo $result ['logo'];?>"><span><?php //echo $result ['nama'];?></span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="index.php"><img src="../cpanel.sabah.gov.my/media_agensi/<?php echo $url_agensi; ?>/maklumat_agensi/<?php echo $result ['logo'];?>" alt="logo" height="20%" widht="20%" class="img-fluid"><span></span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class=" " href="index.php">Home</a></li>
          <?php 
            $sql_menu     = "SELECT DISTINCT(menu), sub, page as pge FROM menu_main WHERE  url_agensi = '$url_agensi' GROUP BY menu ORDER BY ai ASC";
            $query1_menu  = mysqli_query($conn_cpanel,$sql_menu);
            while($result_menu  = mysqli_fetch_array($query1_menu,MYSQLI_ASSOC))
            {
            if (empty($result_menu['pge'])){  
          ?>

          <li class="dropdown">
            
          
                  <a href="#"><?php echo $result_menu['menu'];?>  <i class="bi bi-chevron-down"></i>
                  <ul>             

                   <?php
                  $sql_submenu     = "SELECT * FROM menu_main WHERE  url_agensi = '$url_agensi' AND menu = '".$result_menu['menu']."' AND sub != ''  ";
                  $query1_submenu  = mysqli_query($conn_cpanel,$sql_submenu);
                  if ($query1_submenu -> num_rows > 0) { while($result_submenu  = mysqli_fetch_array($query1_submenu,MYSQLI_ASSOC)){
                  ?>
                   <a href="page.php?menu=<?php echo $result_submenu['menu'];?>&sub=<?php echo $result_submenu['sub'];?>&page=<?php echo $result_submenu['page'];?>"><?php echo $result_submenu['sub']; ?></a>
                  
                   <?php }} ?>
                   
                  </ul>  
                        
            </li>
            <?php }  if(!empty ($result_menu['pge'])) {?>
                            <li><a href="page.php?menu=<?php echo $result_menu['menu'];?>&sub=<?php echo $result_menu['sub'];?>&page=<?php echo $result_menu['pge'];?>"><?php echo $result_menu['menu'];?></a></li>
            <?php } }// END WHILE?>
            <li><a href="contact.php">Maklum Balas</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->