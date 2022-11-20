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
                <a href="<?php echo base_url("faculty/".$row->campus_name."/ceit")?>" class="btn btn-info">View</a>
              </td>
            </tr>
            <tr>
              <td>CAS</td>
              <td>
                <?php echo $row->cas_dean ?>
              </td>
              <td>
                <a href="<?php echo base_url("faculty/".$row->campus_name."/cas") ?>" class="btn btn-info">View</a>
              </td>
            </tr>
            <tr>
              <td>CTE</td>
              <td>
                <?php echo $row->cte_dean ?>
              </td>
              <td>
                <a href="<?php echo base_url("faculty/".$row->campus_name."/cte") ?>" class="btn btn-info">View</a>
              </td>
            </tr>
            <tr>
              <td>COT</td>
              <td>
                <?php echo $row->cot_dean ?>
              </td>
              <td>
                <a href="<?php echo base_url("faculty/".$row->campus_name."/cot") ?>" class="btn btn-info">View</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- campuses -->