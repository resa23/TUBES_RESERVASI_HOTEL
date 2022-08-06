<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Bill</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('bill'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Bill
                </div>
                <?php
                foreach ($data_bill as $row) :
                ?>
                <div class="card-body">
                    <!-- <h5 class="card-title"><b>Bill_id :</b><br><?= $row['bill_id'] ?></h5> -->
                    <p class="card-text"><b>Room Type Name :</b><br><?= $row['room_type_name'] ?></p>
                    <p class="card-text"><b>Guest Name:</b><br><?= $row['guest_name'] ?></p>
                    <p class="card-text"><b>Date:</b><br><?= $row['date'] ?></p>
                    <p class="card-text"><b>Receptionist Name:</b><br><?= $row['name'] ?></p>
                    <p class="card-text"><b>Total :</b><br><?= $row['total_charge'] ?></p>
                    <p class="card-text"><b>Payment Name :</b><br><?= $row['payment_name'] ?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>bill" class="btn btn-primary">Kembali</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>