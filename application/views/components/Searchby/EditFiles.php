<div class="row d-flex justify-content-center">
    <div class="col-8">
        <div class="card">

            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h5 class="">Edit Documents</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a href="<?php echo $_SERVER['HTTP_REFERER']?>" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('update/' . $file->file_id) ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="faculty_id" value="<?php echo $file->faculty_id ?>">
                    <input type="hidden" name="campus_name" value="<?php echo $file->campus_name ?>">
                    <input type="hidden" name="department" value="<?php echo $file->department ?>">
                    <input type="hidden" name="faculty_name" value="<?php echo $file->faculty_name ?>">
                    <input type="hidden" name="old_file" value="<?php echo $file->file ?>">
                    <input type="hidden" name="filepath" value="<?php echo $filepath ?>">

                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" id="" name="title" value="<?php echo $file->title ?>">
                        <small class="text-danger"><?php echo form_error('title'); ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Authors</label>
                        <input type="text" class="form-control" id="" name="author" value="<?php echo $file->author ?>">
                        <small class="text-danger"><?php echo form_error('author'); ?></small>
                    </div>
                    <div class="mb-3">

                        <label for="exampleFormControlTextarea3">Abstract</label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="7" name="abstract"><?php echo $file->abstract ?></textarea>
                        <small class="text-danger"><?php echo form_error('abstract'); ?></small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Date issued</label>
                        <input type="date" class="form-control" id="" name="issue_date" value="<?php echo $file->issue_date ?>">
                        <small class="text-danger"><?php echo form_error('issue_date'); ?></small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="customFile">Insert File Here</label>
                        <input type="file" class="form-control" id="customFile" name="file" />
                    </div>
                    <button type="submit" class="btn btn-primary">Upadate</button>

                </form>
            </div>
        </div>
    </div>
</div>