<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Reservation</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('reservation'); ?>">List Data</a></li>
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
                        <label for="reservation_id" class="col-sm-2 col-form-label">RESERVATION ID</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan Reservation ID" class="form-control" id="reservation_id" name="reservation_id" value="<?= set_value('reservation_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('reservation_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="check_in"  class="col-sm-2 col-form-label">CHECK IN</label>
                        <div class="col-sm-10">
                            <input type="date" placeholder= "Masukkan tanggal check in" class="form-control" id="check_in" name="check_in" value=" <?= set_value('check_in'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('check_in') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="guest_id" class="col-sm-2 col-form-label">Guest ID</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan Guest ID" class="form-control" id="guest_id" name="guest_id" value="<?= set_value('guest_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('guest_id') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="room_number" class="col-sm-2 col-form-label">Room Number</label>
                        <div class="col-sm-5">
                        <select class="form-control" id="room_number" name="room_number">
                                <option value="#" selected disabled>--Pilih No Kamar--</option>
                                <option value="101" <?php if (set_value('room_number') == "101") : echo "selected"; endif; ?>>101</option>
                                <option value="201" <?php if (set_value('room_number') == "201") : echo "selected"; endif; ?>>201</option>
                                <option value="401" <?php if (set_value('room_number') == "401") : echo "selected"; endif; ?>>401</option>
                                <option value="410" <?php if (set_value('room_number') == "410") : echo "selected"; endif; ?>>410</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('room_number') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="room_type_id" class="col-sm-2 col-form-label">Type Room</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="room_type_name" name="room_type_name">
                                <option value="#" selected disabled>--Pilih tipe kamar--</option>
                                <option value="Standard Room" <?php if (set_value('room_type_name') == "Standard Room") : echo "selected"; endif; ?>>Standard Room</option>
                                <option value="Superior Room" <?php if (set_value('room_type_name') == "Superior Room") : echo "selected"; endif; ?>>Superior Room</option>
                                <option value="Suite Room" <?php if (set_value('room_type_name') == "Suite Room") : echo "selected"; endif; ?>>Suite Room</option>
                                <option value="Suite Executive - City Wing " <?php if (set_value('room_type_name') == "Suite Executive - City Wing ") : echo "selected"; endif; ?>>Suite Executive - City Wing </option>
    
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('room_type_name') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="check_out" class="col-sm-2 col-form-label">CHECK OUT</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="check_out" name="check_out" value=" <?= set_value('check_out'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('check_out') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="total_charge" class="col-sm-2 col-form-label">TOTAL </label>
                        <div class="col-sm-10">
                            <input type="text" placeholder= "Masukkan Total Harga" class="form-control" id="total_charge" name="total_charge" value=" <?= set_value('total_charge'); ?>">

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
            </div>
        </div>
    </div>
</div>