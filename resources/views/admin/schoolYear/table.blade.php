<?php
$datas = [
    [
        'schoolyear' => '2020 - 2021',
        'period' => 'Audrey',
        'status' => 'Lego',
    ],
];
?>
<table class="table mt-3">
    <thead class="thead-light">
        <tr>
            <th scope="col">School Year</th>
            <th scope="col">Grading Period</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr>
                <td class="pt-3">{{ $data['schoolyear'] }}</td>
                <td class="pt-3">{{ $data['period'] }}</td>
                <td class="pt-3">{{ $data['status'] }}</td>
                <td class="d-flex">
                    <form>
                        <button class="btn btn-light">
                            <i class="fas fa-pencil-alt text-success"></i>
                        </button>
                        <button type="submit" class="btn btn-light">
                            <i class="fas fa-trash-alt text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
