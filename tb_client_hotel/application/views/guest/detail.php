<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>guest</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('guest'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Tamu
                </div>
                <?php
                foreach ($data_tamu as $row) :
                ?>
                    <div class="card-body">
                        <h5 class="card-title"><b>No Guest :</b><br><?= $row['guest_id'] ?></h5>
                        <p class="card-text"><b>Name :</b><br><?= $row['guest_name'] ?></p>
                        <p class="card-text"><b>Nik :</b><br><?= $row['nik'] ?></p>
                        <p class="card-text"><b>Phone :</b><br><?= $row['guest_phone'] ?></p>
                        <p class="card-text"><b>address :</b><br><?= $row['guest_address'] ?></p>
                        <p class="card-text"><b>No Room  :</b><br><?= $row['room_number'] ?></p>
                        <p></p>
                        <a href="<?= base_url(); ?>guest" class="btn btn-primary">Kembali</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>