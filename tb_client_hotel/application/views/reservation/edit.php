<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Reservation</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('reservation'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <?php
                foreach ($data_reservasi as $reservasi) :
                ?>
                    <?php
                    //create form
                    $attributes = array('method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes); ?>
                    <div class="form-group row">
                        <label for="reservation_id" class="col-sm-2 col-form-label">No Reservation </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="reservation_id" name="reservation_id" value=" <?= $reservasi['reservation_id']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('reservation_id') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="check_in" class="col-sm-2 col-formlabel">Check In</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="check_in" name="" value=" <?= $reservasi['check_in']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('check_in') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="guest_name" class="col-sm-2 col-formlabel">Guest name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="guest_name" name="guest_name" value=" <?= $reservasi['guest_name']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('v') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="room_number" class="col-sm-2 col-formlabel">No Room</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="room_number" name="room_number" value="<?= $reservasi['room_number']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('room_number') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="room_type_name" class="col-sm-2 col-formlabel">Room type name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="room_type_name" name="room_type_name" value="<?= $reservasi['room_type_name']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('room_type_name') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="check_out" class="col-sm-2 col-formlabel">Check out</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="check_out" name="check_out" value="<?= $reservasi['check_out']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('check_out') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total_charge" class="col-sm-2 col-formlabel">Total charge</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="total_charge" name="total_charge" value="<?= $reservasi['total_charge']; ?>">
                            <small class="text-danger">
                                <?php echo form_error('total_charge') ?>
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