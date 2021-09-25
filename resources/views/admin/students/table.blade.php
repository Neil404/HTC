<?php
    $datas = [
      [
        'firstname' => 'John',
        'lastname' => 'Doe',
        'middlename' => 'Carabao',
        'age' => 23,
        'gender' => 'Male'
      ],
      [
        'firstname' => 'Steven',
        'lastname' => 'Jobs',
        'middlename' => 'Paul',
        'age' => 27,
        'gender' => 'Male'
      ], 
      [
        'firstname' => 'John',
        'lastname' => 'Steven',
        'middlename' => 'Doe',
        'age' => 23,
        'gender' => 'Male'
      ], 
      [
        'firstname' => 'Kagura',
        'lastname' => 'Haya',
        'middlename' => 'Umbre',
        'age' => 19,
        'gender' => 'Female'
      ], 
      [
        'firstname' => 'Oddette',
        'lastname' => 'Lance',
        'middlename' => 'Ode',
        'age' => 24,
        'gender' => 'Female'
      ], 
    ];
?>
<table class="table mt-3">
    <thead class="thead-light">
        <tr>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Middle Name</th>
          <th scope="col">Age</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $data)
        <tr>
            <td>{{$data['firstname']}}</td>
            <td>{{$data['lastname']}}</td>
            <td>{{$data['middlename']}}</td>
            <td>{{$data['age']}}</td>
            <td>{{$data['gender']}}</td>
            <td class="d-flex">
              <button
                class="btn btn-light"
                onclick="(function(){
                    window.location.href = '/admin/student/edit/1'
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
        @endforeach
    </tbody>
</table>
