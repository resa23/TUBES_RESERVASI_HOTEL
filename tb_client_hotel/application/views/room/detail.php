<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Room</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('room '); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Kamar
                </div>
                <?php
                foreach ($data_kamar as $row) :
                ?>
                <div class="card-body">
                    <h5 class="card-title"><b>Room Id:</b><br><?= $row['room_id']?></h5>
                    <p class="card-text"><b>Room Number :</b><br><?= $row['room_number']?></p>
                    <p class="card-text"><b>Floor :</b><br><?= $row['floor']?></p>
                    <p class="card-text"><b>Room type name:</b><br><?= $row['room_type_name']?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>room" class="btn btn-primary">Kembali</a>

                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>