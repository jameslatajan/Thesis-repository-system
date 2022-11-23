<div class="card">
    <div class="card-body d-flex">
        <div class="col-7 d-flex">

            <h4><?php echo $title ?></h4>
        </div>
        <div class="col-2 d-flex justify-content-end">
            <button class="btn btn-success me-2">
                <a href="<?php echo base_url('addfaculty/' . $campus . "/" . $department) ?>" class="btn-add">Add Faculty</a>
            </button>
        </div>
        <div class="col-3">
            <form class="d-flex justify-content-end" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<div class="row my-3">
    <div class="col-12">
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
                                    <a href="<?php echo base_url('showfaculty/' . $row->faculty_id) ?>" class="btn btn-info">Show</a>
                                    <!-- <a href="<?php echo base_url('editfaculty/' . $row->faculty_id) ?>" class="btn btn-primary">Edit</a> -->
                                    <a href="<?php echo base_url('archivefaculty/' . $campus . "/" . $department . '/' . $row->faculty_id) ?>" class="btn btn-danger">Archive</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>