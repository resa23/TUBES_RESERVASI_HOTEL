<div class="container pt-5">
    <h3><?= $title ?></h3>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Reservation</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary mb-2" href="<?= base_url('reservation/add') ?>">Tambah Data</a>
            <div mb-2>
                <!-- Menampilkan flash data (pesan saat data error)-->
                <?php if ($this->session->flashdata('message')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Error! <?= $this->session->flashdata('message'); ?>
                        <button type="button" class="close" data-dismiss="alert" arialabel="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered tablehover text-sm" id="tableReservasi">
                            <thead>
                                <tr class="table-primary">
                                    <th class="text-center">Check In</th>
                                    <th class="text-center">Guest Name</th>
                                    <th class="text-center">Room Number</th>
                                    <th class="text-center">Room Type Name</th>
                                    <th class="text-center">Check Out</th>
                                    <th class="text-center">Total Charge</th>
                                    <th class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data_reservasi as $row) :
                                ?>
                                    <tr>
                                        <td align="center"><?= $row['check_in'] ?></td>
                                        <td align="center"><?= $row['guest_name'] ?></td>
                                        <td align="center"><?= $row['room_number'] ?></td>
                                        <td align="center"><?= $row['room_type_name'] ?></td>
                                        <td align="center"><?= $row['check_out'] ?></td>
                                        <td align="center"><?= $row['total_charge'] ?></td>
                                        <!-- <td align="center"> -->
                                        <td>
                                            <a href="<?= base_url('reservation/detail/' . $row['reservation_id']) ?>" class="btn btn-primary btn-sm"><i class="fa fa-info"></i></a>
                                            <a href="<?= base_url('reservation/edit/' . $row['reservation_id']) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="<?= base_url('reservation/delete/' . $row['reservation_id']) ?>" class="btn btn-danger btn-sm item-delete tombol-hapus"><i class="fa fa-trash"></i></a>
                                        </td>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //menampilkan data ketabel dengan plugin datatables
    $('#tableReservasi').DataTable();
</script>