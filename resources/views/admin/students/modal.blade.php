
<button type="button" class="btn btn-primary mb-4 ml-auto" data-toggle="modal" data-target="#exampleModalLong">
  Add Student
</button>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLongTitle">Student Information Form</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="firstname">First Name</label>
                      <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="firstname" placeholder="Enter First Name">
                      <small id="firstNameHelp" class="form-text text-muted">First name message</small>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="lastname">Last Name</label>
                      <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="lastname" placeholder="Enter Last Name">
                      <small id="lastNameHelp" class="form-text text-muted">Last name message</small>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="firstname">Middle Name</label>
                      <input type="text" name="middlename" class="form-control" id="firstname" aria-describedby="firstname" placeholder="Enter First Name">
                      <small id="middleNameHelp" class="form-text text-muted">Middle name message</small>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="firstname">Age</label>
                      <input type="number" name="age" class="form-control" id="firstname" aria-describedby="firstname" placeholder="Enter First Name">
                      <small id="ageHelp" class="form-text text-muted">Age message</small>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="yearLevel">Year Level</label>
                <select class="form-control" name="year" id="yearLevel">
                    <option value="firstYear">First Year</option>
                    <option value="secondYear">Second Year</option>
                    <option value="thirdYear">Third Year</option>
                    <option value="fourtYear">Fourth Year</option>
                </select>
                <small id="yearLevelHelp" class="form-text text-muted">Year level message</small>
              </div>
            </div>
            <div class="col-md-6">
                  <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="form-control" name="gender" id="gender">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                  </select>
                  <small id="genderHelp" class="form-text text-muted">Gender message</small>
                  </div>
              </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>