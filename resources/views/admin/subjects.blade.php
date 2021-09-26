@extends('layouts.app')
@section('content')
    <a href="/admin/subject/add">
        <button type="button" class="btn btn-success">Add Subject</button>
    </a>
    <table class="table mt-4">
        <thead class="thead-light">
            <tr>
            <th scope="col">Subject Title</th>
            <th scope="col">Written Works Percentage</th>
            <th scope="col">Performace Tasks Percentage</th>
            <th scope="col">Exam Percentage</th>
            <th scope="col">Assign Subject</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Science</td>
                <td>10%</td>
                <td>60%</td>
                <td>50%</td>
                <td>
                    <form>
                        <select type="button" class="form-control border border-danger pt-0 rounded-1 pb-0" name="gender" id="gender" style="height: 25px;" onchange="(function(){
                            $('#assign').click();
                        })()">
                            <option value="">Subject</option>
                            <option value="math">Math</option>
                            <option value="science">Science</option>
                        </select>
                        <input type="submit" id="assign" name="submit" value="Submit" style="display: none;">
                    </form>
                </td>
                <td class="d-flex">
                    <button
                        class="btn btn-light"
                        onclick="(function(){
                            window.location.href = '/admin/subject/edit/1'
                        })()">
                            <i class="fas fa-pencil-alt text-success"></i>
                    </button>
                    <form>
                        <button
                            type="submit"
                            class="btn btn-light"
                            
                        >
                            <i class="fas fa-trash-alt text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection