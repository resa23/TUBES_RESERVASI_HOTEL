<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Guest</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('guest'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    foreach ($data_tamu as $_tamu) :
                    ?>
                        <?php
                        //create form
                        $attributes = array('method' => "post", "autocomplete" => "off");
                        echo form_open('', $attributes); ?>
                        <div class="form-group row">
                            <label for="guest_id" class="col-sm-2 col-form-label">No Guest</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="guest_id" name="guest_id" value=" <?= $_tamu['guest_id']; ?>" readonly>
                                <small class="text-danger">
                                    <?php echo form_error('guest_id') ?>
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="guest_name" class="col-sm-2 col-formlabel">Guest Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="guest_name" name="guest_name" value=" <?= $_tamu['guest_name']; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('guest_name') ?>
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nik" class="col-sm-2 col-formlabel">Nik</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nik" name="nik" value=" <?= $_tamu['nik']; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('nik') ?>
                                </small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="guest_phone" class="col-sm-2 col-formlabel">Guest Phone</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="guest_phone" name="guest_phone" value="<?= $_tamu['guest_phone']; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('guest_phone') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="guest_address" class="col-sm-2 col-formlabel">Guest Address</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="guest_address" name="guest_address" value="<?= $_tamu['guest_address']; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('guest_address') ?>
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="room_number" class="col-sm-2 col-formlabel">No Room</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="room_number" name="room_number" value="<?= $_tamu['room_number']; ?>">
                                <small class="text-danger">
                                    <?php echo form_error('room_number') ?>
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
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>