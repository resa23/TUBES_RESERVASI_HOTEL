<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Room</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('room'); ?>">List Data</a></li>
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
                        <label for="room_id" class="col-sm-2 col-form-label">Room id</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="room_id" name="room_id" value=" <?= $data_kamar['room_id']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('room_id') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="room_number" class="col-sm-2 col-formlabel">Room number</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="room_number" name="room_number" value=" <?= $data_kamar['room_number']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('room_number') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="room_type" class="col-sm-2 col-formlabel">Room type </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="room_type" name="room_type" value=" <?= $data_kamar['room_type']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('room_type') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="floor" class="col-sm-2 col-formlabel">Floor</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" id="floor" name="floor" value="<?= $data_kamar['floor']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('floor') ?>
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