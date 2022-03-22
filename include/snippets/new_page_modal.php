<div class="modal fade" id="newPageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

        <form action="add-page.php" method="POST" name="doInsert" id="doInsert">

          <input type="hidden" class="form-control" name="user_code" value="<?php echo $usr_code;?>">

          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Page </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <div class="row">
              <div class="col-6"></div>
              <div class="col-6">
                <div class="mb-3">
                  <div class="form-group">
                    <select class="form-control select2" name="page_type" style="width: 100%;" required>
                      <label for="exampleFormControlInput1" class="form-label">Page Type</label>
                      <option value="1">Tutorial</option>
                      <option value="2">File Resource</option>

                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Page Name</label>
                  <input type="text" class="form-control" name="page_name"  placeholder="Page Name">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Page Short Description</label>
                  <input type="text" class="form-control" name="page_short_description"  placeholder="Page Short Description">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Page Description</label>
                  <textarea class="form-control" name="page_description" rows="6"></textarea>
                </div>
              </div>
            </div>


          </div>
          <div class="modal-footer">
            <input class="btn btn-success" name="doInsert" type="submit" id="doInsert3" value="Create">
          </div>
        </form>

    </div>
  </div>
</div>