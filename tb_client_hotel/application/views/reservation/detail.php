<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Reservation</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('reservation'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Reservasi
                </div>
                <?php
                foreach ($data_reservasi as $row) :
                ?>
                <div class="card-body">
                    <h5 class="card-title"><b>No Reservation :</b><br><?= $row['reservation_id'] ?></h5>
                    <p class="card-text"><b>Check In :</b><br><?= $row['check_in'] ?></p>
                    <p class="card-text"><b>Guest Name :</b><br><?= $row['guest_name'] ?></p>
                    <p class="card-text"><b>No Room :</b><br><?= $row['room_number'] ?></p>
                    <p class="card-text"><b>Room Type Name:</b><br><?= $row['room_type_name'] ?></p>
                    <p class="card-text"><b>Check Out :</b><br><?= $row['check_out'] ?></p>
                    <p class="card-text"><b>Total Charge :</b><br><?= $row['total_charge'] ?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>reservation" class="btn btn-primary">Kembali</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>