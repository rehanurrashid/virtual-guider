  <!-- add member -->
  <div class="modal fade" tabindex="-1" role="dialog" id="addRoom">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Room</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <form method="post" action="RoomManagement/create" id="addRoomForm">
      <div class="modal-body">     
        <div class="form-group">
          <label for="fname">Room Name  </label>
          <input type="text" class="form-control" id="rname" name="rname" placeholder="Room Name">
        </div>
        <div class="form-group">
          <label for="lname">Longitute</label>
          <input type="text" class="form-control" id="longi" name="longi" placeholder="Room Longitute">
        </div>
        <div class="form-group">
          <label for="lname">Latitude</label>
          <input type="text" class="form-control" id="lati" name="lati" placeholder="Room Latitude">
        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- /add mmebers -->

  <!-- edit member -->
  <div class="modal fade" tabindex="-1" role="dialog" id="editRoomModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Room</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <form method="post" action="RoomManagement/edit" id="editRoomForm">
      <div class="modal-body">        
        <div class="form-group">
          <label for="editFname">Room Name  </label>
          <input type="text" class="form-control" id="editrname" name="editrname" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="editLname">Longitute</label>
          <input type="text" class="form-control" id="editlongi" name="editlongi" placeholder="Room Longitute">
        </div>  
        <div class="form-group">
          <label for="lname">Latitude</label>
          <input type="text" class="form-control" id="editlati" name="editlati" placeholder="Room Latitude">
        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- /edit mmebers -->

<!-- removeMember -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeRoomModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Remove Room</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  
      </div>
      <div class="modal-body">
        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="removeRoomBtn" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- removeMember -->