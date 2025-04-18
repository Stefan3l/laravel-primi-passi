<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contact</h1>
    <h2>Terza pagina</h2>
    <div class="d-flex justify-content-center gap-4">
            <a href="{{ route("home") }}" class="btn btn-primary">Home</a>
            <a href="{{ route("about") }}" class="btn btn-primary">About</a>
            <a  class="btn btn-primary" href="{{ route("contact") }}">Contact</a>
        </div>
</body>
</html>