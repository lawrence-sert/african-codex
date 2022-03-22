<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

        <form action="edit-code.php" method="POST" name="doInsert" id="doInsert">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
                User Profile 
                <span class="g-color--primary"><?php echo $page;?></span>  </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <input type="hidden" class="form-control" name="usrId"  value="<?php echo $usrId; ?>">

            <div class="row">
              <div class="col-8">saad</div>
              <div class="col-4">ds</div>
            </div>

          </div>
          <div class="modal-footer">
            <input class="btn btn-primary" name="doInsert" type="submit" id="doInsert3" value="Submit">
          </div>
        </form>

    </div>
  </div>
</div>