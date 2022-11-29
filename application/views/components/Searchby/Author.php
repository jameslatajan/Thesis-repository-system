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
            <h4>
                Search by Author
            </h4>
        </div>
        <div class="col-2 d-flex justify-content-end">
            <!-- <button class="btn btn-success me-2">
                <a href="<?php echo base_url() ?>" class="btn-add">Add Faculty</a>
            </button> -->
        </div>
    </div>
</div>

<div class="row my-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table" id="table_id">
                    <thead>
                        <tr>
                            <th scope="col">Author</th>
                            <th scope="col">Title</th>
                            <th scope="col">Issued Date</th>
                            <th scope="col">File</th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($author as $row) : ?>
                            <tr>
                                <td><?php echo $row->author ?></td>
                                <td><?php echo $row->title ?></td>
                                <td><?php echo $row->issue_date ?></td>
                                <td><?php echo $row->file ?></td>
                                <td>
                                    <a href="<?php echo base_url('download/' . $row->file_id) ?>" class="btn btn-primary">Download</a>
                                    <a href="<?php echo base_url('editfiles/' . $row->file_id) ?>" class="btn btn-info">Edit</a>
                                    <a href="<?php echo base_url('deletefile/' . $row->file_id) ?>" class="btn btn-danger">Delete</a>
                                    <!-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" href="<?php echo base_url('details/' . $row->file_id) ?>"> -->
                                    <a class="btn btn-primary" href="<?php echo base_url('view/' . $row->file_id) ?>">
                                        Details
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>