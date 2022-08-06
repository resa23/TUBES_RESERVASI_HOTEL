<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Payment</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('payment'); ?>">List Data</a></li>
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
                        <label for="payment_id" class="col-sm-2 col-form-label">No Payment</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="payment_id" name="payment_id" value=" <?= $data_payment['payment_id']; ?>" readonly>
                            <small class="text-danger">
                                <?php echo form_error('payment_id') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="payment_name" class="col-sm-2 col-formlabel">Payment Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="payment_name" name="payment_name" value=" <?= $data_payment['payment_name']; ?>">
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