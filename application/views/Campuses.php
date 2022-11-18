<!-- campuses -->
<div class="row d-flex justify-content-center">
  <div class="col-8 ">
    <h1 class="title text-uppercase">Campuses</h1>
    <a class="btn btn-success" href="<?= base_url('addcampus') ?>">
      Add Campus
    </a>
  </div>
</div>

<!-- content -->
<?php foreach ($campus as $row): ?>
<div class="row my-3 d-flex justify-content-center">
  <div class="col-8">
    <div class="card">
      <h5 class="card-header text-uppercase">
        <?php echo $row->campus_name ?>
      </h5>
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <h6 class="text-uppercase">Campus Director: <u>
                <?php echo $row->campus_director ?>
              </u>
            </h6>
          </div>
          <div class="col-6 d-flex justify-content-end">
            <a href="<?php echo base_url('campuses/edit/' . $row->campus_id) ?>" class="btn btn-primary mx-1">Edit</a>
            <a href="<?php echo base_url('campuses/archive/' . $row->campus_id) ?>" class="btn btn-danger">Archive</a>
          </div>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col text-uppercase">Department Name</th>
              <th scope="col text-uppercase">Dean</th>
              <th scope="col text-uppercase">Option</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>CEIT</td>
              <td>
                <?php echo $row->ceit_dean ?>
              </td>
              <td>
                <a href="<?php echo base_url('/ceit/' . $row->campus_id) ?>" class="btn btn-info">View</a>
              </td>
            </tr>
            <tr>
              <td>CAS</td>
              <td>
                <?php echo $row->cas_dean ?>
              </td>
              <td>
                <a href="<?php echo base_url('/cas/' . $row->campus_id) ?>" class="btn btn-info">View</a>
              </td>
            </tr>
            <tr>
              <td>CTE</td>
              <td>
                <?php echo $row->cte_dean ?>
              </td>
              <td>
                <a href="<?php echo base_url('/cte/' . $row->campus_id) ?>" class="btn btn-info">View</a>
              </td>
            </tr>
            <tr>
              <td>COT</td>
              <td>
                <?php echo $row->cot_dean ?>
              </td>
              <td>
                <a href="<?php echo base_url('/cot/' . $row->campus_id) ?>" class="btn btn-info">View</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- content -->
<!-- modal -->
<!-- form -->
<!-- <form action="<?= base_url('addcampus') ?>" method="post">
  <div class="modal fade" id="addcampus" tabindex="-1" aria-labelledby="addcampus" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3">  
            <label for="" class="form-label">Campus Name</label>
            <input type="text" name="campus_name" class="form-control text-uppercase" id="">
            <div>
              <?php echo @$error; ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Campus Director</label>
            <input type="text" name="campus_director" class="form-control text-uppercase" id="">
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CEIT Dean</label>
                <input type="text" name="ceit_dean" class="form-control text-uppercase" id="">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CAS Dean</label>
                <input type="text" name="cas_dean" class="form-control text-uppercase" id="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CTE Dean</label>
                <input type="text" name="cte_dean	" class="form-control text-uppercase" id="">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">COT Dean</label>
                <input type="text" name="cot_dean" class="form-control text-uppercase text-uppercase " id="">
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form> -->
<!-- form -->
<!-- modal -->
<!-- campuses -->