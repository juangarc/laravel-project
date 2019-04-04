<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aserweb</title>
</head>
<body>
    <div>
        Respuesta a Solicitud 
    </div>

    <p>Hola!  Su cita registrada el dia </p>
    <p>Ha sido aprobada</p>
    <ul>
        <li>Lugar o institucion: </li>
        <li>Dia: {{ $solicitudCall->$fecha_cita }}</li>
        <li>Hora: {{ $solicitudCall->hora }}</li>
    </ul>
</body>
</html>