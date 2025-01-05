<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title)?$title:'Judul Default' }}</title>
</head>
<body>
    {{$slot}}
    <h1>Hallo ini Component</h1>
    <p>Tanggal: {{$tanggal}}</p>
    <p>Penulis: {{$penulis}}</p>
</body>
</html>