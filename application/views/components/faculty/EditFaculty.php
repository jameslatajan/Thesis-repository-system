<!-- add ceit -->
<div class="row my-3 d-flex justify-content-center">
  <div class="col-8">
    <div class="card">

      <div class="card-header">
        <div class="row">
          <div class="col-6">
            <h5 class="">Edit Documents</h5>
          </div>
          <div class="col-6 d-flex justify-content-end">
          <a class="btn btn-danger" href="<?php echo base_url('showfaculty/' . $faculty->faculty_id) ?>">Cancel </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <form action="<?php echo base_url('updatefaculty/' . $faculty->faculty_id) ?>" method="POST">
          <input type="hidden" name="campus_name" value="<?php echo $faculty->campus_name ?>">
          <input type="hidden" name="department" value="<?php echo $faculty->department ?>">
          <div class="row">
            <div class="col-12">
              <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-control " id="" value="<?php echo $faculty->name ?>">
                <small class="text-danger"><?php echo form_error('name'); ?></small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">Birth Date</label>
                <input type="date" name="birth_date" class="form-control " id="" value="<?php echo $faculty->birth_date ?>">
                <small class="text-danger"><?php echo form_error('birth_date'); ?></small>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">Address</label>
                <input type="text" name="address" class="form-control " id="" value="<?php echo $faculty->address ?>">
                <small class="text-danger"><?php echo form_error('address'); ?></small>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">Position</label>
                <input type="text" name="position" class="form-control " id="" value="<?php echo $faculty->position ?>">
                <small class="text-danger"><?php echo form_error('position'); ?></small>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">Faculty Name</label>
                <input type="text" name="faculty_name" class="form-control " id="" value="<?php echo $faculty->faculty_name ?>">
                <small class="text-danger"><?php echo form_error('faculty_name'); ?></small>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Contact No.</label>
            <input type="text" name="contact_no" class="form-control " id="" value="<?php echo $faculty->contact_no ?>">
            <small class="text-danger"><?php echo form_error('contact_no'); ?></small>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- add ceit -->