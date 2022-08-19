<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add Announcement</b></h4>
          	</div>
          	<div class="modal-body">

            	<form class="form-horizontal" method="POST" action="announce_add.php" enctype="multipart/form-data">
          		
                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Event Name:</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="announce_name" name="announce_name" required>
                  	</div>
                </div>
                
				<div class="form-group">
                  	<label for="date_start" class="col-sm-3 control-label">Date Start:</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
 						<input type="datetime-local" class="form-control"  id="date_start" name="date_start">
                      </div>
                  	</div>
                </div>

				<div class="form-group">
                  	<label for="date_end" class="col-sm-3 control-label">Date End:</label>

                  	<div class="col-sm-9"> 
                      <div class="date">
					  	<input type="datetime-local" class="form-control"  id="date_end" name="date_end">
                      </div>
                  	</div>
                </div>

               
                <div class="form-group">
                    <label for="announce_persons" class="col-sm-3 control-label">Persons Involve:</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="announce_persons" name="announce_persons">
                    </div>
                </div>

				<div class="form-group">
                    <label for="announce_venue" class="col-sm-3 control-label">Venue:</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="announce_venue" name="announce_venue">
                    </div>
                </div>

				<div class="form-group">
                    <label for="announce_details" class="col-sm-3 control-label">More Details:</label>

                    <div class="col-sm-9">
					<textarea class="form-control" name="announce_details" id="announce_details"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" name="photo" id="photo">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="announce_name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="announce_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="announce_id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>    