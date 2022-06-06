<div class="row">
    <div class="col">
        <div class="float-end">
            <div class="btn btn-primary add-type"><?= plang('Add Again') ?></div>
        </div>
    </div>
</div>
<?= form_open('admin/property/processAddType') ?>
<div class="card m-t-md">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Type Name') ?></label>
                <input type="text" class="form-control m-b-md" name="type_name[]" placeholder="<?= plang('Type Name') ?>">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Type Price') ?></label>
                <input type="number" class="form-control m-b-md" name="type_price[]" placeholder="<?= plang('Type Price') ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Building Area') ?></label>
                <input type="number" class="form-control m-b-md" name="building_area[]" placeholder="<?= plang('Building Area') ?>">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Surface Area') ?></label>
                <input type="number" class="form-control m-b-md" name="surface_area[]" placeholder="<?= plang('Surface Area') ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="form-label"><?= plang('Office') ?></label>
                <select name="office[]" class="form-control">
                    <option value="1"><?= plang('Yes') ?></option>
                    <option value="2"><?= plang('No') ?></option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label"><?= plang('Floor') ?></label>
                <input type="number" class="form-control m-b-md" name="floor[]" placeholder="<?= plang('Floor') ?>">
            </div>
        </div>
    </div>
</div>

<div class="form-type"></div>

<div class="row">
    <div class="col">
        <div class="float-end">
            <button class="btn btn-primary"><?= plang('Save') ?></button>
        </div>
    </div>
</div>
<?= form_close() ?>

<input type="hidden" class="count-type" value="1">