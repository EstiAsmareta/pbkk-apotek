<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Obat</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nama Obat</th>
                <th>Brand</th>
                <th> Rak </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($DataObat as $DataObat)
            <tr>
                <td>{{ $DataObat->obat_id }}</td>
                <td>{{ $DataObat->nama_produsen }}</td>
                <td>{{ $DataObat->rak_id }}</td>
                {{-- <td>{{ $DataObat->DataRak->rak }}</td> --}}
                <td>
                    <a href="{{ route('edit', $DataObat->obat_id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> 