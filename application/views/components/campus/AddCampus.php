<!-- add campus -->
<div class="row my-3 d-flex justify-content-center">
  <div class="col-8">
    <div class="card">
      <div class="card-header ">
        <div class="row">
          <div class="col-7">
            <h4>Add Campus</h4>
          </div>
          <div class="col-5 d-flex justify-content-end">
            <a class="btn btn-danger" href="<?= base_url() ?>">Cancel </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="<?php echo base_url("addcampus/submit") ?>" method="POST">
          <div class="mb-3">
            <label for="" class="form-label">Campus Name</label>
            <input type="text" name="campus_name" class="form-control " value="<?php echo set_value("campus_name") ?>">
            <small class="text-danger"><?php echo form_error('campus_name'); ?></small>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Campus Director</label>
            <input type="text" name="campus_director" class="form-control " value="<?php echo set_value("campus_director") ?>">
            <small class="text-danger"><?php echo form_error('campus_director'); ?></small>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CEIT Dean</label>
                <input type="text" name="ceit_dean" class="form-control " value="<?php echo set_value("ceit_dean") ?>">
                <small class="text-danger"><?php echo form_error('ceit_dean'); ?></small>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CAS Dean</label>
                <input type="text" name="cas_dean" class="form-control " value="<?php echo set_value("cas_dean") ?>">
                <small class="text-danger"><?php echo form_error('cas_dean'); ?></small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CTE Dean</label>
                <input type="text" name="cte_dean" class="form-control " value="<?php echo set_value("cte_dean") ?>">
                <small class="text-danger"><?php echo form_error('cte_dean'); ?></small>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">COT Dean</label>
                <input type="text" name="cot_dean" class="form-control   " value="<?php echo set_value("campus_name") ?>">
                <small class="text-danger"><?php echo form_error('cot_dean'); ?></small>
              </div>
            </div>
          </div>
          <div class="col-12 d-grid">
            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcampus">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- add campus -->