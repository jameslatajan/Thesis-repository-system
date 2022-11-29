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


<div class="card">
    <div class="card-body d-flex">
        <div class="col-7 d-flex">
            <h4>Search by Faculty</h4>
        </div>
        <div class="col-12 d-flex justify-content-end">
            <button class="btn btn-success me-2">
                <a href="<?php echo base_url() ?>" class="btn-add">Add Faculty</a>
            </button>
        </div>
    </div>
</div>

<div class="row my-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table_id">
                    <thead>
                        <tr id="facultytable ">
                            <th scope="col">Program</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($faculty as $row) : ?>
                            <tr>
                                <td><?php echo $row->faculty_name ?></td>
                                <td><?php echo $row->name ?></td>
                                <td><?php echo $row->position ?></td>
                                <td>
                                    <a href="<?php echo base_url('showfaculty/' . $row->faculty_id) ?>" class="btn btn-info">Show</a>
                                    <!-- <a href="<?php echo base_url('editfaculty/' . $row->faculty_id) ?>" class="btn btn-primary">Edit</a> -->
                                    <a href="<?php echo base_url('archivefaculty/' . $row->faculty_id) ?>" class="btn btn-danger">Archive</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>