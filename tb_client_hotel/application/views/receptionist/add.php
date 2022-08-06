<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Receptionist</a></li>
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
                        <label for="receptionist_id" class="col-sm-2 col-form-label"> No  </label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan No receptionist" class="form-control" id="receptionist_id" name="receptionist_id" value="<?= set_value('receptionist_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('receptionist_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label"> Name </label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan Nama" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('name') ?>
                            </small>
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label"> Phone </label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan No telefon" class="form-control" id="phone" phone="phone" value="<?= set_value('phone'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('phone') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label"> Email </label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan Email" class="form-control" id="email" email="email" value="<?= set_value('email'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('email') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label"> Address </label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan Alamat" class="form-control" id="address" address="address" value="<?= set_value('address'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('address') ?>
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