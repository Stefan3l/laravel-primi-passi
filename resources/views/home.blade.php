<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel primi passi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-5">Hello, world!</h1>
    <hr>
    <div class="container mt-5">
        <div class="d-flex justify-content-center gap-4">
            <a href="{{ route("home") }}" class="btn btn-primary">Home</a>
            <a href="{{ route("about") }}" class="btn btn-primary">About</a>
            <a  class="btn btn-primary" href="{{ route("contact") }}">Contact</a>
            
        </div>
        <h1>{{$info}}</h1>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>