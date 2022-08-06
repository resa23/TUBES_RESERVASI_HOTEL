<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Receptionist</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('receptionist'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data</li>
        </ol>
    </nav>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Receptionist
                </div>
                <div class="card-body">
                    <h5 class="card-title"><b>No :</b><br><?= $data_receptionist['receptionist_id'] ?></h5>
                    <p class="card-text"><b>Name :</b><br><?= $data_receptionist['name'] ?></p>
                    <p class="card-text"><b>Phone:</b><br><?= $data_receptionist['phone'] ?></p>
                    <p class="card-text"><b>Email:</b><br><?= $data_receptionist['email'] ?></p>
                    <p class="card-text"><b>Address :</b><br><?= $data_receptionist['address'] ?></p>
                    <p></p>
                    <a href="<?= base_url(); ?>receptionist" class="btn btn-primary">Kembali</a>
</div>
            </div>
        </div>
    </div>
</div>