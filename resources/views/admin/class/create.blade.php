<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Add School Year</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-5 pb-5">
                <div class="row mb-3">
                    <div class="col-md-3 col-sm-12 d-flex align-items-center">
                        Grading Period:
                    </div>
                    <div class="col-md-9 col-sm-12 input-group">
                        <select type="button" class="form-control pt-0 rounded-1 pb-0" name="gender" id="gender">
                            @for($i = 1; $i < 13; $i++)
                                <option value="{{'grade' . $i}}">{{'Grade ' . $i}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3 col-sm-12 d-flex align-items-center">
                        Section Name:
                    </div>
                    <div class="col-md-9 col-sm-12 input-group">
                        <input type="text" class="form-control" placeholder="Section"
                            aria-label="Section" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary text-white btn-sm">Save</button>
                <button type="button" class="btn btn-primary text-white btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
