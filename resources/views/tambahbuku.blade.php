<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('simpanbuku') }}" method="POST">
        @csrf
        <input type="text" name="judul">
        <input type="text" name="pengarang">
        <input type="number" name="tahun">
        <button type="submit">tambah</button>
    </form>
</body>
</html>