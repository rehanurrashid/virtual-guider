	<!-- add member -->
	<div class="modal fade" tabindex="-1" role="dialog" id="addTimetable">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Time Table</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <form method="post" action="TimetableManagement/create" id="timetableForm">
      <div class="modal-body">
        <div class="form-group">
          <label for="contact">Teacher</label>
          <select name="teacher" class="form-control">
             <option value="">Select Teacher</option>
                <?php
                if(!empty($teachers)){
                    foreach($teachers as $row){ 
                        echo '<option value="'.$row['f_id'].'">'.$row['f_name'].'</option>';
                    }
                }else{
                    echo '<option value="">Country not available</option>';
                }
                ?>
          </select>
        </div>
        <div class="form-group">
          <label for="contact">Room</label>
          <select name="room" class="form-control">
             <option value="">Select Room</option>
                <?php
                if(!empty($rooms)){
                    foreach($rooms as $row){ 
                        echo '<option value="'.$row['r_id'].'">'.$row['r_name'].'</option>';
                    }
                }else{
                    echo '<option value="">Room not available</option>';
                }
                ?>
          </select>
        </div>
			  <div class="form-group">
			    <label for="fname">Time </label>
			    <input type="text" class="form-control" id="time" name="time" placeholder="Class Time">
			  </div>
			  <div class="form-group">
			    <label for="lname">Shift</label><br>
			    <input type="radio" class="col-sm-1" value="morning"  name="shift" >Morning
          <input type="radio" class="col-sm-1" value="evening" name="shift" >Evening
			  </div>
        <div class="form-group">
          <label for="lname">Section</label><br>
          <input type="radio" class="col-sm-1" value="A"  name="section" >A
          <input type="radio" class="col-sm-1" value="B" name="section" >B
          <input type="radio" class="col-sm-1" value="C" name="section" >C
        </div>	
        <div class="form-group">
          <label for="contact">Day</label>
          <select name="day" class="form-control">
            <option value="">Select Day</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
          </select>
        </div>
        <div class="form-group">
          <label for="lname">Course</label>
          <input type="text" class="form-control" id="course" name="course" placeholder="Select Subject">
        </div>
			  <div class="form-group">
          <label for="lname">Degree</label><br>
          <input type="radio" class="col-sm-1" value="BS"  name="degree" >BS
          <input type="radio" class="col-sm-1" value="MS" name="degree" >MS
        </div>	
        <div class="form-group">
          <label for="lname">Department</label><br>
          <input type="radio" class="col-sm-1" value="IT"  name="department" >IT
          <input type="radio" class="col-sm-1" value="CS" name="department" >CS
          <input type="radio" class="col-sm-1" value="SE" name="department" >SE
        </div>
        <div class="form-group">
          <label for="contact">Semester</label>
          <select name="semester" class="form-control">
            <option value="">Select Semester</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>
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
	<div class="modal fade" tabindex="-1" role="dialog" id="editTimetableModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Time Table</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <form method="post" action="TimetableManagement/edit" id="editTimetableForm">
      <div class="modal-body">
        <div class="form-group">
            <label for="contact">Teacher</label>
            <select name="teacher" class="form-control">
               <option value="">Select Teacher</option>
                  <?php
                  if(!empty($teachers)){
                      foreach($teachers as $row){ 
                          echo '<option value="'.$row['f_id'].'">'.$row['f_name'].'</option>';
                      }
                  }else{
                      echo '<option value="">Country not available</option>';
                  }
                  ?>
            </select>
          </div>
          <div class="form-group">
            <label for="contact">Room</label>
            <select name="room" class="form-control">
               <option value="">Select Room</option>
                  <?php
                  if(!empty($rooms)){
                      foreach($rooms as $row){ 
                          echo '<option value="'.$row['r_id'].'">'.$row['r_name'].'</option>';
                      }
                  }else{
                      echo '<option value="">Room not available</option>';
                  }
                  ?>
            </select>
          </div>        
			   <div class="form-group">
          <label for="fname">Time </label>
          <input type="text" class="form-control" id="edittime" name="edittime" placeholder="Class Time">
        </div>
        <div class="form-group">
          <label for="lname">Shift</label><br>
          <input type="radio" class="col-sm-1" value="morning" id="editshift"  name="editshift" >Morning
          <input type="radio" class="col-sm-1" value="evening" id="editshift" name="editshift" >Evening
        </div>
        <div class="form-group">
          <label for="lname">Section</label><br>
          <input type="radio" class="col-sm-1" value="A"  name="editsection" >A
          <input type="radio" class="col-sm-1" value="B" name="editsection" >B
          <input type="radio" class="col-sm-1" value="C" name="editsection" >C
        </div> 
        <div class="form-group">
          <label for="contact">Day</label>
          <select name="editday" class="form-control">
            <option value="">Select Day</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
          </select>
        </div>
        <div class="form-group">
          <label for="lname">Course</label>
          <input type="text" class="form-control" id="editcourse" name="editcourse" placeholder="Select Subject">
        </div>
        <div class="form-group">
          <label for="lname">Degree</label><br>
          <input type="radio" class="col-sm-1" value="BS"  name="editdegree" >BS
          <input type="radio" class="col-sm-1" value="MS" name="editdegree" >MS
        </div>  
        <div class="form-group">
          <label for="lname">Department</label><br>
          <input type="radio" class="col-sm-1" value="IT"  name="editdepartment" >IT
          <input type="radio" class="col-sm-1" value="CS" name="editdepartment" >CS
          <input type="radio" class="col-sm-1" value="SE" name="editdepartment" >SE
        </div>
        <div class="form-group">
          <label for="contact">Semester</label>
          <select name="editsemester" class="form-control">
            <option value="">Select Semester</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>
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
<div class="modal fade" tabindex="-1" role="dialog" id="removeTimetableModal">
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
        <button type="button" id="removeTimeBtn" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<!-- removeMember -->