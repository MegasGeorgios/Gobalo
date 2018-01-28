<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h3>{{$nombre}}</h3><br>
    <p>{{$descripcion}}</p><br>
    <img src="{{ $message->embed($pathToFile) }}" style="max-width: 80%;padding-top: 20px;" alt="imagen">
  </body>
</html>
