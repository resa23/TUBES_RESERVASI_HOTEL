<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Room Type</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('room_type'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes); ?>
                    <div class="form-group row">
                        <label for="room_type_id" class="col-sm-2 col-form-label">No </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="room_type_id" name="room_type_id" value=" <?= $data_tipe_kamar['room_type_id']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('room_type_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="room_type_name" class="col-sm-2 col-formlabel">Room Type Name </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="room_type_name" name="room_type_name" value=" <?= $data_tipe_kamar['room_type_name']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('room_type_name') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-formlabel">Price </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" name="price" value=" <?= $data_tipe_kamar['price']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('price') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="facility" class="col-sm-2 col-formlabel">Facility </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="facility" name="facility" value=" <?= $data_tipe_kamar['facility']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('facility') ?>
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