<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Perkuliahan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-4">
    <h1 class="mb-4">Daftar Perkuliahan</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Mata Kuliah</th>
                <th>Jam</th>
                <th>SKS</th>
                <th>Dosen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($daftar as $item)
            <tr>
                <td>{{ $item['no'] }}</td>
                <td>{{ $item['hari'] }}</td>
                <td>{{ $item['mata_kuliah'] }}</td>
                <td>{{ $item['jam'] }}</td>
                <td>{{ $item['sks'] }}</td>
                <td>{{ $item['dosen'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
