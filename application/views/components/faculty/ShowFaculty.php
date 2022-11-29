<div class="row mt-2">
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

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url("faculty/".$faculty->campus_name.'/'.$faculty->department)?>">Faculty</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $faculty->name?></li>
  </ol>
</nav>

<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h5><?php echo $faculty->name ?></h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a href="<?php echo base_url('editfaculty/' . $faculty->faculty_id) ?>" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <table class="table table-faculty">
                            <tbody>
                                <tr>
                                    <td>Faculty Name:</td>
                                    <td><?php echo $faculty->faculty_name ?></td>
                                </tr>
                                <tr>
                                    <td>Sex:</td>
                                    <td><?php echo $faculty->sex ?></td>
                                </tr>
                                <tr>
                                    <td>Rank:</td>
                                    <td><?php echo $faculty->position ?></td>
                                </tr>
                                <tr>
                                    <td>Birth Date:</td>
                                    <td><?php echo $faculty->birth_date ?></td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td><?php echo $faculty->address ?></td>
                                </tr>
                                <tr>
                                    <td>Contact Number:</td>
                                    <td><?php echo $faculty->contact_no ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-4">

                    </div>
                    <div class="col-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>