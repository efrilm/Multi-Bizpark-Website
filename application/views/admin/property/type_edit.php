<?= form_open('admin/property/processEditType/' . $id) ?>
<div class="row">
    <div class="col">
        <div class="card m-t-md">
            <div class="card-body">
                <input type="hidden" name="idProperty" value="<?= $type->property_id ?>" id="">
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Type Name') ?></label>
                        <input type="text" class="form-control m-b-md" name="type_name" value="<?= $type->type_name ?>" placeholder="<?= plang('Type Name') ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Type Price') ?></label>
                        <input type="number" class="form-control m-b-md" name="type_price" value="<?= $type->type_price ?>" placeholder="<?= plang('Type Price') ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Building Area') ?></label>
                        <input type="number" class="form-control m-b-md" name="building_area" value="<?= $type->building_area ?>" placeholder="<?= plang('Building Area') ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Surface Area') ?></label>
                        <input type="number" class="form-control m-b-md" name="surface_area" value="<?= $type->surface_area ?>" placeholder="<?= plang('Surface Area') ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label"><?= plang('Office') ?></label>
                        <select name="office" class="form-control">
                            <option value="1"><?= plang('Yes') ?></option>
                            <option value="2"><?= plang('No') ?></option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label"><?= plang('Floor') ?></label>
                        <input type="number" class="form-control m-b-md" name="floor" value="<?= $type->floor ?>" placeholder="<?= plang('Floor') ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="float-end">
            <button type="submit" class="btn btn-primary"><?= plang('Edit') ?></button>
        </div>
    </div>
</div>
<?= form_close() ?>