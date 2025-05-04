<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped project-orders-table">
        <thead>
            <tr>
                <th>id</th>
                <th>nisn </th>
                <th>buku id</th>
                <th>tanggal pinjam</th>

            </tr>
        </thead>
        <tbody>


            @foreach ($query as $mk)
                <tr>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->nisn }}</td>
                    <td>{{ $mk->buku_id }}</td>
                    <td>{{ $mk->tanggal_kembali }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>

</body>
</html>