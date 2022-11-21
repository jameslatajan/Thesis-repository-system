<div class="row d-flex justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4><?php echo $faculty->name ?></h4>
                <a href="<?php echo base_url('editfaculty/' . $faculty->faculty_id) ?>" class="btn btn-primary">Edit</a>
            </div>
            <div class="card-body">
                <h4>Faculty Name: <?php echo $faculty->faculty_name ?></h4>
                <h4>Rank: <?php echo $faculty->position ?></h4>
                <h4>Birth Date: <?php echo $faculty->birth_date ?></h4>
                <h4>Address: <?php echo $faculty->address ?></h4>
                <h4>Contact Number: <?php echo $faculty->contact_no ?></h4>
            </div>
        </div>
    </div>
</div>
