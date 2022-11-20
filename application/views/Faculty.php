<div class="row d-flex justify-content-center">
    <div class="col-10">
        <h3><?php echo $title?></h3>
        <a href="<?php echo base_url('addfaculty/'.$campus."/".$department)?>" class="btn btn-success">Add Faculty</a>
    </div>
</div>

<div class="row my-3 d-flex justify-content-center">
    <div class="col-10">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Faculty Name</th>
                            <th scope="col">Position</th>
                            <th scope="col" colspan="2">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($faculty as $row) : ?>
                            <tr>
                                <td><?php echo $row->name ?></td>
                                <td><?php echo $row->faculty_name ?></td>
                                <td><?php echo $row->position ?></td>
                                <td>
                                    <a href="" class="btn btn-info">Show</a>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="<?php echo base_url()?>" class="btn btn-danger">Archive</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>