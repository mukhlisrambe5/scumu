<?=$this->extend('layout/main') ?>

<?=$this->section('content') ?>
    <div class="slideshow">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner carousel-inner-alt" >
                <div class="carousel-item active">
                <img src="<?=base_url()?>/public/image/slideshow-1.jpg" class="d-block w-100" alt="ss1">
                </div>
                <div class="carousel-item">
                <img src="<?=base_url()?>/public/image/slideshow-2.jpg" class="d-block w-100" alt="ss2">
                </div>
                <div class="carousel-item">
                <img src="<?=base_url()?>/public/image/slideshow-3.jpg" class="d-block w-100" alt="ss3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
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
                    class="card-img-top gambar_kategori" alt="..." class="gambar_kategori">
                    <div class="card-body card-body-altert" style="margin-top: 1rem; ">
                        <h5 class="card-text"><?=$value['nama']?></h5>
                        <h6 class="card-text"><?=$value['info']?></h6>
                        <br>
                        <p>Pemilik: <?=$value['owner']?> </p>
                        <p>No.Hp: <?=$value['contact']?></p>
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
   
   
  


