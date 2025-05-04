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
                <th>NISN</th>
                <th>Nama </th>
                <th>ALAMAT</th>
                <th>NO TELPON </th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($query as $mk)
                <tr>
                    <td>{{ $mk->nisn }}</td>
                    <td>{{ $mk->nama }}</td>
                    <td>{{ $mk->alamat }}</td>
                    <td>{{ $mk->no_telpon }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>

</body>
</html>