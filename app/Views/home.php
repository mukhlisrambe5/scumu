<?=$this->extend('layout/main') ?>

<?=$this->section('content') ?>
    <div class="slideshow" >
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" style="max-height:80vh">
                <div class="carousel-item active">
                <img class="d-block w-100" src="<?=base_url()?>/public/image/ss-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?=base_url()?>/public/image/ss-2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="<?=base_url()?>/public/image/ss-3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    
    </div>
    
   <div class="container container-alt " >
        <div class="row " >
                <?php    
                $no = 1;
                foreach ($umkm as $key=>$value) { ?> 
                    <div class="col" >
                    <div class="card" style="width: 18rem; overflow:hidden; margin:auto; margin-bottom:1em ">                    
                    <img src="<?=base_url('/public/image/produk/' .$value['gambar'])?>"  
                    class="card-img-top gambar_kategori" alt="..." class="gambar_kategori" height="400px">
                    <div class="card-body card-body-altert" style="margin-top: 1rem; ">
                        <h5 class="card-text" style="text-align:center; text-decoration:underline"><?=$value['nama']?></h5>
                        <h6 class="card-text"><?=$value['info']?></h6>
                        <br>
                        <p>Pemilik : <?=$value['owner']?> </p>
                        <p>No.Hp : <?=$value['contact']?></p>
                        <!-- <a href="#" class="btn btn-primary">Detail</a> -->
                    </div>
                </div>
                </div>
                <?php } ?>
                <!-- </div> -->

                
            <!-- </div> -->
            
        <!-- </div>      -->
    </div>
    <!-- <div class="container container-alt galeri" style="border: 1px black solid">
        <div class="row">
                GALLERY
        </div>     
    </div> -->

    </p>
   </div>
<?=$this->endSection('content')?>
   
   
  


