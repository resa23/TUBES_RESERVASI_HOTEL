<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Payment</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('payment'); ?>">List Data</a></li>
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
                        <label for="id" class="col-sm-2 col-form-label">No Payment</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Masukkan No Payment" class="form-control" id="payment_id" name="payment_id" value="<?= set_value('payment_id'); ?>">
                            <small class="text-danger">
                                <?php echo form_error('payment_id') ?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id" class="col-sm-2 col-form-label">Payment Name</label>
                        <div class="col-sm-5">
                            <input type="text" placeholder= "Name Payment" class="form-control" id="payment_name" name="payment_name" value="<?= set_value('payment_name'); ?>">
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