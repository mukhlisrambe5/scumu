
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SCU-MU</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/public/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/public/dist/css/mycss.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- <script src="<?=base_url()?>/public/dist/js/myjs.js"></script> -->
  
    
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
   <div class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse" id="navbar-menu" style="">
                    <ul class="nav navbar-nav">
                        <a href="" class="navbar-brand">
                            <img src="<?=base_url()?>/public/image/logo.png" alt="" class="logo" width="150px">
                        </a>
                    </ul>
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="<?=base_url()?>">Home</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li> -->
                        <!-- <div class="dropdown">
                            <button class="nav-link btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kategori
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Makanan</a>
                                <a class="dropdown-item" href="#">Minuman</a>
                                <a class="dropdown-item" href="#">Kerajinan Tangan</a>
                                <a class="dropdown-item" href="#">Lainnya</a>

                            </div>
                        </div> -->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    
                </div>
                <!-- End Atribute Navigation -->
        </div>
    </nav>  
   </div>  
   
   <?=$this->renderSection('content');?>
  
   <div class="footer bg-light" >
        <div class="container" style="padding: 1em;">
            <div class="row" >
                <div class="col">Copyright &#169; KPPBC TMP C Sabang 2023</div>
                <div class="col" style="position: relative; float:right;display:flex;align-items: right; justify-content: right">Kunjungi Kami di:  
                    <a href=""><img src="<?=base_url()?>/public/image/logo_web.png" alt="WEB" width="30px" style="margin-left:1em" data-toggle="tooltip" data-placement="top" title="Website"></a>
                    <a href=""><img src="<?=base_url()?>/public/image/logo_fb.png" alt="FB" width="30px" style="margin-left:1em" data-toggle="tooltip" data-placement="top" title="Facebook"></a>
                    <a href=""><img src="<?=base_url()?>/public/image/logo_inst.png" alt="INST" width="30px" style="margin-left:1em" data-toggle="tooltip" data-placement="top" title="Instagram"></a>
                    <a href=""><img src="<?=base_url()?>/public/image/logo_yt.png" alt="YT" width="30px" style="margin-left:1em" data-toggle="tooltip" data-placement="top" title="Youtube"></a>

                </div>
            </div>
        </div>
        
   </div>
   <button
    type="button"
    class="btn btn-danger btn-floating btn-lg"
    id="btn-back-to-top"
    >
    <i class="fas fa-arrow-up"></i>
</button>
</div>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url()?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/public/dist/js/adminlte.min.js"></script>

<script src="<?=base_url()?>/public/dist/js/myjs.js">  </script>
</body>
</html>
