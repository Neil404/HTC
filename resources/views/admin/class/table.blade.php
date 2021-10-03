<?php
$datas = [
    [
        'level' => 'Grade 1',
        'section' => 'Faith'
    ],
];
?>
<table class="table mt-3">
    <thead class="thead-light">
        <tr>
            <th scope="col">Grade Level</th>
            <th scope="col">Section Name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr>
                <td class="pt-3">{{ $data['level'] }}</td>
                <td class="pt-3">{{ $data['section'] }}</td>
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
