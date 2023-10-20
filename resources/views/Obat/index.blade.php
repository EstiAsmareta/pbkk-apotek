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
            <tr>Nama Obat</tr>
            <tr>Brand</tr>
            <tr> Rak </tr>
        </thead>
        <tbody>
            @foreach ($DataObat as $DataObat)
            <td>{{ $DataObat->id_obat }}</td>
            <td>{{ $DataObat->nama_produsen }}</td>
            <td>{{ $DataObat->id_Rak }}</td>
            @endforeach
        </tbody>
    </table>
</body>
</html> 