<div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

        <form action="add-note.php" method="POST" name="doInsert" id="doInsert">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
                Create 
                <span class="g-color--primary"><?php echo $page;?></span>  
            Note</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <input type="hidden" class="form-control" name="page_code"  value="<?php echo $page_code; ?>">


            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Note Title</label>
                  <input type="text" class="form-control" name="note_name"  placeholder="Note Title">
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Note Main</label>
                  <textarea class="form-control" name="note_main" rows="5"></textarea>
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