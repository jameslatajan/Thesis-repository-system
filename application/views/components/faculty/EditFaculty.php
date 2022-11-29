<!-- add ceit -->
<div class="row my-3 d-flex justify-content-center">
  <div class="col-8">
    <div class="card">

      <div class="card-header">
        <div class="row">
          <div class="col-6">
            <h5 class="">Edit Faculty Member</h5>
          </div>
          <div class="col-6 d-flex justify-content-end">
            <a class="btn btn-danger" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Cancel </a>
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
                <label for="" class="form-label">Sex</label>
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupSelect01">Options</label>
                  <select class="form-select" id="inputGroupSelect01" name="sex">
                    <?php if ($faculty->sex == "Male") : ?>
                      <option value="<?php echo $faculty->sex ?>" selected><?php echo $faculty->sex ?></option>
                      <option value="Female">Female</option>
                    <?php else : ?>
                      <option value="<?php echo $faculty->sex ?>" selected><?php echo $faculty->sex ?></option>
                      <option value="Male">Male</option>
                    <?php endif ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">Birth Date</label>
                <input type="date" name="birth_date" class="form-control " id="" value="<?php echo $faculty->birth_date ?>">
                <small class="text-danger"><?php echo form_error('birth_date'); ?></small>
              </div>
            </div>

          </div>
          <div class="mb-3">
            <label for="" class="form-label">Address</label>
            <input type="text" name="address" class="form-control " id="" value="<?php echo $faculty->address ?>">
            <small class="text-danger"><?php echo form_error('address'); ?></small>
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
          <button type="submit" class="btn btn-primary">Update</button>

        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- add ceit -->