<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Room Type</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('room_type'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Tipe Kamar
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>No:</b><br><?= $data_tipe_kamar['room_type_id']?></h5>
                    <p class="card-text"><b>Room Type Name :</b><br><?= $data_tipe_kamar['room_type_name']?></p>
                    <p class="card-text"><b>Price :</b><br><?= $data_tipe_kamar['price']?></p>
                    <p class="card-text"><b>Facility:</b><br><?= $data_tipe_kamar['facility']?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>room_type" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>