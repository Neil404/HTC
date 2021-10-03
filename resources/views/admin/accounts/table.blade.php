<?php
$datas = [
    [
        'photo' => '',
        'firstname' => 'Audrey',
        'middlename' => 'Lego',
        'lastname' => 'Deladia',
        'sex' => 'Male',
        'accounttype' => 'TEACHER',
        'email' => 'teacher@email.com',
    ]
];
?>
<table class="table mt-3">
    <thead class="thead-light">
        <tr>
            <th scope="col">Photo</th>
            <th scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Sex</th>
            <th scope="col">Account Type</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr>
                <td>
                    @if (!$data['photo'])
                        {{ $data['photo'] }}
                    @endif
                    @if (!$data['photo'])
                        <i class="fas fa-user-circle h1 mb-0 pt-0 text-primary"></i>
                    @endif
                </td>
                <td class="pt-3">{{ $data['firstname'] }}</td>
                <td class="pt-3">{{ $data['middlename'] }}</td>
                <td class="pt-3">{{ $data['lastname'] }}</td>
                <td class="pt-3">{{ $data['sex'] }}</td>
                <td class="pt-3">{{ $data['accounttype'] }}</td>
                <td class="pt-3">{{ $data['email'] }}</td>
                <td class="d-flex">
                    <form>
                        <button type="submit" class="btn btn-light">
                            <i class="fas fa-trash-alt text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
