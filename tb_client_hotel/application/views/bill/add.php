<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Bill</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('bill'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                    <div class="form-group row">
                        <label for="bill_id" class="col-sm-2 col-form-label"> No Bill</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan ID Bill" class="form-control" id="bill_id" name="bill_id" value="<?= set_value('bill_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('bill_id') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="room_type_name" class="col-sm-2 col-form-label"> Room type name</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan tipe kamar" class="form-control" id="room_type_name" name="room_type_name" value="<?= set_value('room_type_name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('room_type_name') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="guest_name" class="col-sm-2 col-form-label"> Guest name</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan nama tamu" class="form-control" id="guest_name" name="guest_name" value="<?= set_value('guest_name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('guest_name') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date" value=" <?= set_value('date'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('date') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label"> Receptionist name</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan nama resepsionis" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('name') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="payment_name" class="col-sm-2 col-form-label"> Payment </label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan nama pembayaran" class="form-control" id="payment_name" name="payment_name" value="<?= set_value('payment_name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('payment_name') ?>
                            </small>
                        </div>
                    </div>
                  
                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>