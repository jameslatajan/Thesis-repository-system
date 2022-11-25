<div class="row">
  <div class="col-12">
  <?php if($this->session->flashdata('alert-success')):?>
    <div class="alert alert-success" role="alert">
      <?= $this->session->flashdata('alert-success');?>
    </div>
    <?php elseif($this->session->flashdata('alert-danger')):?>
      <div class="alert alert-danger" role="alert">
      <?= $this->session->flashdata('alert-danger');?>
    </div>
    <?php elseif($this->session->flashdata('alert-primary')):?>
      <div class="alert alert-primary" role="alert">
      <?= $this->session->flashdata('alert-primary');?>
    </div>
    <?php endif?>
  </div>
</div>

<!-- campuses -->
<div class="card">
  <div class="card-body d-flex">
    <div class="col-7 d-flex">
      <h4 class="title">Archive Campuses</h4>
    </div>
    <!-- <div class="col-5 d-flex justify-content-end">
      <button class="btn btn-success me-2 " type="submit">
        <a href="<?= base_url('addcampus') ?>" class="btn-add">
          Add Campus
        </a>
      </button>
    </div> -->
  </div>
</div>

<!-- content -->
<div class="row my-3">
  <?php foreach ($campus as $row) : ?>
    <div class="col-6 mb-4">
      <div class="card">
        <h5 class="card-header ">
          <?php echo $row->campus_name ?>
        </h5>
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <h6 class="">Campus Director: <u>
                  <?php echo $row->campus_director ?>
                </u>
              </h6>
            </div>
            <div class="col-6 d-flex justify-content-end">
              <a href="<?php echo base_url() ?>" class="btn btn-success mx-1">Restore</a>
              <a href="<?php echo base_url() ?>" class="btn btn-danger">Delete</a>
            </div>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col ">Department Name</th>
                <th scope="col ">Dean</th>
                <!-- <th scope="col ">Option</th> -->
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CEIT</td>
                <td>
                  <?php echo $row->ceit_dean ?>
                </td>
                <!-- <td class="td-department">
                  <a href="<?php echo base_url("faculty/" . $row->campus_name . "/ceit") ?>" class="btn btn-info">View</a>
                </td> -->
              </tr>
              <tr>
                <td>CAS</td>
                <td>
                  <?php echo $row->cas_dean ?>
                </td>
                <!-- <td class="td-department">
                  <a href="<?php echo base_url("faculty/" . $row->campus_name . "/cas") ?>" class="btn btn-info">View</a>
                </td> -->
              </tr>
              <tr>
                <td>CTE</td>
                <td>
                  <?php echo $row->cte_dean ?>
                </td>
                <!-- <td class="td-department">
                  <a href="<?php echo base_url("faculty/" . $row->campus_name . "/cte") ?>" class="btn btn-info">View</a>
                </td> -->
              </tr>
              <tr>
                <td>COT</td>
                <td>
                  <?php echo $row->cot_dean ?>
                </td>
                <!-- <td class="td-department">
                  <a href="<?php echo base_url("faculty/" . $row->campus_name . "/cot") ?>" class="btn btn-info">View</a>
                </td> -->
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>



<!-- campuses -->