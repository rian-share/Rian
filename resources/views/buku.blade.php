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
                <th class="ms-5">ID</th>
                <th>judul</th>
                <th>pengarang</th>
                <th>tahun terbit</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($query as $mk)
                <tr>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->judul }}</td>
                    <td>{{ $mk->pengarang }}</td>
                    <td>{{ $mk->tahun_terbit }}</td>
                    <td><a href="hapusbuku/{{  $mk->id}}">hapus</a></td>
                </tr>
            @endforeach


        </tbody>
    </table>

</body>
</html>