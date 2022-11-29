<!-- edit campus -->
<div class="row my-3 d-flex justify-content-center">
  <div class="col-8">
    <div class="card">

    
      <div class="card-header">
        <div class="row">
          <div class="col-6">
            <h5 class="">EditCampus</h5>
          </div>
          <div class="col-6 d-flex justify-content-end">
            <a class="btn btn-danger" href="<?= base_url() ?>">Cancel </a>
          </div>
        </div>
      </div>

      <div class="card-body">
        <form action="<?php echo base_url("campuses/update/" . $campus->campus_id) ?>" method="POST">
          <div class="mb-3">
            <label for="" class="form-label">Campus Name</label>
            <input type="text" name="campus_name" class="form-control " id="" value="<?= $campus->campus_name ?>">
            <small class="text-danger"><?php echo form_error('campus_name'); ?></small>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Campus Director</label>
            <input type="text" name="campus_director" class="form-control " id="" value="<?= $campus->campus_director ?>">
            <small class="text-danger"><?php echo form_error('campus_director'); ?></small>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CEIT Dean</label>
                <input type="text" name="ceit_dean" class="form-control " id="" value="<?= $campus->ceit_dean ?>">
                <small class="text-danger"><?php echo form_error('ceit_dean'); ?></small>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CAS Dean</label>
                <input type="text" name="cas_dean" class="form-control " id="" value="<?= $campus->cas_dean ?>">
                <small class="text-danger"><?php echo form_error('cas_dean'); ?></small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CTE Dean</label>
                <input type="text" name="cte_dean" class="form-control " id="" value="<?= $campus->cte_dean ?>">
                <small class="text-danger"><?php echo form_error('cte_dean'); ?></small>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">COT Dean</label>
                <input type="text" name="cot_dean" class="form-control  " id="" value="<?= $campus->cot_dean ?>">
                <small class="text-danger"><?php echo form_error('cot_dean'); ?></small>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcampus">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- edit campus -->