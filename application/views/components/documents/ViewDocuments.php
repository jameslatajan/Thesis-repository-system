<div class="row d-flex justify-content-center my-5">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <!-- <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead> -->
                    <tbody>
                        <tr>
                            <td>Title: </td>
                            <td><?php echo $document->title ?> </td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><?php echo $document->title ?></td>
                        </tr>
                        <tr>
                            <td>Faculty Name: </td>
                            <td><?php echo $document->faculty_name ?></td>
                        </tr>
                        <tr>
                            <td>Author: </td>
                            <td><?php echo $document->author ?></td>
                        </tr>
                        <tr>
                            <td>Abstract: </td>
                            <td><?php echo $document->abstract ?></td>

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
                <a class= "btn btn-danger" href="<?php echo $_SERVER['HTTP_REFERER']?>">Back</a>
            </div>
        </div>
    </div>
</div>