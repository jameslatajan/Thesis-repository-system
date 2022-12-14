<div class="row">
    <div class="col-12">
        <?php if ($this->session->flashdata('alert-success')) : ?>
            <div class="alert alert-success" role="alert">
                <?= $this->session->flashdata('alert-success'); ?>
            </div>
        <?php elseif ($this->session->flashdata('alert-danger')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $this->session->flashdata('alert-danger'); ?>
            </div>
        <?php elseif ($this->session->flashdata('alert-primary')) : ?>
            <div class="alert alert-primary" role="alert">
                <?= $this->session->flashdata('alert-primary'); ?>
            </div>
        <?php endif ?>
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
                <table class="table table-striped table-faculty" id="table_id">
                    <thead>
                        <tr id="facultytable ">
                            <th scope="col">Name</th>
                            <th scope="col">Sex</th>
                            <th scope="col">Birth Date</th>
                            <th scope="col">Campus</th>
                            <th scope="col">Program</th>
                            <th scope="col">Position</th>
                            <th scope="col">No. of Files</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <?php $i = 0 ?>
                    <tbody>
                        <?php foreach ($faculty as $row) : ?>
                            <tr>
                                <td><?php echo $row->name ?></td>
                                <td><?php echo $row->sex ?></td>
                                <td><?php echo $row->birth_date ?></td>
                                <td><?php echo $row->campus_name ?></td>
                                <td><?php echo $row->faculty_name ?></td>
                                <td><?php echo $row->position ?></td>
                                <?php if ($files[$i] > 0) : ?>
                                    <td class="text-success"><?php echo $files[$i] ?></td>
                                <?php else : ?>
                                    <td class="text-danger"><?php echo $files[$i] ?></td>
                                <?php endif ?>
                                <td>
                                    <a href="<?php echo base_url('showfaculty/' . $row->faculty_id) ?>" class="btn btn-info">Show</a>
                                    <!-- <a href="<?php echo base_url('editfaculty/' . $row->faculty_id) ?>" class="btn btn-primary">Edit</a> -->
                                    <a href="<?php echo base_url('archivefaculty/' . $row->faculty_id) ?>" class="btn btn-danger">Archive</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>