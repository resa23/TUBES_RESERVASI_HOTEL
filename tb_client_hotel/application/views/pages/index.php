<div class="container pt-5">
    <h3><?= $title ?></h3>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a></a></li>
        </ol>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/gambar/firsthotel.png" alt="First slide">
            </div>
            <style>
                .carousel-inner {
                    width: 1100px;
                    height: 500px;
                }

                img {
                    width: 1000px;
                    height: 600px;
                }
            </style>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/gambar/secondhotel.jpg" alt="Second slide">
            </div>
            <style>
                .carousel-item {
                    width: 1100px;
                    height: 500px;
                }

                img {
                    width: 1000px;
                    height: 600px;
                }
            </style>
            <div class="carousel-tiga">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/gambar/thirdhotel.jpg" alt="Third slide">
            </div>
        </div>
        <style>
            .carousel-tiga {
                width: 1100px;
                height: 500px;
            }

            img {
                width: 1000px;
                height: 600px;
            }
        </style>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card text-center">
                        <div class="card-body bg-light text-dark">
                            <h5 class="card-title">Login</h5>
                            <p class="card-text"> Apabila Sudah Memiliki Akun, Silahkan Login</p>
                            <a href="<?php echo base_url(); ?>auth/login" class="btn btn-primary">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card text-center">
                        <div class="card-body bg-light text-dark">
                            <h5 class="card-title">Register</h5>
                            <p class="card-text">Apabila Belum Memiliki Akun, Silahkan Register</p>
                            <a href="<?php echo base_url(); ?>auth/register" class="btn btn-primary">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>