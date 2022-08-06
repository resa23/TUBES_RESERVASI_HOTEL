<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Room Type</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('room_type'); ?>">List Data</a></li>
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
                        <label for="id" class="col-sm-2 col-form-label">No</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan No room" class="form-control" id="room_type_id" name="room_type_id" value="<?= set_value('room_type_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('room_type_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id" class="col-sm-2 col-form-label">Room type name</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan type room" class="form-control" id="room_type_name" name="room_type_name" value="<?= set_value('room_type_name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('room_type_name') ?>
                            </small>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="id" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan harga type room" class="form-control" id="price" name="price" value="<?= set_value('price'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('price') ?>
                            </small>
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="id" class="col-sm-2 col-form-label">Facility</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan fasilitas kamar" class="form-control" id="facility" name="facility" value="<?= set_value('facility'); ?>">
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