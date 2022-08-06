<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Guest</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('guest'); ?>">List Data</a></li>
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
                        <label for="guest_id" class="col-sm-2 col-form-label"> No guest </label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "No guest" class="form-control" id="guest_id" name="guest_id" value="<?= set_value('guest_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('guest_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="guest_name" class="col-sm-2 col-form-label"> Name </label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukan nama Anda" class="form-control" id="guest_name" name="guest_name" value="<?= set_value('guest_name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('guest_name') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label"> Nik </label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukan Nik Anda" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('nik') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="guest_phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder= "Masukkan no phone Anda" class="form-control" id="guest_phone" name="guest_phone" value="<?= set_value('guest_phone'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('guest_phone') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="guest_address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-8">

                            <input type="text" placeholder= "Masukkan Alamat Anda" class="form-control" id="guest_address" name="guest_address" value="<?= set_value('guest_address'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('guest_address') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="room_number" class="col-sm-2 col-form-label">No Room</label>
                        <div class="col-sm-8">
                        <select class="form-control" id="room_number" name="room_number">
                                <option value="#" selected disabled>--Pilih no room--</option>
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