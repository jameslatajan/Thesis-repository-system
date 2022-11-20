<!-- add ceit -->
<div class="row my-3 d-flex justify-content-center">
  <div class="col-8">
    <div class="card">
      <h5 class="card-header text-uppercase"></h5>
      <div class="card-body">
        <form action="<?php echo base_url("/ceit/" . $cid . '/addceit/' . $cid . '/submitceit') ?>" method="POST">
          <input type="hidden" name="campus_id" value="<?php echo $cid ?>">
          <input type="hidden" name="department" value="ceit">
          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control text-uppercase" id="">
                <small class="text-danger"><?php echo form_error('name'); ?></small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">Birth Date</label>
                <input type="date" name="birth_date" class="form-control text-uppercase" id="">
                <small class="text-danger"><?php echo form_error('birth_date'); ?></small>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <input type="text" name="address" class="form-control text-uppercase" id="">
                <small class="text-danger"><?php echo form_error('address'); ?></small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">Position</label>
                <input type="text" name="position" class="form-control text-uppercase" id="">
                <small class="text-danger"><?php echo form_error('position'); ?></small>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">Faculty Name</label>
                <input type="text" name="faculty_name" class="form-control text-uppercase" id="">
                <small class="text-danger"><?php echo form_error('faculty_name'); ?></small>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Contact No.</label>
            <input type="text" name="contact_no" class="form-control text-uppercase" id="">
            <small class="text-danger"><?php echo form_error('contact_no'); ?></small>
          </div>
          <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcampus">Submit</button>
          <a class="btn btn-danger" href="<?= base_url() . "ceit/" . $cid ?>">Cancel </a>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- add ceit -->