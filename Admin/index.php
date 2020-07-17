<?php
require_once "../koneksi.php";
if (isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page="part/beranda.php";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- require meta taqs -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- bootstrap CSS     -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    
    <title>Aplikasi Toko Jihan</title>
</head>
<body>
    <body style="background-color: #f1f1f1;">
     <div class="container shadow"> 
     <!-- ini header -->
      <div class="row"> 
        <div class="col-12 ml-auto bg-primary text-left text-light" style="height: 80px;text-align: right;">
         <?php include_once ('part/header.php'); ?>
          </div>
      <!-- ini navigation -->
           <?php include_once 'part/navigation.php'; ?> 
           <div class="col-12 col-md-8 col-lg-10 bg-light text-dark p-md-3 pt-1" style="min-height:650px"> 
           <?php include_once ($page); ?> 
           </div> 
      <!-- ini banner -->
           <div class="col-12 col-md-4 col-lg-2 bg-danger tezt-light shadow pt-3"> 
           <?php include_once ('part/banner.php');?>
            </div> 
      <!-- ini footer -->
            <div class="col-12 bg-info text-light"><?php include_once ('part/footer.php');?></div> 
            </div> 
      </div>

<!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script src="../assets/js/jquery-3.5.1.js"></script>
      <script src="../assets/js/popper.min.js"></script>
      <script src="../assets/js/bootstrap.min.js"></script> 

      <script src="../assets/js/myScript.js"></script> 
</body>
</html>
