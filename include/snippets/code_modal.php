<div class="modal fade" id="codeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

        <form action="add-code.php" method="POST" name="doInsert" id="doInsert">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
                Create 
                <span class="g-color--primary"><?php echo $page;?></span>  
            Resource Link</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <input type="hidden" class="form-control" name="rss_page"  value="<?php echo $page; ?>">

            <div class="row">
              <div class="col-6"></div>
              <div class="col-6">
                <div class="mb-3">
                  <div class="form-group">
                    <select class="form-control select2" name="rss_type" style="width: 100%;" required>
                      <option value="1">Link Url</option>
                      <option value="2">File Resource</option>

                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Resource Name</label>
                  <input type="text" class="form-control" name="rss_name"  placeholder="Resource Name">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Link Url</label>
                  <input type="text" class="form-control" name="rss_main"  placeholder="Resource Url...">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="formFile" class="form-label">Select A Resource File</label>
                  <input class="form-control" type="file" name="rss_file" id="formFile">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Resource Notes</label>
                  <textarea class="form-control" name="rss_notes" rows="3"></textarea>
                </div>
              </div>
            </div>


          </div>
          <div class="modal-footer">
            <input class="btn btn-primary" name="doInsert" type="submit" id="doInsert3" value="Submit">
          </div>
        </form>

    </div>
  </div>
</div>