<div class="row d-flex justify-content-center">
    <div class="col-8">
        <!-- <form action="<?= base_url()?>testupload/upload" method="post" enctype="multipart/form-data"> -->
            <div class="mb-3">

                <?php echo form_open_multipart('testupload/upload')?>
                <label class="form-label" for="customFile">Insert File Here</label>
                <input type="file" class="form-control" id="customFile" name="customFile" />
                <input type="submit" name="submit" value="upload" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>