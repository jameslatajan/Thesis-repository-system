<div class="row d-flex justify-content-center my-5">
    <div class="col-10">
        <div class="card">
            <div class="card-body">
                <table class="table table-document">
                    <tbody>
                        <tr>
                            <td>Title: </td>
                            <td><?php echo $document->title ?> </td>
                        </tr>
                        <tr>
                            <td>Program: </td>
                            <td><?php echo $document->faculty_name ?></td>
                        </tr>
                        <tr>
                            <td>Author: </td>
                            <td><?php echo $document->author ?></td>
                        </tr>
                        <tr>
                            <td>Abstract: </td>
                            <td>
                                <p class="text-wrap text-justify">
                                    <?php echo $document->abstract ?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>Date Issued: </td>
                            <td><?php echo $document->issue_date ?></td>

                        </tr>
                        <tr>
                            <td>File: </td>
                            <td><?php echo $document->file ?></td>
                        </tr>
                        <tr>
                            <td>Created At: </td>
                            <td><?php echo $document->created_at ?></td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn btn-danger" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
            </div>
        </div>
    </div>
</div>