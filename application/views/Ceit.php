<div class="row d-flex justify-content-center">
    <div class="col-10">
        <h3>College of Engineering and Information Technology</h3>
        <a href="<?php echo current_url()."/addceit/".$cid?>" class="btn btn-success">Add Faculty</a>
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
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($ceit as $row): ?>
                        <tr>
                            <td><?php echo $row->name?></td>
                            <td><?php echo $row->faculty_name?></td>
                            <td><?php echo $row->position?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>