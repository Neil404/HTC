<?php
$datas = [
    [
        'faculty' => 'Deladia, Audrey Lego',
        'assignedsubject' => 'Math'
    ],
];
?>
<table class="table mt-3">
    <thead class="thead-light">
        <tr>
            <th scope="col">Faculty Name</th>
            <th scope="col">Assigned Subjects</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr>
                <td class="pt-3">{{ $data['faculty'] }}</td>
                <td class="pt-3">
                    <button class="btn btn-primary" onclick="(function(){
                        window.location.href = '/admin/grades'
                    })()"> {{$data['assignedsubject']}} </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
