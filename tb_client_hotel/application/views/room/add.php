<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Room</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('room'); ?>">List Data</a></li>
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
                        <label for="id" class="col-sm-2 col-form-label">Room Id</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan id" class="form-control" id="room_id" name="room_id" value="<?= set_value('room_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('room_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nomor" class="col-sm-2 col-form-label">Room Number</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="room_number" name="room_number">
                                <option value="#" selected disabled>--Pilih No kamar--</option>
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
                        <label for="tipe" class="col-sm-2 col-form-label">Floor</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="floor" name="floor">
                                <option value="#" selected disabled>--Pilih Lantai--</option>
                                <option value="lantai 1" <?php if (set_value('floor') == "lantai 1") : echo "selected"; endif; ?>>lantai 1</option>
                                <option value="lantai 2" <?php if (set_value('floor') == "lantai 2") : echo "selected"; endif; ?>>lantai 2</option>
                                <option value="lantai 4" <?php if (set_value('floor') == "lantai 4") : echo "selected"; endif; ?>>lantai 4</option>
                                <option value="lantai 5" <?php if (set_value('floor') == "lantai 5") : echo "selected"; endif; ?>>lantai 5</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('floor') ?>
                            </small>
                        </div>
                    </div>


<div class="form-group row">
                        <label for="room_type" class="col-sm-2 col-form-label">Room Type</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="room_type_name" name="room_type_name">
                                <option value="#" selected disabled>--Pilih Jenis Kamar--</option>
                                <option value="Standard Room" <?php if (set_value('room_type_name') == "Standard Room") : echo "selected"; endif; ?>>Standard Room</option>
                                <option value="Superior Room" <?php if (set_value('room_type_name') == "Superior Room") : echo "selected"; endif; ?>>Superior Room</option>
                                <option value="	Suite Room" <?php if (set_value('room_type_name') == "	Suite Room") : echo "selected"; endif; ?>>	Suite Room</option>
                                <option value="Suite Executive - City Wing" <?php if (set_value('room_type_name') == "Suite Executive - City Wing") : echo "selected"; endif; ?>>Suite Executive - City Wing</option>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('room_type_name') ?>
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