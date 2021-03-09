<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>HomePage</h1>
    <p>Benvenuti nella pagina di {{$nome}} {{$cognome}} </p>
    <ul>
    Queste sono le mie competenze:
    @foreach($competenze as $competenza)
    <li> {{$competenza}} </li>
    @endforeach
    </ul>
</body>
</html>