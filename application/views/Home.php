<!-- campuses -->
<div class="card">
  <div class="card-body d-flex">
    <div class="col-9 d-flex">
      <h4 class="title ">Campuses</h4>
      <a class="btn btn-success ms-2" href="<?= base_url('addcampus') ?>">
        Add Campus
      </a>
    </div>
    <div class="col-3">
      <form class="d-flex justify-content-end" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
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
              <a href="<?php echo base_url('campuses/edit/' . $row->campus_id) ?>" class="btn btn-primary mx-1">Edit</a>
              <a href="<?php echo base_url('campuses/archive/' . $row->campus_id) ?>" class="btn btn-danger">Archive</a>
            </div>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col ">Department Name</th>
                <th scope="col ">Dean</th>
                <th scope="col ">Option</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>CEIT</td>
                <td>
                  <?php echo $row->ceit_dean ?>
                </td>
                <td class="td-department">
                  <a href="<?php echo base_url("faculty/" . $row->campus_name . "/ceit") ?>" class="btn btn-info">View</a>
                </td>
              </tr>
              <tr>
                <td>CAS</td>
                <td>
                  <?php echo $row->cas_dean ?>
                </td>
                <td class="td-department">
                  <a href="<?php echo base_url("faculty/" . $row->campus_name . "/cas") ?>" class="btn btn-info">View</a>
                </td>
              </tr>
              <tr>
                <td>CTE</td>
                <td >
                  <?php echo $row->cte_dean ?>
                </td>
                <td class="td-department">
                  <a href="<?php echo base_url("faculty/" . $row->campus_name . "/cte") ?>" class="btn btn-info">View</a>
                </td>
              </tr>
              <tr>
                <td>COT</td>
                <td>
                  <?php echo $row->cot_dean ?>
                </td>
                <td class="td-department">
                  <a href="<?php echo base_url("faculty/" . $row->campus_name . "/cot") ?>" class="btn btn-info">View</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  <?php endforeach; ?>
</div>



<!-- campuses -->