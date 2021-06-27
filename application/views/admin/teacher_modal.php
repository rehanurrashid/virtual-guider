	<!-- add member -->
	<div class="modal fade" tabindex="-1" role="dialog" id="addMember">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Teacher</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <form method="post" action="TeacherManagement/create" id="createForm">
      <div class="modal-body">     
			  <div class="form-group">
			    <label for="fname">Name  </label>
			    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
			  </div>
			  <div class="form-group">
			    <label for="lname">Email</label>
			    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
			  </div>
        <div class="form-group">
          <label for="lname">Password</label>
          <input type="Password" class="form-control" id="pass" name="pass" placeholder="Password">
        </div>	
        <div class="form-group">
          <label for="lname">Status</label><br>
          <input type="radio" class="col-sm-1" value="1"  name="status" >Available
          <input type="radio" class="col-sm-1" value="0" name="status" >Not Available
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
	<div class="modal fade" tabindex="-1" role="dialog" id="editMemberModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Teacher</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <form method="post" action="TeacherManagement/edit" id="editForm">
      <div class="modal-body">        
			   <div class="form-group">
          <label for="fname">Name</label>
          <input type="text" class="form-control" id="editname" name="editname" placeholder=" Teacher Name">
        </div>
        <div class="form-group">
          <label for="lname">Email</label>
          <input type="text" class="form-control" id="editemail" name="editemail" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="lname">Password</label>
          <input type="Password" class="form-control" id="editpass" name="editpass" placeholder="Password">
        </div>  
        <div class="form-group">
          <label for="lname">Status</label><br>
          <input type="radio" class="col-sm-1" value="1"  name="status" >Available
          <input type="radio" class="col-sm-1" value="0" name="status" >Not Available
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
<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Remove Teacher</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  
      </div>
      <div class="modal-body">
        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="removeMemberBtn" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<!-- removeMember -->