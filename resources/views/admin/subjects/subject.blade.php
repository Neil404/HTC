@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-body">
                <div class="d-flex justify-content-center mb-4">
                    <img src="{{ asset('images/htc.png') }}" width="75" height="75" class="d-inline-block align-top mr-3"
                        alt="">
                </div>
                <div class="text-center mb-5">
                    <p class="h5 mb-0">Subject Information Form</p>
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="subject">Subject Name</label>
                                <input type="text" name="subject" class="form-control" id="subject"
                                    aria-describedby="subject" placeholder="Enter Subject Name">
                                <small id="subjectHelp" class="form-text text-muted">Subject message</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="writtenWorks">Written Works Percentage</label>
                                <input type="number" name="writtenWorks" class="form-control" id="writtenWorks"
                                    aria-describedby="writtenWorks" placeholder="Enter Written Work Percentage">
                                <small id="writtenWorksHelp" class="form-text text-muted">Written Works message</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="performaceTasks">Performace Tasks Percentage</label>
                                <input type="number" name="performaceTasks" class="form-control" id="performaceTasks"
                                    aria-describedby="performaceTasks" placeholder="Enter Performace Tasks Percentage">
                                <small id="performaceTasksHelp" class="form-text text-muted">Performace Tasks
                                    message</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="examPercentage">Exam Percentage</label>
                                <input type="number" name="examPercentage" class="form-control" id="examPercentage"
                                    aria-describedby="examPercentage" placeholder="Enter Exam Percentage">
                                <small id="examPercentageHelp" class="form-text text-muted">Subject message</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="examPercentage">School Year</label>
                                {{-- <input type="number" name="examPercentage" class="form-control" id="examPercentage"
                                    aria-describedby="examPercentage" placeholder="Enter Exam Percentage"> --}}
                                <select type="button" class="form-control pt-0 rounded-1 pb-0" name="school-year"
                                    id="gender">
                                    <option value="1">2021 - 2022</option>
                                </select>
                                <small id="examPercentageHelp" class="form-text text-muted">School Year Message
                                    message</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="examPercentage">Grading Period</label>
                                <select type="button" class="form-control pt-0 rounded-1 pb-0" name="gradingPeriod"
                                    id="gender">
                                    <option value="first">First Grading</option>
                                    <option value="second">Second Grading</option>
                                    <option value="third">Third Grading</option>
                                    <option value="fourth">Fourth Grading</option>
                                </select>
                                <small id="examPercentageHelp" class="form-text text-muted">Subject message</small>
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
