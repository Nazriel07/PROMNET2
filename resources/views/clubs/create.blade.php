<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah club</h1>
    @if (session('success'))
        <p>{{ session('success')}}</p>
    @endif
    <form action="{{ route('club.store') }}" method="POST">
    @csrf
        <label for="name">Nama club</label>
        <input type="text" id="name" required>
        <button type="submit">Simpan</button>
        
    </form>
</body>
</html>