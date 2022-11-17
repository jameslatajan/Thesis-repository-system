<!-- campuses -->
<div class="row d-flex justify-content-center">
  <div class="col-8 ">
    <h1 class="title text-uppercase">Campuses</h1>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addcampus">Add Campus</button>
  </div>
</div>
<!-- content -->
<div class="row my-3 d-flex justify-content-center">
  <div class="col-8">
    <div class="card">
      <h5 class="card-header text-uppercase">Surigao City</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-12">
            <h6 class="text-uppercase">Campus Director: </h6>
          </div>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col text-uppercase">Department Name</th>
              <th scope="col text-uppercase">Dean</th>
              <th scope="col text-uppercase" colspan="3">Option</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mark</td>
              <td>Otto</td>
              <td>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-info">View</button>
              </td>
            </tr>
            <tr>
              <td>Mark</td>
              <td>Otto</td>
              <td>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-info">View</button>
              </td>
            </tr>
            <tr>
              <td>Mark</td>
              <td>Otto</td>
              <td>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-info">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- content -->

<!-- modal -->
<!-- form -->
<form action="addcampus" method="post">
  <div class="modal fade" id="addcampus" tabindex="-1" aria-labelledby="addcampus" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label for="" class="form-label">Campus Name</label>
            <input type="text" name="campus_name" class="form-control text-uppercase" id="">
            <div>
              <?php echo @$error; ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Campus Director</label>
            <input type="text" name="campus_director" class="form-control text-uppercase" id="">
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CEIT Dean</label>
                <input type="text" name="ceit_dean" class="form-control text-uppercase" id="">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CAS Dean</label>
                <input type="text" name="cas_dean" class="form-control text-uppercase" id="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">CTE Dean</label>
                <input type="text" name="cte_dean	" class="form-control text-uppercase" id="">
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="" class="form-label">COT Dean</label>
                <input type="text" name="cot_dean" class="form-control text-uppercase text-uppercase " id="">
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" name="addcampus">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- form -->
<!-- modal -->

<!-- campuses -->