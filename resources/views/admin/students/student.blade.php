@extends('layouts.app')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-body">
            <div class="d-flex justify-content-center mb-4">
                <img src="{{ asset('images/htc.png') }}" width="75" height="75" class="d-inline-block align-top mr-3" alt="">
            </div>
            <div class="text-center mb-5">
                <p class="h5 mb-0">Student Information Form</p>
            </div>
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
                <div>
                    <center>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
