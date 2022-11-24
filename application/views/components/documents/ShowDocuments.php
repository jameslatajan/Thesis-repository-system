<div class="row d-flex my-4 justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h5>Files</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a href="<?php echo base_url("addfile/" . $faculty->faculty_id) ?>" class="btn btn-success">Add Files</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">File Name</th>
                            <th scope="col">Author</th>
                            <th scope="col">Date Issued</th>
                            <th scope="col" colspan="3">Option</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($files as $row) : ?>
                            <tr>
                                <td><?php echo $row->title ?></td>
                                <td><?php echo $row->file ?></td>
                                <td><?php echo $row->author ?></td>
                                <td><?php echo $row->issue_date ?></td>
                                <td>
                                    <a href="<?php echo base_url('download/' . $row->file_id) ?>" class="btn btn-primary">Download</a>
                                    <a href="<?php echo base_url('editfile/' . $row->file_id) ?>" class="btn btn-info">Edit</a>
                                    <a href="<?php echo base_url('deletefile/' . $row->file_id) ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>